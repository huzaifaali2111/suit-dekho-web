<x-layout name="shop">
    <main class="min-h-screen pb-20 md:pb-10 bg-background">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">

            <!-- Breadcrumb & Title -->
            <div class="flex flex-col md:flex-row md:items-center justify-between mb-6 gap-4">
                <div>
                    <nav class="flex text-xs text-muted-foreground mb-1">
                        <a href="index.html" class="hover:text-primary">Home</a>
                        <span class="mx-2">/</span>
                        <span class="text-foreground font-semibold">Shop</span>
                    </nav>
                    <h1 class="text-2xl font-display font-bold text-foreground">All Suits <span
                            class="text-sm font-sans font-normal text-muted-foreground ml-2">(1,240 Items)</span></h1>
                </div>

                <!-- Mobile Filter Toggle & Sort -->
                <div class="flex gap-2 w-full md:w-auto">
                    <button id="mobileFilterButton"
                        class="md:hidden flex-1 flex items-center justify-center gap-2 bg-white border border-border px-4 py-2.5 rounded-lg text-sm font-bold shadow-sm">
                        <i class="fa-solid fa-filter"></i> Filters
                    </button>
                    <div class="relative flex-1 md:w-48">
                        <select
                            class="w-full appearance-none bg-white border border-border px-4 py-2.5 pr-8 rounded-lg text-sm font-medium focus:outline-none focus:border-primary cursor-pointer">
                            <option>Sort by: Newest</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Popularity</option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-muted-foreground">
                            <i class="fa-solid fa-chevron-down text-xs"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex gap-8">

                <!-- Sidebar Filters (Desktop) -->
                <aside class="hidden md:block w-64 flex-shrink-0">
                    <div
                        class="bg-white border border-border rounded-xl p-5 sticky top-20 max-h-[calc(100vh-6rem)] overflow-y-auto hide-scrollbar">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="font-bold text-foreground">Filters</h3>
                            <button class="text-xs text-primary hover:underline">Reset All</button>
                        </div>

                        <!-- Category (Stitched/Unstitched) -->
                        <div class="mb-6">
                            <h4 class="text-xs font-bold uppercase text-muted-foreground mb-3 tracking-wider">Category
                            </h4>
                            <div class="space-y-2">
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="radio" name="category"
                                        class="border-gray-300 text-primary focus:ring-primary" checked>
                                    <span class="text-sm text-foreground group-hover:text-primary transition">All</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="radio" name="category"
                                        class="border-gray-300 text-primary focus:ring-primary">
                                    <span
                                        class="text-sm text-foreground group-hover:text-primary transition">Unstitched</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="radio" name="category"
                                        class="border-gray-300 text-primary focus:ring-primary">
                                    <span class="text-sm text-foreground group-hover:text-primary transition">Stitched
                                        (Pret)</span>
                                </label>
                            </div>
                        </div>

                        <!-- Price Range Slider -->
                        <div class="mb-6">
                            <h4 class="text-xs font-bold uppercase text-muted-foreground mb-3 tracking-wider">Price
                                Range</h4>
                            <div class="mb-4">
                                <div class="relative h-1 bg-gray-200 rounded-full">
                                    <div id="sliderProgress" class="absolute h-full bg-primary rounded-full"
                                        style="left: 0%; right: 0%">
                                    </div>
                                </div>
                                <div class="relative">
                                    <input type="range" id="minPriceInput" min="0" max="20000" step="100" value="0"
                                        class="absolute w-full h-1 bg-transparent appearance-none pointer-events-none -top-1">
                                    <input type="range" id="maxPriceInput" min="0" max="20000" step="100" value="20000"
                                        class="absolute w-full h-1 bg-transparent appearance-none pointer-events-none -top-1">
                                </div>
                            </div>
                            <div class="flex items-center justify-between text-xs font-bold text-foreground">
                                <span>Rs. <span id="minPriceText">0</span></span>
                                <span>Rs. <span id="maxPriceText">20000</span></span>
                            </div>
                        </div>

                        <!-- Brand Filter -->
                        <div class="mb-6">
                            <h4 class="text-xs font-bold uppercase text-muted-foreground mb-3 tracking-wider">Brands
                            </h4>
                            <div class="space-y-2 max-h-40 overflow-y-auto pr-2 custom-scrollbar">
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="checkbox"
                                        class="rounded border-gray-300 text-primary focus:ring-primary">
                                    <span
                                        class="text-sm text-foreground group-hover:text-primary transition">Sapphire</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="checkbox"
                                        class="rounded border-gray-300 text-primary focus:ring-primary">
                                    <span
                                        class="text-sm text-foreground group-hover:text-primary transition">Khaadi</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="checkbox"
                                        class="rounded border-gray-300 text-primary focus:ring-primary">
                                    <span class="text-sm text-foreground group-hover:text-primary transition">Gul
                                        Ahmed</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="checkbox"
                                        class="rounded border-gray-300 text-primary focus:ring-primary">
                                    <span
                                        class="text-sm text-foreground group-hover:text-primary transition">Maria.B</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="checkbox"
                                        class="rounded border-gray-300 text-primary focus:ring-primary">
                                    <span
                                        class="text-sm text-foreground group-hover:text-primary transition">Limelight</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="checkbox"
                                        class="rounded border-gray-300 text-primary focus:ring-primary">
                                    <span class="text-sm text-foreground group-hover:text-primary transition">J. (Junaid
                                        Jamshed)</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="checkbox"
                                        class="rounded border-gray-300 text-primary focus:ring-primary">
                                    <span class="text-sm text-foreground group-hover:text-primary transition">Sana
                                        Safinaz</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="checkbox"
                                        class="rounded border-gray-300 text-primary focus:ring-primary">
                                    <span
                                        class="text-sm text-foreground group-hover:text-primary transition">Beechtree</span>
                                </label>
                            </div>
                        </div>

                        <!-- Fabric -->
                        <div class="mb-6">
                            <h4 class="text-xs font-bold uppercase text-muted-foreground mb-3 tracking-wider">Fabric
                            </h4>
                            <div class="flex flex-wrap gap-2">
                                <button
                                    class="px-3 py-1 bg-secondary text-xs font-medium rounded-full hover:bg-primary hover:text-white transition">Lawn</button>
                                <button
                                    class="px-3 py-1 bg-white border border-border text-xs font-medium rounded-full hover:border-primary hover:text-primary transition">Chiffon</button>
                                <button
                                    class="px-3 py-1 bg-white border border-border text-xs font-medium rounded-full hover:border-primary hover:text-primary transition">Cotton</button>
                                <button
                                    class="px-3 py-1 bg-white border border-border text-xs font-medium rounded-full hover:border-primary hover:text-primary transition">Silk</button>
                                <button
                                    class="px-3 py-1 bg-white border border-border text-xs font-medium rounded-full hover:border-primary hover:text-primary transition">Khaddar</button>
                                <button
                                    class="px-3 py-1 bg-white border border-border text-xs font-medium rounded-full hover:border-primary hover:text-primary transition">Linen</button>
                                <button
                                    class="px-3 py-1 bg-white border border-border text-xs font-medium rounded-full hover:border-primary hover:text-primary transition">Organza</button>
                            </div>
                        </div>

                        <!-- Pieces -->
                        <div class="mb-6">
                            <h4 class="text-xs font-bold uppercase text-muted-foreground mb-3 tracking-wider">Pieces
                            </h4>
                            <div class="space-y-2">
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="checkbox"
                                        class="rounded border-gray-300 text-primary focus:ring-primary">
                                    <span class="text-sm text-foreground group-hover:text-primary transition">1
                                        Piece</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="checkbox"
                                        class="rounded border-gray-300 text-primary focus:ring-primary">
                                    <span class="text-sm text-foreground group-hover:text-primary transition">2
                                        Piece</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="checkbox"
                                        class="rounded border-gray-300 text-primary focus:ring-primary">
                                    <span class="text-sm text-foreground group-hover:text-primary transition">3
                                        Piece</span>
                                </label>
                            </div>
                        </div>

                        <!-- Collection -->
                        <div class="mb-6">
                            <h4 class="text-xs font-bold uppercase text-muted-foreground mb-3 tracking-wider">Collection
                            </h4>
                            <div class="space-y-2">
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="checkbox"
                                        class="rounded border-gray-300 text-primary focus:ring-primary">
                                    <span class="text-sm text-foreground group-hover:text-primary transition">Summer /
                                        Lawn</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="checkbox"
                                        class="rounded border-gray-300 text-primary focus:ring-primary">
                                    <span
                                        class="text-sm text-foreground group-hover:text-primary transition">Winter</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="checkbox"
                                        class="rounded border-gray-300 text-primary focus:ring-primary">
                                    <span class="text-sm text-foreground group-hover:text-primary transition">Luxury /
                                        Wedding</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="checkbox"
                                        class="rounded border-gray-300 text-primary focus:ring-primary">
                                    <span class="text-sm text-foreground group-hover:text-primary transition">Eid
                                        Edit</span>
                                </label>
                            </div>
                        </div>

                        <!-- Color -->
                        <div>
                            <h4 class="text-xs font-bold uppercase text-muted-foreground mb-3 tracking-wider">Color</h4>
                            <div class="flex flex-wrap gap-3">
                                <button
                                    class="w-6 h-6 rounded-full bg-black border border-border hover:ring-2 ring-primary ring-offset-2"></button>
                                <button
                                    class="w-6 h-6 rounded-full bg-white border border-border hover:ring-2 ring-primary ring-offset-2"></button>
                                <button
                                    class="w-6 h-6 rounded-full bg-red-500 border border-border hover:ring-2 ring-primary ring-offset-2"></button>
                                <button
                                    class="w-6 h-6 rounded-full bg-blue-500 border border-border hover:ring-2 ring-primary ring-offset-2"></button>
                                <button
                                    class="w-6 h-6 rounded-full bg-green-500 border border-border hover:ring-2 ring-primary ring-offset-2"></button>
                                <button
                                    class="w-6 h-6 rounded-full bg-yellow-400 border border-border hover:ring-2 ring-primary ring-offset-2"></button>
                                <button
                                    class="w-6 h-6 rounded-full bg-purple-500 border border-border hover:ring-2 ring-primary ring-offset-2"></button>
                                <button
                                    class="w-6 h-6 rounded-full bg-pink-500 border border-border hover:ring-2 ring-primary ring-offset-2"></button>
                            </div>
                        </div>
                    </div>
                </aside>

                <!-- Product Grid -->
                <div class="flex-1">
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

                        <!-- Product Card 1 -->
                        <div
                            class="hover-lift bg-white border border-border rounded-lg overflow-hidden hover:shadow-lg transition group">
                            <div class="relative aspect-[3/4] bg-gray-100">
                                <img src="https://images.unsplash.com/photo-1605763240004-7e93b172d754?w=600&q=80"
                                    class="w-full h-full object-cover">
                                <div
                                    class="absolute top-2 left-2 bg-black/80 text-white text-[10px] font-bold px-1.5 py-0.5 rounded">
                                    SAPPHIRE</div>
                                <button
                                    class="absolute top-2 right-2 w-7 h-7 bg-white/80 rounded-full flex items-center justify-center text-muted-foreground hover:text-destructive transition">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <div
                                    class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/60 to-transparent p-2">
                                    <p class="text-white text-xs font-bold">3 Piece Lawn</p>
                                </div>
                            </div>
                            <div class="p-3">
                                <h3 class="text-sm font-bold text-foreground truncate">Floral Printed Suit</h3>
                                <div class="grid grid-cols-2 gap-y-1 gap-x-2 mt-2 mb-3">
                                    <div class="text-xxs text-muted-foreground">Fabric</div>
                                    <div class="text-xxs font-semibold text-foreground text-right">Lawn</div>
                                    <div class="text-xxs text-muted-foreground">Type</div>
                                    <div class="text-xxs font-semibold text-foreground text-right">Unstitched</div>
                                </div>
                                <div class="flex items-center justify-between border-t border-border pt-2">
                                    <span class="text-sm font-bold text-primary">Rs. 4,990</span>
                                    <button
                                        class="text-xs bg-secondary hover:bg-foreground hover:text-white text-foreground px-2 py-1 rounded transition">Compare</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 2 -->
                        <div
                            class="hover-lift bg-white border border-border rounded-lg overflow-hidden hover:shadow-lg transition group">
                            <div class="relative aspect-[3/4] bg-gray-100">
                                <img src="https://images.unsplash.com/photo-1589810635657-232948472d98?w=600&q=80"
                                    class="w-full h-full object-cover">
                                <div
                                    class="absolute top-2 left-2 bg-black/80 text-white text-[10px] font-bold px-1.5 py-0.5 rounded">
                                    KHAADI</div>
                                <button
                                    class="absolute top-2 right-2 w-7 h-7 bg-white/80 rounded-full flex items-center justify-center text-muted-foreground hover:text-destructive transition">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <div
                                    class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/60 to-transparent p-2">
                                    <p class="text-white text-xs font-bold">2 Piece Pret</p>
                                </div>
                            </div>
                            <div class="p-3">
                                <h3 class="text-sm font-bold text-foreground truncate">Embroidered Kurta</h3>
                                <div class="grid grid-cols-2 gap-y-1 gap-x-2 mt-2 mb-3">
                                    <div class="text-xxs text-muted-foreground">Fabric</div>
                                    <div class="text-xxs font-semibold text-foreground text-right">Cotton</div>
                                    <div class="text-xxs text-muted-foreground">Type</div>
                                    <div class="text-xxs font-semibold text-foreground text-right">Ready</div>
                                </div>
                                <div class="flex items-center justify-between border-t border-border pt-2">
                                    <span class="text-sm font-bold text-primary">Rs. 3,490</span>
                                    <button
                                        class="text-xs bg-secondary hover:bg-foreground hover:text-white text-foreground px-2 py-1 rounded transition">Compare</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 3 -->
                        <div
                            class="hover-lift bg-white border border-border rounded-lg overflow-hidden hover:shadow-lg transition group">
                            <div class="relative aspect-[3/4] bg-gray-100">
                                <img src="https://images.unsplash.com/photo-1564557287817-3785e38ec1f5?w=600&q=80"
                                    class="w-full h-full object-cover">
                                <div
                                    class="absolute top-2 left-2 bg-black/80 text-white text-[10px] font-bold px-1.5 py-0.5 rounded">
                                    MARIA.B</div>
                                <button
                                    class="absolute top-2 right-2 w-7 h-7 bg-white/80 rounded-full flex items-center justify-center text-muted-foreground hover:text-destructive transition">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <div
                                    class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/60 to-transparent p-2">
                                    <p class="text-white text-xs font-bold">Luxury Chiffon</p>
                                </div>
                            </div>
                            <div class="p-3">
                                <h3 class="text-sm font-bold text-foreground truncate">Evening Wear</h3>
                                <div class="grid grid-cols-2 gap-y-1 gap-x-2 mt-2 mb-3">
                                    <div class="text-xxs text-muted-foreground">Fabric</div>
                                    <div class="text-xxs font-semibold text-foreground text-right">Chiffon</div>
                                    <div class="text-xxs text-muted-foreground">Type</div>
                                    <div class="text-xxs font-semibold text-foreground text-right">Unstitched</div>
                                </div>
                                <div class="flex items-center justify-between border-t border-border pt-2">
                                    <span class="text-sm font-bold text-primary">Rs. 14,990</span>
                                    <button
                                        class="text-xs bg-secondary hover:bg-foreground hover:text-white text-foreground px-2 py-1 rounded transition">Compare</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 4 -->
                        <div
                            class="bg-white border border-border rounded-lg overflow-hidden hover:shadow-lg transition group">
                            <div class="relative aspect-[3/4] bg-gray-100">
                                <img src="https://images.unsplash.com/photo-1583391733958-e0265af9d9a5?w=600&q=80"
                                    class="w-full h-full object-cover">
                                <div
                                    class="absolute top-2 left-2 bg-black/80 text-white text-[10px] font-bold px-1.5 py-0.5 rounded">
                                    GUL AHMED</div>
                                <button
                                    class="absolute top-2 right-2 w-7 h-7 bg-white/80 rounded-full flex items-center justify-center text-muted-foreground hover:text-destructive transition">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <div
                                    class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/60 to-transparent p-2">
                                    <p class="text-white text-xs font-bold">Printed Lawn</p>
                                </div>
                            </div>
                            <div class="p-3">
                                <h3 class="text-sm font-bold text-foreground truncate">Summer Breeze</h3>
                                <div class="grid grid-cols-2 gap-y-1 gap-x-2 mt-2 mb-3">
                                    <div class="text-xxs text-muted-foreground">Fabric</div>
                                    <div class="text-xxs font-semibold text-foreground text-right">Lawn</div>
                                    <div class="text-xxs text-muted-foreground">Type</div>
                                    <div class="text-xxs font-semibold text-foreground text-right">Unstitched</div>
                                </div>
                                <div class="flex items-center justify-between border-t border-border pt-2">
                                    <span class="text-sm font-bold text-primary">Rs. 2,990</span>
                                    <button
                                        class="text-xs bg-secondary hover:bg-foreground hover:text-white text-foreground px-2 py-1 rounded transition">Compare</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 5 -->
                        <div
                            class="bg-white border border-border rounded-lg overflow-hidden hover:shadow-lg transition group">
                            <div class="relative aspect-[3/4] bg-gray-100">
                                <img src="https://images.unsplash.com/photo-1617114919297-3c8dd6caea94?w=600&q=80"
                                    class="w-full h-full object-cover">
                                <div
                                    class="absolute top-2 left-2 bg-black/80 text-white text-[10px] font-bold px-1.5 py-0.5 rounded">
                                    LIMELIGHT</div>
                                <button
                                    class="absolute top-2 right-2 w-7 h-7 bg-white/80 rounded-full flex items-center justify-center text-muted-foreground hover:text-destructive transition">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <div
                                    class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/60 to-transparent p-2">
                                    <p class="text-white text-xs font-bold">Cambric Trousers</p>
                                </div>
                            </div>
                            <div class="p-3">
                                <h3 class="text-sm font-bold text-foreground truncate">Solid Trousers</h3>
                                <div class="grid grid-cols-2 gap-y-1 gap-x-2 mt-2 mb-3">
                                    <div class="text-xxs text-muted-foreground">Fabric</div>
                                    <div class="text-xxs font-semibold text-foreground text-right">Cambric</div>
                                    <div class="text-xxs text-muted-foreground">Type</div>
                                    <div class="text-xxs font-semibold text-foreground text-right">Ready</div>
                                </div>
                                <div class="flex items-center justify-between border-t border-border pt-2">
                                    <span class="text-sm font-bold text-primary">Rs. 1,190</span>
                                    <button
                                        class="text-xs bg-secondary hover:bg-foreground hover:text-white text-foreground px-2 py-1 rounded transition">Compare</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 6 -->
                        <div
                            class="bg-white border border-border rounded-lg overflow-hidden hover:shadow-lg transition group">
                            <div class="relative aspect-[3/4] bg-gray-100">
                                <img src="https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=600&q=80"
                                    class="w-full h-full object-cover">
                                <div
                                    class="absolute top-2 left-2 bg-black/80 text-white text-[10px] font-bold px-1.5 py-0.5 rounded">
                                    SANA SAFINAZ</div>
                                <button
                                    class="absolute top-2 right-2 w-7 h-7 bg-white/80 rounded-full flex items-center justify-center text-muted-foreground hover:text-destructive transition">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <div
                                    class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/60 to-transparent p-2">
                                    <p class="text-white text-xs font-bold">Muzlin Collection</p>
                                </div>
                            </div>
                            <div class="p-3">
                                <h3 class="text-sm font-bold text-foreground truncate">Digital Print Lawn</h3>
                                <div class="grid grid-cols-2 gap-y-1 gap-x-2 mt-2 mb-3">
                                    <div class="text-xxs text-muted-foreground">Fabric</div>
                                    <div class="text-xxs font-semibold text-foreground text-right">Lawn</div>
                                    <div class="text-xxs text-muted-foreground">Type</div>
                                    <div class="text-xxs font-semibold text-foreground text-right">Unstitched</div>
                                </div>
                                <div class="flex items-center justify-between border-t border-border pt-2">
                                    <span class="text-sm font-bold text-primary">Rs. 5,490</span>
                                    <button
                                        class="text-xs bg-secondary hover:bg-foreground hover:text-white text-foreground px-2 py-1 rounded transition">Compare</button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Pagination -->
                    <div class="mt-10 flex justify-center">
                        <nav class="flex items-center gap-2">
                            <a href="#"
                                class="w-8 h-8 flex items-center justify-center rounded border border-border hover:border-primary hover:text-primary transition"><i
                                    class="fa-solid fa-chevron-left text-xs"></i></a>
                            <a href="#"
                                class="w-8 h-8 flex items-center justify-center rounded bg-primary text-white font-bold text-xs">1</a>
                            <a href="#"
                                class="w-8 h-8 flex items-center justify-center rounded border border-border hover:border-primary hover:text-primary transition text-xs font-medium">2</a>
                            <a href="#"
                                class="w-8 h-8 flex items-center justify-center rounded border border-border hover:border-primary hover:text-primary transition text-xs font-medium">3</a>
                            <span class="text-muted-foreground text-xs">...</span>
                            <a href="#"
                                class="w-8 h-8 flex items-center justify-center rounded border border-border hover:border-primary hover:text-primary transition"><i
                                    class="fa-solid fa-chevron-right text-xs"></i></a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Filter Drawer -->
        <div x-show="mobileFiltersOpen" style="display: none;" class="relative z-50" aria-labelledby="slide-over-title"
            role="dialog" aria-modal="true">
            <div x-show="mobileFiltersOpen" x-transition:enter="ease-in-out duration-500"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in-out duration-500" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 bg-foreground/20 backdrop-blur-sm transition-opacity" <!-- Mobile Filter Drawer -->
                <div id="mobileFilterDrawer" class="relative z-50 hidden" aria-labelledby="slide-over-title"
                    role="dialog" aria-modal="true">
                    <div id="mobileFilterOverlay"
                        class="fixed inset-0 bg-black/50 transition-opacity opacity-0 transition-ease-in-out duration-500">
                    </div>

                    <div class="fixed inset-0 overflow-hidden">
                        <div class="absolute inset-0 overflow-hidden">
                            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                                <div id="mobileFilterPanel"
                                    class="pointer-events-auto relative w-screen max-w-xs transform transition ease-in-out duration-500 translate-x-full">
                                    <div class="flex h-full flex-col overflow-y-scroll bg-background shadow-2xl">
                                        <div class="px-6 py-4 border-b border-border bg-secondary/30">
                                            <div class="flex items-center justify-between">
                                                <h2 class="text-lg font-display font-bold text-foreground">Filters</h2>
                                                <button id="closeFilterButton" type="button"
                                                    class="rounded-md text-muted-foreground hover:text-foreground focus:outline-none">
                                                    <span class="sr-only">Close panel</span>
                                                    <i class="fa-solid fa-xmark text-xl"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="relative mt-6 flex-1 px-6 pb-20">

                                            <!-- Mobile Filter Content -->
                                            <div class="mb-6">
                                                <h4
                                                    class="text-xs font-bold uppercase text-muted-foreground mb-3 tracking-wider">
                                                    Category</h4>
                                                <div class="space-y-3">
                                                    <label class="flex items-center gap-2 cursor-pointer"><input
                                                            type="radio" name="m-category"
                                                            class="border-gray-300 text-primary" checked>
                                                        <span class="text-sm">All</span></label>
                                                    <label class="flex items-center gap-2 cursor-pointer"><input
                                                            type="radio" name="m-category"
                                                            class="border-gray-300 text-primary"> <span
                                                            class="text-sm">Unstitched</span></label>
                                                    <label class="flex items-center gap-2 cursor-pointer"><input
                                                            type="radio" name="m-category"
                                                            class="border-gray-300 text-primary"> <span
                                                            class="text-sm">Stitched</span></label>
                                                </div>
                                            </div>

                                            <div class="mb-6">
                                                <h4
                                                    class="text-xs font-bold uppercase text-muted-foreground mb-3 tracking-wider">
                                                    Price Range</h4>
                                                <div class="flex items-center justify-between text-sm font-bold mb-2">
                                                    <span>Rs. <span id="minPriceTextMobile">0</span></span>
                                                    <span>Rs. <span id="maxPriceTextMobile">20000</span></span>
                                                </div>
                                                <div class="relative h-1 bg-gray-200 rounded-full mb-4">
                                                    <div id="mobileSliderProgress"
                                                        class="absolute h-full bg-primary rounded-full"
                                                        style="left: 0%; right: 0%">
                                                    </div>
                                                    <input type="range" id="minPriceInputMobile" min="0" max="20000"
                                                        step="100" value="0"
                                                        class="absolute w-full h-1 bg-transparent appearance-none pointer-events-none -top-0">
                                                    <input type="range" id="maxPriceInputMobile" min="0" max="20000"
                                                        step="100" value="20000"
                                                        class="absolute w-full h-1 bg-transparent appearance-none pointer-events-none -top-0">
                                                </div>
                                            </div>

                                            <div class="mb-6">
                                                <h4
                                                    class="text-xs font-bold uppercase text-muted-foreground mb-3 tracking-wider">
                                                    Brands</h4>
                                                <div class="space-y-3">
                                                    <label class="flex items-center gap-2 cursor-pointer"><input
                                                            type="checkbox"
                                                            class="rounded border-gray-300 text-primary"> <span
                                                            class="text-sm">Sapphire</span></label>
                                                    <label class="flex items-center gap-2 cursor-pointer"><input
                                                            type="checkbox"
                                                            class="rounded border-gray-300 text-primary"> <span
                                                            class="text-sm">Khaadi</span></label>
                                                    <label class="flex items-center gap-2 cursor-pointer"><input
                                                            type="checkbox"
                                                            class="rounded border-gray-300 text-primary"> <span
                                                            class="text-sm">Gul Ahmed</span></label>
                                                    <label class="flex items-center gap-2 cursor-pointer"><input
                                                            type="checkbox"
                                                            class="rounded border-gray-300 text-primary"> <span
                                                            class="text-sm">Maria.B</span></label>
                                                </div>
                                            </div>

                                        </div>
                                        <div
                                            class="absolute bottom-0 left-0 w-full p-4 bg-white border-t border-border">
                                            <button
                                                class="w-full bg-primary text-white font-bold py-3 rounded-lg shadow-lg"
                                                @click="mobileFiltersOpen = false">Apply Filters</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </main>
    <script src="{{ asset('assets/js/shop.js') }}"></script>
</x-layout>