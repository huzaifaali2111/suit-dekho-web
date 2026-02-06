
// Mobile Menu Logic
document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.getElementById('mobileMenuButton');
    const closeButton = document.getElementById('closeMenuButton');
    const menuWrapper = document.getElementById('mobileMenuWrapper');
    const overlay = document.getElementById('mobileMenuOverlay');
    const panel = document.getElementById('mobileMenuPanel');

    if (!menuButton || !menuWrapper || !overlay || !panel) {
        return;
    }

    function openMenu() {
        // Show wrapper
        menuWrapper.classList.remove('hidden');

        // Trigger transitions
        // Slight delay to allow display:block to apply before transition
        requestAnimationFrame(() => {
            overlay.classList.remove('opacity-0');

            panel.classList.remove('translate-x-full');
            panel.classList.add('translate-x-0');
        });

        // Prevent body scroll
        document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
        // Reverse transitions
        overlay.classList.add('opacity-0');

        panel.classList.remove('translate-x-0');
        panel.classList.add('translate-x-full');

        // Hide wrapper after transition completes
        setTimeout(() => {
            menuWrapper.classList.add('hidden');
            document.body.style.overflow = '';
        }, 500); // 500ms matches the duration-500 class
    }

    menuButton.addEventListener('click', openMenu);

    closeButton?.addEventListener('click', closeMenu);

    // Close when clicking overlay
    overlay.addEventListener('click', closeMenu);

    // Close when clicking links inside
    const links = document.querySelectorAll('#mobileMenuContent a');
    links.forEach(link => {
        link.addEventListener('click', closeMenu);
    });

    // Close on Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !menuWrapper.classList.contains('hidden')) {
            closeMenu();
        }
    });

    // Close on resize if switching to desktop
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768 && !menuWrapper.classList.contains('hidden')) {
            closeMenu();
        }
    });
});
