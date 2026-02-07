document.addEventListener('DOMContentLoaded', () => {
    // Select the search input field
    const searchInput = document.getElementById('hero-search-input');

    // Select all trending keyword links
    // We'll rely on a specific class 'trending-keyword' which we will add to the Blade file
    const trendingLinks = document.querySelectorAll('.trending-keyword');

    if (searchInput) {
        trendingLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault(); // Prevent default anchor behavior

                // Get the text content of the clicked link and normalize whitespace
                const keyword = link.textContent.replace(/\s+/g, ' ').trim();

                // Set the search input value
                searchInput.value = keyword;

                // Optional: Focus the input so the user can easily edit or submit
                searchInput.focus();

                // Optional: Console log to verify
                console.log(`Search input populated with: ${keyword}`);
            });
        });
    } else {
        console.warn('Search input element with id "hero-search-input" not found.');
    }
});
