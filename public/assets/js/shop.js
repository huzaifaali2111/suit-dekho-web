/**
 * Shop UI Interaction Script
 * Handles Price Range Slider visuals and Mobile Filter Drawer toggling.
 * NOTE: Actual filtering logic is handled by backend.
 */

document.addEventListener('DOMContentLoaded', () => {

    // --- Price Range Slider Logic ---

    function setupDualSlider(minInputId, maxInputId, minTextId, maxTextId, progressId) {
        const rangeInput = document.querySelectorAll(`#${minInputId}, #${maxInputId}`);
        const minInput = document.getElementById(minInputId);
        const maxInput = document.getElementById(maxInputId);
        const minText = document.getElementById(minTextId);
        const maxText = document.getElementById(maxTextId);
        const progress = document.getElementById(progressId);
        const priceGap = 1000;

        if (!minInput || !maxInput || !progress) return;

        const minValLimit = parseInt(minInput.min);
        const maxValLimit = parseInt(maxInput.max);

        function updateProgress() {
            let minVal = parseInt(minInput.value);
            let maxVal = parseInt(maxInput.value);

            // Calculate percentages
            const minPercent = ((minVal - minValLimit) / (maxValLimit - minValLimit)) * 100;
            const maxPercent = 100 - ((maxVal - minValLimit) / (maxValLimit - minValLimit)) * 100;

            progress.style.left = minPercent + "%";
            progress.style.right = maxPercent + "%";

            if (minText) minText.innerText = minVal;
            if (maxText) maxText.innerText = maxVal;
        }

        rangeInput.forEach(input => {
            input.addEventListener("input", e => {
                let minVal = parseInt(minInput.value);
                let maxVal = parseInt(maxInput.value);

                if ((maxVal - minVal) < priceGap) {
                    if (e.target.id === minInputId) {
                        minInput.value = maxVal - priceGap;
                    } else {
                        maxInput.value = minVal + priceGap;
                    }
                }
                updateProgress();
            });
        });

        // Initialize
        updateProgress();
    }

    // Setup Desktop Slider
    setupDualSlider('minPriceInput', 'maxPriceInput', 'minPriceText', 'maxPriceText', 'sliderProgress');

    // Setup Mobile Slider
    setupDualSlider('minPriceInputMobile', 'maxPriceInputMobile', 'minPriceTextMobile', 'maxPriceTextMobile', 'mobileSliderProgress');


    // --- Mobile Filter Drawer Logic ---
    const filterBtn = document.getElementById('mobileFilterButton');
    const closeFilterBtn = document.getElementById('closeFilterButton');
    const filterDrawer = document.getElementById('mobileFilterDrawer');
    const filterOverlay = document.getElementById('mobileFilterOverlay');
    const filterPanel = document.getElementById('mobileFilterPanel');
    const applyFilterBtn = document.querySelector('#mobileFilterPanel button.bg-primary');

    if (filterBtn && filterDrawer && filterOverlay && filterPanel) {
        function openFilters() {
            filterDrawer.classList.remove('hidden');
            // Trigger transitions
            requestAnimationFrame(() => {
                filterDrawer.style.display = 'block';
                filterOverlay.classList.remove('opacity-0');
                filterPanel.classList.remove('translate-x-full');
                filterPanel.classList.add('translate-x-0');
            });
            document.body.style.overflow = 'hidden';
        }

        function closeFilters() {
            filterOverlay.classList.add('opacity-0');
            filterPanel.classList.remove('translate-x-0');
            filterPanel.classList.add('translate-x-full');

            setTimeout(() => {
                filterDrawer.classList.add('hidden');
                filterDrawer.style.display = 'none';
                document.body.style.overflow = '';
            }, 500);
        }

        filterBtn.addEventListener('click', (e) => {
            e.preventDefault();
            openFilters();
        });

        closeFilterBtn.addEventListener('click', closeFilters);
        filterOverlay.addEventListener('click', closeFilters);

        // Also close when "Apply Filters" is clicked (assuming it submits a form or just closes in this UI demo)
        if (applyFilterBtn) {
            applyFilterBtn.addEventListener('click', closeFilters);
        }
    }

    // --- Simple Fabric Button Toggle (Visual Only) ---
    // This just toggles the class visually so the user sees what they selected
    const fabricBtns = document.querySelectorAll('.mobile-fabric-filter, .desktop-fabric-filter'); // Add classes to blade if you want this
    // Since I removed specific classes in the simplistic revert, I'll select by checking context if needed
    // But user just said "Make these filters also on mobile".
    // I will add a simple delegate for buttons inside the fabric sections if they exist.

    // Select all buttons inside the fabric containers
    const fabricContainers = document.querySelectorAll('.flex.flex-wrap.gap-2 button');
    fabricContainers.forEach(btn => {
        btn.addEventListener('click', function () {
            // Check if it's already selected
            if (this.classList.contains('bg-primary')) {
                // Deselect
                this.classList.remove('bg-primary', 'text-white');
                this.classList.add('bg-white', 'border-border', 'text-xs');
            } else {
                // Select -> Assuming single select or multi select?
                // The desktop one implies single select styling (selected:bg-primary), but let's just toggle.
                this.classList.remove('bg-white', 'border-border');
                this.classList.add('bg-primary', 'text-white');
            }
        });
    });

    // --- Custom Sort Dropdown Logic ---
    const sortTrigger = document.getElementById('sortDropdownTrigger');
    const sortOptions = document.getElementById('sortOptions');
    const sortIcon = document.getElementById('sortDropdownIcon');
    const sortInput = document.getElementById('sortByInput');
    const selectedText = document.getElementById('selectedSortText');
    const sortButtons = document.querySelectorAll('.sort-option');

    if (sortTrigger && sortOptions) {
        // Toggle Dropdown
        sortTrigger.addEventListener('click', (e) => {
            e.stopPropagation();
            const isExpanded = !sortOptions.classList.contains('hidden');

            if (isExpanded) {
                closeSortDropdown();
            } else {
                openSortDropdown();
            }
        });

        // Handle Option Click
        sortButtons.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault(); // Prevent accidental form submit if inside form
                const value = btn.getAttribute('data-value');
                const text = btn.innerText.trim();

                // Update UI state
                sortInput.value = value;
                selectedText.innerText = text;

                // Update visual selection state
                sortButtons.forEach(b => {
                    b.classList.remove('selected', 'text-primary', 'font-bold', 'bg-primary/5');
                    b.classList.add('text-foreground');
                });

                btn.classList.add('selected', 'text-primary', 'font-bold', 'bg-primary/5');
                btn.classList.remove('text-foreground');

                closeSortDropdown();

                // Trigger change event if needed for backend integration
                // const event = new Event('change');
                // sortInput.dispatchEvent(event);
                console.log('Sort changed to:', value);
            });
        });

        // Close on Outside Click
        document.addEventListener('click', (e) => {
            if (!sortTrigger.contains(e.target) && !sortOptions.contains(e.target)) {
                closeSortDropdown();
            }
        });

        function openSortDropdown() {
            sortOptions.classList.remove('hidden');
            // Small transition delay if needed, or just CSS
            sortIcon.style.transform = 'rotate(180deg)';
        }

        function closeSortDropdown() {
            sortOptions.classList.add('hidden');
            sortIcon.style.transform = 'rotate(0deg)';
        }
    }

});
