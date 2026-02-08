document.addEventListener('DOMContentLoaded', function () {
    const mainImage = document.getElementById('main-product-image');
    // Select thumbnails ensuring we target the images inside the buttons in the grid
    const thumbnailImages = document.querySelectorAll('.grid.grid-cols-4 button img');
    const modal = document.getElementById('image-gallery-modal');
    const galleryImage = document.getElementById('gallery-image');
    const closeBtn = document.getElementById('gallery-close');
    const nextBtn = document.getElementById('gallery-next');
    const prevBtn = document.getElementById('gallery-prev');
    const currentIndexSpan = document.getElementById('gallery-current-index');
    const totalCountSpan = document.getElementById('gallery-total-count');
    const galleryLoader = document.getElementById('gallery-loader');

    const galleryThumbnailsContainer = document.getElementById('gallery-thumbnails');

    let images = [];
    let currentIndex = 0;

    // --- Initialization ---
    function initGallery() {
        // Collect all unique images from main image and thumbnails
        const collectedImages = new Set();

        // Add main image initially (if present)
        if (mainImage && mainImage.src) {
            collectedImages.add(mainImage.src);
        }

        // Add thumbnail images
        thumbnailImages.forEach(img => {
            collectedImages.add(img.src);
        });

        images = Array.from(collectedImages);

        if (totalCountSpan) {
            totalCountSpan.textContent = images.length;
        }

        // Add cursor hint to main image
        if (mainImage) {
            mainImage.style.cursor = 'zoom-in';
            mainImage.title = 'Double click to expand';
        }
    }

    initGallery();

    // --- Main Image Interaction (Thumbnail Clicks) ---
    thumbnailImages.forEach((thumb) => {
        // Assume the parent button is the click target
        const button = thumb.closest('button');
        if (button) {
            button.addEventListener('click', function () {
                // Update main image source
                if (mainImage) {
                    mainImage.style.opacity = '0.5';
                    setTimeout(() => {
                        mainImage.src = thumb.src;
                        mainImage.style.opacity = '1';
                        // Update active state visual
                        document.querySelectorAll('.grid.grid-cols-4 button').forEach(btn => {
                            btn.classList.remove('border-primary', 'border-2');
                            btn.classList.add('border-border');
                        });
                        button.classList.remove('border-border');
                        button.classList.add('border-primary', 'border-2');
                    }, 200);
                }
            });
        }
    });

    // --- Gallery Functions ---

    function renderGalleryThumbnails() {
        if (!galleryThumbnailsContainer) return;

        galleryThumbnailsContainer.innerHTML = ''; // Clear existing

        images.forEach((src, index) => {
            const thumbBtn = document.createElement('button');
            thumbBtn.className = `min-w-[50px] w-[50px] h-[70px] border-2 rounded overflow-hidden transition ${index === currentIndex ? 'border-primary' : 'border-transparent opacity-60 hover:opacity-100'}`;

            const img = document.createElement('img');
            img.src = src;
            img.className = 'w-full h-full object-cover';

            thumbBtn.appendChild(img);

            thumbBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                currentIndex = index;
                updateGalleryImage();
            });

            galleryThumbnailsContainer.appendChild(thumbBtn);
        });
    }

    function openGallery() {
        if (images.length === 0) return;

        // Find index of currently displayed image
        const currentSrc = mainImage.src;
        currentIndex = images.findIndex(img => img === currentSrc);
        if (currentIndex === -1) currentIndex = 0;

        renderGalleryThumbnails(); // Render thumbnails when opening
        updateGalleryImage();

        modal.classList.remove('hidden');
        // Small delay to allow display:block to apply before opacity transition
        requestAnimationFrame(() => {
            modal.classList.remove('opacity-0');
        });

        document.body.style.overflow = 'hidden'; // Lock background scroll
    }

    function closeGallery() {
        modal.classList.add('opacity-0');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300); // Match transition duration
        document.body.style.overflow = '';
    }

    function updateGalleryImage() {
        if (!galleryImage) return;

        galleryLoader.classList.remove('hidden');
        galleryImage.style.opacity = '0.5';

        const newSrc = images[currentIndex];

        // Preload image
        const img = new Image();
        img.src = newSrc;

        img.onload = () => {
            galleryImage.src = newSrc;
            galleryLoader.classList.add('hidden');
            galleryImage.style.opacity = '1';
        };

        if (currentIndexSpan) {
            currentIndexSpan.textContent = currentIndex + 1;
        }

        // Update active thumbnail styling
        if (galleryThumbnailsContainer) {
            const thumbs = galleryThumbnailsContainer.querySelectorAll('button');
            thumbs.forEach((btn, idx) => {
                if (idx === currentIndex) {
                    btn.classList.remove('border-transparent', 'opacity-60');
                    btn.classList.add('border-primary', 'opacity-100');
                    btn.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
                } else {
                    btn.classList.add('border-transparent', 'opacity-60');
                    btn.classList.remove('border-primary', 'opacity-100');
                }
            });
        }
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % images.length;
        updateGalleryImage();
    }

    function prevImage() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateGalleryImage();
    }

    // --- Event Listeners ---

    if (mainImage) {
        mainImage.addEventListener('dblclick', openGallery);

        // Optional: Support double tap on mobile for main image
        let lastTap = 0;
        mainImage.addEventListener('touchend', function (e) {
            const currentTime = new Date().getTime();
            const tapLength = currentTime - lastTap;
            if (tapLength < 500 && tapLength > 0) {
                openGallery();
                e.preventDefault();
            }
            lastTap = currentTime;
        });
    }

    if (closeBtn) closeBtn.addEventListener('click', closeGallery);

    if (nextBtn) {
        nextBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            nextImage();
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            prevImage();
        });
    }

    // Keyboard Navigation
    document.addEventListener('keydown', (e) => {
        if (modal.classList.contains('hidden')) return;

        if (e.key === 'Escape') closeGallery();
        if (e.key === 'ArrowRight') nextImage();
        if (e.key === 'ArrowLeft') prevImage();
    });

    // Click outside to close (Backdrop click)
    if (modal) {
        modal.addEventListener('click', (e) => {
            // Check if loop click is on the background (modal itself or the flex container)
            // gallery-image is inside a div, buttons are absolute.
            // If the target is the modal div or the flex wrapper, close it.
            if (e.target === modal || e.target.closest('.flex.items-center.justify-center') === e.target) {
                // This check is a bit tricky depending on exact DOM structure.
                // Safest: if it's NOT the image and NOT a button.
                if (!e.target.closest('img') && !e.target.closest('button')) {
                    closeGallery();
                }
            }
        });
    }

    // --- Mobile Swipe Support ---
    if (galleryImage) {
        let touchStartX = 0;
        let touchEndX = 0;

        galleryImage.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        galleryImage.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, { passive: true });

        function handleSwipe() {
            const threshold = 50; // min distance for swipe
            if (touchEndX < touchStartX - threshold) {
                nextImage(); // Swipe Left -> Next
            }
            if (touchEndX > touchStartX + threshold) {
                prevImage(); // Swipe Right -> Prev
            }
        }
    }
});
