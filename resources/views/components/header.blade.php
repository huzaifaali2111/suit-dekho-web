<!-- Top Bar: Market Stats -->
 <link rel="stylesheet" href="{{ asset(path: 'assets/css/header.css') }}">
<div class="top-bar">
    <div class="market-updates">
        <span><i class="fa-solid fa-chart-line highlight"></i>Market Updates:</span>
        <span class="update-text">Sapphire Summer Vol.1 Launched</span>
        <span class="update-text">Khaadi Sale Live (Up to 50% Off)</span>
    </div>
    <div class="market-stats">
        <span><i class="fa-solid fa-database"></i> 12,405 Suits Indexed</span>
        <span><i class="fa-solid fa-store"></i> 45 Brands</span>
    </div>
</div>

<!-- Main Header -->
<header class="main-header">
    <div class="container header-content">
        <!-- Logo -->
        <div class="logo-area">
            <div class="logo-icon">S</div>
            <a href="#" class="logo-text">
                Suit<span>Dekho</span>
            </a>
        </div>

        <!-- Desktop Nav -->
        <nav class="nav-desktop">
            <a href="#">New Arrivals</a>
            <a href="#">Unstitched</a>
            <a href="#">Ready to Wear</a>
            <a href="#">Seasonal</a>
            <a href="#" class="sale-link">Hot Selling</a>
        </nav>

        <!-- Actions -->
        <div class="header-actions">
            <button id="mobileMenuButton" class="mobile-menu-btn">
                <i class="fa-solid fa-bars"></i>
            </button>
            <a href="#" class="saved-btn">
                <i class="fa-regular fa-heart"></i> Saved
            </a>
            <a href="#" class="login-btn">
                Login
            </a>
        </div>
    </div>
</header>

<!-- Mobile Slide-over Menu -->
<div id="mobileMenuOverlay" class="mobile-menu-overlay"></div>

<div id="mobileMenuContainer" class="mobile-menu-container">
    <div class="mobile-menu-header">
        <h2 class="menu-title">Menu</h2>
        <button id="closeMenuButton" class="close-menu-btn">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>

    <div id="mobileMenuContent" class="mobile-menu-content">
        <div class="mobile-nav-links">
            <a href="#" class="menu-link">New Arrivals</a>
            <a href="#" class="menu-link">Unstitched</a>
            <a href="#" class="menu-link">Pret / Ready to Wear</a>
            <a href="#" class="menu-link">Luxury Lawn</a>
            <a href="#" class="menu-link">Wedding</a>
            <a href="#" class="menu-link sale">Sale Radar</a>
        </div>

        <div class="mobile-menu-footer">
            <a href="#" class="mobile-signin-btn">Sign In / Register</a>
        </div>
    </div>
</div>
<!-- Mobile Bottom Nav -->
<div class="mobile-bottom-nav">
    <a href="#" class="bnav-link active">
        <i class="fa-solid fa-house"></i>
        <span>Home</span>
    </a>
    <a href="#" class="bnav-link">
        <i class="fa-solid fa-magnifying-glass"></i>
        <span>Search</span>
    </a>
    <a href="#" class="bnav-link">
        <i class="fa-solid fa-layer-group"></i>
        <span>Categories</span>
    </a>
    <a href="#" class="bnav-link">
        <i class="fa-regular fa-heart"></i>
        <span>Saved</span>
    </a>
    <a href="#" class="bnav-link">
        <i class="fa-solid fa-user"></i>
        <span>Account</span>
    </a>
</div>

<script src="{{ asset('assets/js/header.js') }}"></script>