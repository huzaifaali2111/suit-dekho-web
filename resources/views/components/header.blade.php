<!-- Top Bar: Market Stats -->
<div class="bg-foreground text-background py-1.5 px-4 text-xs font-medium hidden md:flex justify-between items-center">
    <div class="flex gap-6">
        <span><i class="fa-solid fa-chart-line text-primary mr-2"></i>Market Updates:</span>
        <span class="text-white/80">Sapphire Summer Vol.1 Launched</span>
        <span class="text-white/80">Khaadi Sale Live (Up to 50% Off)</span>
    </div>
    <div class="flex gap-4">
        <span><i class="fa-solid fa-database mr-1"></i> 12,405 Suits Indexed</span>
        <span><i class="fa-solid fa-store mr-1"></i> 45 Brands</span>
    </div>
</div>

<!-- Main Header -->
<header x-data="{ mobileMenuOpen: false }"
    class="sticky top-0 z-40 bg-white/95 backdrop-blur-sm border-b border-border shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-14">
            <!-- Logo -->
            <div class="flex items-center gap-2">
                <div
                    class="w-7 h-7 bg-primary rounded flex items-center justify-center text-white font-display font-bold text-lg">
                    S</div>
                <a href="#" class="text-xl font-display font-bold text-foreground tracking-tight">
                    Suit<span class="text-primary">Dekho</span>
                </a>
            </div>

            <!-- Dense Nav -->
            <nav class="hidden md:flex space-x-6 text-xs font-bold uppercase tracking-wide">
                <a href="#" class="hover:text-primary transition-colors">New Arrivals</a>
                <a href="#" class="hover:text-primary transition-colors">Unstitched</a>
                <a href="#" class="hover:text-primary transition-colors">Pret</a>
                <a href="#" class="hover:text-primary transition-colors">Luxury</a>
                <a href="#" class="text-red-600 hover:text-red-700 transition-colors">Sale Radar</a>
            </nav>

            <!-- Actions -->
            <div class="flex items-center space-x-3">
                <button class="md:hidden text-foreground p-1" @click="mobileMenuOpen = !mobileMenuOpen">
                    <i class="fa-solid fa-bars text-lg"></i>
                </button>
                <a href="#"
                    class="hidden md:flex items-center gap-2 px-3 py-1.5 bg-secondary rounded-md text-xs font-bold hover:bg-secondary/80 transition">
                    <i class="fa-regular fa-heart"></i> Saved
                </a>
                <a href="#"
                    class="px-4 py-1.5 bg-foreground text-background text-xs font-bold rounded-md hover:bg-foreground/90 transition">
                    Login
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile Slide-over Menu -->
    <div x-show="mobileMenuOpen" style="display: none;" class="relative z-50" aria-labelledby="slide-over-title"
        role="dialog" aria-modal="true">
        <div x-show="mobileMenuOpen" x-transition:enter="ease-in-out duration-500" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-500"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-foreground/20 backdrop-blur-sm transition-opacity" @click="mobileMenuOpen = false">
        </div>

        <div class="fixed inset-0 overflow-hidden">
            <div class="absolute inset-0 overflow-hidden">
                <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                    <div x-show="mobileMenuOpen"
                        x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                        x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                        x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                        class="pointer-events-auto relative w-screen max-w-xs">
                        <div class="flex h-full flex-col overflow-y-scroll bg-background shadow-2xl">
                            <div class="px-6 py-4 border-b border-border bg-secondary/30">
                                <div class="flex items-center justify-between">
                                    <h2 class="text-lg font-display font-bold text-foreground" id="slide-over-title">
                                        Menu</h2>
                                    <button type="button"
                                        class="rounded-md text-muted-foreground hover:text-foreground focus:outline-none"
                                        @click="mobileMenuOpen = false">
                                        <span class="sr-only">Close panel</span>
                                        <i class="fa-solid fa-xmark text-xl"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="relative mt-6 flex-1 px-6">
                                <div class="space-y-4">
                                    <a href="#"
                                        class="block text-base font-bold text-foreground hover:text-primary transition-colors">New
                                        Arrivals</a>
                                    <a href="#"
                                        class="block text-base font-bold text-foreground hover:text-primary transition-colors">Unstitched</a>
                                    <a href="#"
                                        class="block text-base font-bold text-foreground hover:text-primary transition-colors">Pret
                                        / Ready to Wear</a>
                                    <a href="#"
                                        class="block text-base font-bold text-foreground hover:text-primary transition-colors">Luxury
                                        Lawn</a>
                                    <a href="#"
                                        class="block text-base font-bold text-foreground hover:text-primary transition-colors">Wedding</a>
                                    <a href="#" class="block text-base font-bold text-destructive">Sale Radar</a>
                                </div>

                                <div class="mt-8 pt-6 border-t border-border">
                                    <a href="#"
                                        class="flex w-full justify-center rounded-lg bg-primary px-4 py-2.5 text-sm font-bold text-primary-foreground shadow-lg hover:bg-primary/90 transition-all">Sign
                                        In / Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Bottom Nav -->
<div
    class="fixed bottom-0 left-0 z-50 w-full h-14 bg-white border-t border-border md:hidden flex justify-around items-center shadow-[0_-4px_10px_rgba(0,0,0,0.05)]">
    <a href="#" class="flex flex-col items-center justify-center text-primary w-full h-full">
        <i class="fa-solid fa-house text-lg mb-0.5"></i>
        <span class="text-[9px] font-bold uppercase">Home</span>
    </a>
    <a href="#"
        class="flex flex-col items-center justify-center text-muted-foreground hover:text-primary w-full h-full">
        <i class="fa-solid fa-magnifying-glass text-lg mb-0.5"></i>
        <span class="text-[9px] font-bold uppercase">Search</span>
    </a>
    <a href="#"
        class="flex flex-col items-center justify-center text-muted-foreground hover:text-primary w-full h-full">
        <i class="fa-solid fa-layer-group text-lg mb-0.5"></i>
        <span class="text-[9px] font-bold uppercase">Brands</span>
    </a>
    <a href="#"
        class="flex flex-col items-center justify-center text-muted-foreground hover:text-primary w-full h-full">
        <i class="fa-regular fa-user text-lg mb-0.5"></i>
        <span class="text-[9px] font-bold uppercase">Account</span>
    </a>
</div>
