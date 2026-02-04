
// Simple JavaScript - No Alpine.js needed
const menuButton = document.getElementById('mobileMenuButton');
const closeButton = document.getElementById('closeMenuButton');
const overlay = document.getElementById('mobileMenuOverlay');
const container = document.getElementById('mobileMenuContainer');
const content = document.getElementById('mobileMenuContent');

// Open menu
menuButton.addEventListener('click', () => {
    overlay.classList.add('active');
    container.classList.add('active');
    content.classList.add('active');
    document.body.style.overflow = 'hidden';
});

// Close menu
function closeMenu() {
    overlay.classList.remove('active');
    container.classList.remove('active');
    content.classList.remove('active');
    document.body.style.overflow = '';
}

closeButton.addEventListener('click', closeMenu);
overlay.addEventListener('click', closeMenu);

// Close menu when clicking links
document.querySelectorAll('.menu-link').forEach(link => {
    link.addEventListener('click', closeMenu);
});

// Close with Escape key
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && container.classList.contains('active')) {
        closeMenu();
    }
});

// Auto-close on desktop
window.addEventListener('resize', () => {
    if (window.innerWidth >= 768 && container.classList.contains('active')) {
        closeMenu();
    }
});
