<x-layout name="index">
    <main class="min-h-screen pb-0 md:pb-0">

        <!-- 1. Compact Functional Hero -->
        <section class="bg-white border-b border-border">
            <div class="max-w-7xl mx-auto px-4 py-8 md:py-10">
                <div class="flex flex-col md:flex-row gap-8 items-start">

                    <!-- Left: Search & Filters (Utility Focus) -->
                    <div class="w-full md:w-2/3">
                        <h1 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-2">
                            Find exactly what you need.
                        </h1>
                        <p class="text-muted-foreground text-sm mb-6">
                            Compare 12,000+ suits from Sapphire, Khaadi, and more. Filter by fabric, price, and style.
                        </p>

                        <!-- Search Module -->
                        <div
                            class="bg-secondary/30 p-1 rounded-xl border border-border flex shadow-sm mb-4 transition-colors duration-200 focus-within:border-[hsl(343_62%_54%)] focus-within:ring-1 focus-within:ring-[hsl(343_62%_54%)]">
                        
                            <div class="flex-1 flex items-center px-3">
                                <i class="fa-solid fa-magnifying-glass text-muted-foreground mr-3"></i>
                        
                                <input type="text" id="hero-search-input" placeholder="Search by brand, fabric (e.g. 'Lawn 3pc')..."
                                    class="w-full bg-transparent outline-none border-none focus:ring-0 text-sm py-2.5">
                            </div>
                        
                            <button class="bg-primary text-white px-6 py-2 rounded-lg text-sm font-bold hover:bg-primary/90 transition">
                                Search
                            </button>
                        
                        </div>

                        <!-- Quick Pills -->
                        <div class="flex flex-wrap gap-2 text-xs">
                            <span class="text-muted-foreground font-semibold py-1">Trending:</span>
                            <a href="#"
                                class="trending-keyword px-2.5 py-1 bg-white border border-border rounded hover:border-primary hover:text-primary transition">Black
                                Lawn Suit</a>
                            <a href="#"
                                class="trending-keyword px-2.5 py-1 bg-white border border-border rounded hover:border-primary hover:text-primary transition">Chiffon
                                Dupatta</a>
                            <a href="#"
                                class="trending-keyword px-2.5 py-1 bg-white border border-border rounded hover:border-primary hover:text-primary transition">Under
                                3000</a>
                            <a href="#"
                                class="trending-keyword px-2.5 py-1 bg-white border border-border rounded hover:border-primary hover:text-primary transition">White
                                Kurti</a>
                        </div>
                    </div>


                    <!-- Right: Live Stats / Mini Dashboard -->
                    <div class="w-full md:w-1/3 bg-secondary/50 rounded-xl p-4 border border-border">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="font-bold text-foreground text-sm">Live Market Activity</h3>
                            <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-start gap-3 bg-white p-2 rounded border border-border/50">
                                <img src="https://images.unsplash.com/photo-1589810635657-232948472d98?w=100&q=80"
                                    class="w-10 h-10 object-cover rounded" alt="Thumb">
                                <div>
                                    <p class="text-xs font-bold text-foreground">Sapphire Vol. 2 Restocked</p>
                                    <p class="text-xxs text-muted-foreground">Just now • 150+ New Items</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 bg-white p-2 rounded border border-border/50">
                                <div class="w-10 h-10 bg-red-50 rounded flex items-center justify-center text-red-500">
                                    <i class="fa-solid fa-percent"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-foreground">Khaadi Flat 30% Off</p>
                                    <p class="text-xxs text-muted-foreground">Ends in 2 days</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- 3. Seasonal Banners (Moved Up) -->
        <section class="py-8 px-4">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Banner 1 -->
                    <a href="#" class="relative rounded-xl overflow-hidden aspect-[16/7] group hover-lift">
                        <img src="https://sanasafinaz.com/cdn/shop/files/Web_Banner_1920_x_1080_73ffa126-d95d-40f7-9735-69182bbdb1cc.jpg?v=1767873926&width=1600"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-105"
                            alt="Summer">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/20 to-transparent flex flex-col justify-center px-8">
                            <span class="text-secondary font-bold text-xs uppercase tracking-widest mb-2">New
                                Season</span>
                            <h3 class="text-2xl md:text-4xl font-display font-bold text-white mb-4">Summer
                                Lawn<br>Vol. 1 2025</h3>
                            <span
                                class="text-white text-xs font-bold underline decoration-primary underline-offset-4 group-hover:text-primary transition">Shop
                                Collection &rarr;</span>
                        </div>
                    </a>
                    <!-- Banner 2 -->
                    <a href="#" class="relative rounded-xl overflow-hidden aspect-[16/7] group hover-lift">
                        <img src="https://sanasafinaz.com/cdn/shop/files/couture-banner-desktop.webp?v=1756118955&width=1600"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-105"
                            alt="Wedding">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/20 to-transparent flex flex-col justify-center px-8">
                            <span class="text-secondary font-bold text-xs uppercase tracking-widest mb-2">Limited
                                Edition</span>
                            <h3 class="text-2xl md:text-4xl font-display font-bold text-white mb-4">
                                Wedding<br>Formals</h3>
                            <span
                                class="text-white text-xs font-bold underline decoration-primary underline-offset-4 group-hover:text-primary transition">View
                                Luxury Edit &rarr;</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- 4. Shop by Fabric -->
        <section class="py-8 bg-white border-b border-border">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-bold text-foreground">Shop by Fabric</h2>
                    <a href="categories.html" class="text-xs font-bold text-primary hover:underline">View All</a>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-3">
                    <a href="#"
                        class="p-3 bg-secondary/20 hover:bg-primary/10 border border-transparent hover:border-primary rounded-lg text-center transition group">
                        <p class="font-bold text-sm text-foreground mb-1">Lawn</p>
                        <p class="text-xxs text-muted-foreground group-hover:text-primary/80">Summer Essential</p>
                    </a>
                    <a href="#"
                        class="p-3 bg-secondary/20 hover:bg-primary/10 border border-transparent hover:border-primary rounded-lg text-center transition group">
                        <p class="font-bold text-sm text-foreground mb-1">Cotton</p>
                        <p class="text-xxs text-muted-foreground group-hover:text-primary/80">Everyday Comfort</p>
                    </a>
                    <a href="#"
                        class="p-3 bg-secondary/20 hover:bg-primary/10 border border-transparent hover:border-primary rounded-lg text-center transition group">
                        <p class="font-bold text-sm text-foreground mb-1">Chiffon</p>
                        <p class="text-xxs text-muted-foreground group-hover:text-primary/80">Formal Wear</p>
                    </a>
                    <a href="#"
                        class="p-3 bg-secondary/20 hover:bg-primary/10 border border-transparent hover:border-primary rounded-lg text-center transition group">
                        <p class="font-bold text-sm text-foreground mb-1">Organza</p>
                        <p class="text-xxs text-muted-foreground group-hover:text-primary/80">Luxury Wraps</p>
                    </a>
                    <a href="#"
                        class="p-3 bg-secondary/20 hover:bg-primary/10 border border-transparent hover:border-primary rounded-lg text-center transition group">
                        <p class="font-bold text-sm text-foreground mb-1">Khaddar</p>
                        <p class="text-xxs text-muted-foreground group-hover:text-primary/80">Winter Warmth</p>
                    </a>
                    <a href="#"
                        class="p-3 bg-secondary/20 hover:bg-primary/10 border border-transparent hover:border-primary rounded-lg text-center transition group">
                        <p class="font-bold text-sm text-foreground mb-1">Silk</p>
                        <p class="text-xxs text-muted-foreground group-hover:text-primary/80">Premium Feel</p>
                    </a>
                </div>
            </div>
        </section>

        <!-- 5. Dense Category Grid -->
        <section class="py-8 bg-background">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-bold text-foreground">Browse by Category</h2>
                    <a href="#" class="text-xs font-bold text-primary hover:underline">View All</a>
                </div>
                <div class="grid grid-cols-3 md:grid-cols-6 gap-3">
                    <!-- Category Item -->
                    <a href="#"
                        class="flex flex-col items-center p-3 bg-white border border-border rounded-lg hover:shadow-md hover:border-primary transition group">
                        <div
                            class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center text-foreground mb-2 group-hover:bg-primary group-hover:text-white transition">
                            <i class="fa-solid fa-scissors"></i>
                        </div>
                        <span class="text-xs font-bold text-center">Unstitched</span>
                        <span class="text-xxs text-muted-foreground">4,200+ Items</span>
                    </a>

                    <a href="#"
                        class="flex flex-col items-center p-3 bg-white border border-border rounded-lg hover:shadow-md hover:border-primary transition group">
                        <div
                            class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center text-foreground mb-2 group-hover:bg-primary group-hover:text-white transition">
                            <i class="fa-solid fa-shirt"></i>
                        </div>
                        <span class="text-xs font-bold text-center">Pret / Ready</span>
                        <span class="text-xxs text-muted-foreground">2,100+ Items</span>
                    </a>

                    <a href="#"
                        class="flex flex-col items-center p-3 bg-white border border-border rounded-lg hover:shadow-md hover:border-primary transition group">
                        <div
                            class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center text-foreground mb-2 group-hover:bg-primary group-hover:text-white transition">
                            <i class="fa-solid fa-gem"></i>
                        </div>
                        <span class="text-xs font-bold text-center">Luxury</span>
                        <span class="text-xxs text-muted-foreground">850+ Items</span>
                    </a>

                    <a href="#"
                        class="flex flex-col items-center p-3 bg-white border border-border rounded-lg hover:shadow-md hover:border-primary transition group">
                        <div
                            class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center text-foreground mb-2 group-hover:bg-primary group-hover:text-white transition">
                            <i class="fa-solid fa-ring"></i>
                        </div>
                        <span class="text-xs font-bold text-center">Wedding</span>
                        <span class="text-xxs text-muted-foreground">300+ Items</span>
                    </a>

                    <a href="#"
                        class="flex flex-col items-center p-3 bg-white border border-border rounded-lg hover:shadow-md hover:border-primary transition group">
                        <div
                            class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center text-foreground mb-2 group-hover:bg-primary group-hover:text-white transition">
                            <i class="fa-solid fa-user-tie"></i>
                        </div>
                        <span class="text-xs font-bold text-center">Men's</span>
                        <span class="text-xxs text-muted-foreground">1,200+ Items</span>
                    </a>

                    <a href="#"
                        class="flex flex-col items-center p-3 bg-white border border-border rounded-lg hover:shadow-md hover:border-primary transition group">
                        <div
                            class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center text-foreground mb-2 group-hover:bg-primary group-hover:text-white transition">
                            <i class="fa-solid fa-tag"></i>
                        </div>
                        <span class="text-xs font-bold text-center">On Sale</span>
                        <span class="text-xxs text-muted-foreground">500+ Items</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- 6. Informational Product Grid -->
        <section class="py-4">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg font-bold text-foreground">Top Tranding Today </h2>

                    <!-- View Toggle (Visual only for now) -->
                    <div class="flex bg-white border border-border rounded p-0.5">
                        <button class="px-2 py-1 bg-primary rounded text-xs text-white">
                            <i class="fa-solid fa-table-cells-large"></i>
                        </button>

                        <button class="px-2 py-1 text-muted-foreground text-xs">
                            <i class="fa-solid fa-list"></i>
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">

                    <!-- Info Card 1 -->
                    <div
                        class="bg-white border border-border rounded-lg overflow-hidden hover:shadow-lg transition group">
                        <div class="relative aspect-[3/4] bg-gray-100">
                            <img src="https://pk.khaadi.com/dw/image/v2/BJTG_PRD/on/demandware.static/-/Sites-khaadi-master-catalog/default/dw978b6168/images/hi-res/chd21a_multi_1.jpg?sw=800&sh=1200"
                                class="w-full h-full object-cover">
                            <div
                                class="absolute top-2 left-2 bg-black/80 text-white text-[10px] font-bold px-1.5 py-0.5 rounded">
                                SAPPHIRE</div>
                            <div
                                class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/60 to-transparent p-2">
                                <p class="text-white text-xs font-bold">3 Piece Lawn</p>
                            </div>
                        </div>
                        <div class="p-3">
                            <h3 class="text-sm font-bold text-foreground truncate">Floral Printed Suit</h3>

                            <!-- Specs Grid -->
                            <div class="grid grid-cols-2 gap-y-1 gap-x-2 mt-2 mb-3">
                                <div class="text-xxs text-muted-foreground">Fabric</div>
                                <div class="text-xxs font-semibold text-foreground text-right">Lawn</div>
                                <div class="text-xxs text-muted-foreground">Type</div>
                                <div class="text-xxs font-semibold text-foreground text-right">Unstitched</div>
                                <div class="text-xxs text-muted-foreground">Color</div>
                                <div class="text-xxs font-semibold text-foreground text-right">Black</div>
                            </div>

                            <div class="flex items-center justify-between border-t border-border pt-2">
                                <span class="text-sm font-bold text-primary">Rs. 4,990</span>
                                <button
                                    class="text-xs bg-secondary hover:bg-foreground hover:text-white text-foreground px-2 py-1 rounded transition">
                                    Compare
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Info Card 2 -->
                    <div
                        class="bg-white border border-border rounded-lg overflow-hidden hover:shadow-lg transition group">
                        <div class="relative aspect-[3/4] bg-gray-100">
                            <img src="https://pk.khaadi.com/dw/image/v2/BJTG_PRD/on/demandware.static/-/Sites-khaadi-master-catalog/default/dw3af0f8fc/images/hi-res/1-26-113-a-e_multi_1.jpg?sw=800&sh=1200"
                                class="w-full h-full object-cover">
                            <div
                                class="absolute top-2 left-2 bg-black/80 text-white text-[10px] font-bold px-1.5 py-0.5 rounded">
                                KHAADI</div>
                            <div
                                class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/60 to-transparent p-2">
                                <p class="text-white text-xs font-bold">2 Piece Pret</p>
                            </div>
                        </div>
                        <div class="p-3">
                            <h3 class="text-sm font-bold text-foreground truncate">Embroidered Kurta</h3>

                            <!-- Specs Grid -->
                            <div class="grid grid-cols-2 gap-y-1 gap-x-2 mt-2 mb-3">
                                <div class="text-xxs text-muted-foreground">Fabric</div>
                                <div class="text-xxs font-semibold text-foreground text-right">Cotton</div>
                                <div class="text-xxs text-muted-foreground">Type</div>
                                <div class="text-xxs font-semibold text-foreground text-right">Ready</div>
                                <div class="text-xxs text-muted-foreground">Size</div>
                                <div class="text-xxs font-semibold text-foreground text-right">S, M, L</div>
                            </div>

                            <div class="flex items-center justify-between border-t border-border pt-2">
                                <span class="text-sm font-bold text-primary">Rs. 3,490</span>
                                <button
                                    class="text-xs bg-secondary hover:bg-foreground hover:text-white text-foreground px-2 py-1 rounded transition">
                                    Compare
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Info Card 3 -->
                    <div
                        class="bg-white border border-border rounded-lg overflow-hidden hover:shadow-lg transition group">
                        <div class="relative aspect-[3/4] bg-gray-100">
                            <img src="https://pk.khaadi.com/dw/image/v2/BJTG_PRD/on/demandware.static/-/Sites-khaadi-master-catalog/default/dw66217435/images/hi-res/chd23a_multi_4.jpg?sw=800&sh=1200"
                                class="w-full h-full object-cover">
                            <div
                                class="absolute top-2 left-2 bg-black/80 text-white text-[10px] font-bold px-1.5 py-0.5 rounded">
                                MARIA.B</div>
                            <div
                                class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/60 to-transparent p-2">
                                <p class="text-white text-xs font-bold">Luxury Chiffon</p>
                            </div>
                        </div>
                        <div class="p-3">
                            <h3 class="text-sm font-bold text-foreground truncate">Evening Wear</h3>

                            <!-- Specs Grid -->
                            <div class="grid grid-cols-2 gap-y-1 gap-x-2 mt-2 mb-3">
                                <div class="text-xxs text-muted-foreground">Fabric</div>
                                <div class="text-xxs font-semibold text-foreground text-right">Chiffon</div>
                                <div class="text-xxs text-muted-foreground">Type</div>
                                <div class="text-xxs font-semibold text-foreground text-right">Unstitched</div>
                                <div class="text-xxs text-muted-foreground">Work</div>
                                <div class="text-xxs font-semibold text-foreground text-right">Embroid.</div>
                            </div>

                            <div class="flex items-center justify-between border-t border-border pt-2">
                                <span class="text-sm font-bold text-primary">Rs. 14,990</span>
                                <button
                                    class="text-xs bg-secondary hover:bg-foreground hover:text-white text-foreground px-2 py-1 rounded transition">
                                    Compare
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Info Card 4 -->
                    <div
                        class="bg-white border border-border rounded-lg overflow-hidden hover:shadow-lg transition group">
                        <div class="relative aspect-[3/4] bg-gray-100">
                            <img src="https://pk.khaadi.com/dw/image/v2/BJTG_PRD/on/demandware.static/-/Sites-khaadi-master-catalog/default/dw0ee402e6/images/hi-res/krn15a_multi_1.jpg?sw=800&sh=1200"
                                class="w-full h-full object-cover">
                            <div
                                class="absolute top-2 left-2 bg-black/80 text-white text-[10px] font-bold px-1.5 py-0.5 rounded">
                                GUL AHMED</div>
                            <div
                                class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/60 to-transparent p-2">
                                <p class="text-white text-xs font-bold">Printed Lawn</p>
                            </div>
                        </div>
                        <div class="p-3">
                            <h3 class="text-sm font-bold text-foreground truncate">Summer Breeze</h3>

                            <!-- Specs Grid -->
                            <div class="grid grid-cols-2 gap-y-1 gap-x-2 mt-2 mb-3">
                                <div class="text-xxs text-muted-foreground">Fabric</div>
                                <div class="text-xxs font-semibold text-foreground text-right">Lawn</div>
                                <div class="text-xxs text-muted-foreground">Type</div>
                                <div class="text-xxs font-semibold text-foreground text-right">Unstitched</div>
                                <div class="text-xxs text-muted-foreground">Pieces</div>
                                <div class="text-xxs font-semibold text-foreground text-right">3 Piece</div>
                            </div>

                            <div class="flex items-center justify-between border-t border-border pt-2">
                                <span class="text-sm font-bold text-primary">Rs. 2,990</span>
                                <button
                                    class="text-xs bg-secondary hover:bg-foreground hover:text-white text-foreground px-2 py-1 rounded transition">
                                    Compare
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Info Card 5 -->
                    <div
                        class="bg-white border border-border rounded-lg overflow-hidden hover:shadow-lg transition group">
                        <div class="relative aspect-[3/4] bg-gray-100">
                            <img src="https://pk.khaadi.com/dw/image/v2/BJTG_PRD/on/demandware.static/-/Sites-khaadi-master-catalog/default/dw84fa8bf2/images/hi-res/1-26-113-a-g_multi_1.jpg?sw=800&sh=1200"
                                class="w-full h-full object-cover">
                            <div
                                class="absolute top-2 left-2 bg-black/80 text-white text-[10px] font-bold px-1.5 py-0.5 rounded">
                                LIMELIGHT</div>
                            <div
                                class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/60 to-transparent p-2">
                                <p class="text-white text-xs font-bold">Cambric Trousers</p>
                            </div>
                        </div>
                        <div class="p-3">
                            <h3 class="text-sm font-bold text-foreground truncate">Solid Trousers</h3>

                            <!-- Specs Grid -->
                            <div class="grid grid-cols-2 gap-y-1 gap-x-2 mt-2 mb-3">
                                <div class="text-xxs text-muted-foreground">Fabric</div>
                                <div class="text-xxs font-semibold text-foreground text-right">Cambric</div>
                                <div class="text-xxs text-muted-foreground">Type</div>
                                <div class="text-xxs font-semibold text-foreground text-right">Ready</div>
                                <div class="text-xxs text-muted-foreground">Size</div>
                                <div class="text-xxs font-semibold text-foreground text-right">Standard</div>
                            </div>

                            <div class="flex items-center justify-between border-t border-border pt-2">
                                <span class="text-sm font-bold text-primary">Rs. 1,190</span>
                                <button
                                    class="text-xs bg-secondary hover:bg-foreground hover:text-white text-foreground px-2 py-1 rounded transition">
                                    Compare
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- 7. How it Works -->
        <section class="py-12 bg-secondary/30 border-y border-border">
            <div class="max-w-7xl mx-auto px-4">
                <div class="text-center mb-10">
                    <h2 class="text-xl font-display font-bold text-foreground">How it Works</h2>
                    <p class="text-xs text-muted-foreground mt-1">Found your perfect suit in 3 simple steps.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
                    <!-- Connector Line (Desktop) -->
                    <div class="hidden md:block absolute top-1/2 left-0 w-full h-0.5 bg-border -z-10 -translate-y-1/2">
                    </div>

                    <!-- Step 1 -->
                    <div
                        class="flex flex-col items-center text-center p-4 bg-background/50 backdrop-blur rounded-xl border border-border shadow-sm group hover-lift">
                        <div
                            class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center font-bold text-xl mb-4 shadow-lg shadow-primary/20 group-hover:scale-110 transition">
                            1</div>
                        <h3 class="text-sm font-bold text-foreground mb-2">Search Brands</h3>
                        <p class="text-xs text-muted-foreground leading-relaxed">
                            Browse thousands of unstitched and pret options from Sapphire, Khaadi, and 100+ top
                            Pakistani brands in one place.
                        </p>
                    </div>

                    <!-- Step 2 -->
                    <div
                        class="flex flex-col items-center text-center p-4 bg-background/50 backdrop-blur rounded-xl border border-border shadow-sm group hover-lift">
                        <div
                            class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center font-bold text-xl mb-4 shadow-lg shadow-primary/20 group-hover:scale-110 transition">
                            2</div>
                        <h3 class="text-sm font-bold text-foreground mb-2">Compare Prices</h3>
                        <p class="text-xs text-muted-foreground leading-relaxed">
                            Use our smart comparison tool to check fabric details, piece counts, and prices
                            side-by-side to find the best deal.
                        </p>
                    </div>

                    <!-- Step 3 -->
                    <div
                        class="flex flex-col items-center text-center p-4 bg-background/50 backdrop-blur rounded-xl border border-border shadow-sm group hover-lift">
                        <div
                            class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center font-bold text-xl mb-4 shadow-lg shadow-primary/20 group-hover:scale-110 transition">
                            3</div>
                        <h3 class="text-sm font-bold text-foreground mb-2">Buy Direct</h3>
                        <p class="text-xs text-muted-foreground leading-relaxed">
                            Click to purchase directly from the official brand store. We track price drops and
                            restocks for you.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. Brand Marquee -->
        <section class="py-6 border-b border-border bg-background overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 mb-3">
                <p class="text-xs font-bold text-muted-foreground uppercase tracking-wider text-center">Trusted by
                    Leading Brands
                </p>
            </div>
            <!-- Infinite Scroll Container -->
            <div class="relative w-full overflow-hidden group">
                <div class="flex animate-marquee whitespace-nowrap gap-8 items-center px-4">
                    <!-- Set 1 -->
                    <span
                        class="text-xl font-display font-bold text-foreground/40 hover:text-primary transition cursor-pointer">Sapphire</span>
                    <span
                        class="text-xl font-display font-bold text-foreground/40 hover:text-primary transition cursor-pointer">Khaadi</span>
                    <span
                        class="text-xl font-display font-bold text-foreground/40 hover:text-primary transition cursor-pointer">GulAhmed</span>
                    <span
                        class="text-xl font-display font-bold text-foreground/40 hover:text-primary transition cursor-pointer">Maria.B</span>
                    <span
                        class="text-xl font-display font-bold text-foreground/40 hover:text-primary transition cursor-pointer">Limelight</span>
                    <span
                        class="text-xl font-display font-bold text-foreground/40 hover:text-primary transition cursor-pointer">Bonanza</span>
                    <span
                        class="text-xl font-display font-bold text-foreground/40 hover:text-primary transition cursor-pointer">SanaSafinaz</span>
                    <span
                        class="text-xl font-display font-bold text-foreground/40 hover:text-primary transition cursor-pointer">J.</span>
                    <span
                        class="text-xl font-display font-bold text-foreground/40 hover:text-primary transition cursor-pointer">Alkaram</span>
                    <span
                        class="text-xl font-display font-bold text-foreground/40 hover:text-primary transition cursor-pointer">Beechtree</span>

                    <!-- Set 2 (Duplicate for smooth loop) -->
                    <span
                        class="text-xl font-display font-bold text-foreground/40 hover:text-primary transition cursor-pointer">Sapphire</span>
                    <span
                        class="text-xl font-display font-bold text-foreground/40 hover:text-primary transition cursor-pointer">Khaadi</span>
                    <span
                        class="text-xl font-display font-bold text-foreground/40 hover:text-primary transition cursor-pointer">GulAhmed</span>
                    <span
                        class="text-xl font-display font-bold text-foreground/40 hover:text-primary transition cursor-pointer">Maria.B</span>
                    <span
                        class="text-xl font-display font-bold text-foreground/40 hover:text-primary transition cursor-pointer">Limelight</span>
                    <span
                        class="text-xl font-display font-bold text-foreground/40 hover:text-primary transition cursor-pointer">Bonanza</span>
                    <span
                        class="text-xl font-display font-bold text-foreground/40 hover:text-primary transition cursor-pointer">SanaSafinaz</span>
                    <span
                        class="text-xl font-display font-bold text-foreground/40 hover:text-primary transition cursor-pointer">J.</span>
                    <span
                        class="text-xl font-display font-bold text-foreground/40 hover:text-primary transition cursor-pointer">Alkaram</span>
                    <span
                        class="text-xl font-display font-bold text-foreground/40 hover:text-primary transition cursor-pointer">Beechtree</span>
                </div>
            </div>
        </section>

        <!-- 8. Newsletter / Stay Updated (New) -->
        <!-- <section class="py-12 bg-foreground text-white">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h2 class="text-2xl font-display font-bold mb-4">Never Miss a Sale Again</h2>
                <p class="text-white/80 mb-8 text-sm">
                    Get notified about flash sales, new volume launches, and price drops from your favorite brands.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
                    <input type="email" placeholder="Enter your email address"
                        class="flex-1 bg-white/10 border border-white/20 text-white placeholder:text-white/60 text-sm rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-white/50">
                    <button class="bg-primary text-white font-bold px-6 py-3 rounded-lg hover:bg-primary/90 transition">
                        Subscribe
                    </button>
                </div>
            </div>
        </section> -->
    </main>
    @vite('resources/js/index.js')
</x-layout>