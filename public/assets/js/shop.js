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
        const minValLimit = parseInt(minInput.min);
        const maxValLimit = parseInt(maxInput.max);

        if (!minInput || !maxInput || !progress) return;

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

    if (filterBtn && filterDrawer && filterOverlay && filterPanel) {
        function openFilters() {
            filterDrawer.classList.remove('hidden');
            // Trigger transitions
            requestAnimationFrame(() => {
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
                document.body.style.overflow = '';
            }, 500);
        }

        filterBtn.addEventListener('click', openFilters);
        closeFilterBtn.addEventListener('click', closeFilters);
        filterOverlay.addEventListener('click', closeFilters);
    }

});
