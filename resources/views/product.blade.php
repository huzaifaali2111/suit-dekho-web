<x-layout name="Product">
    <main class="min-h-screen pb-20 md:pb-10 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">

            <!-- Breadcrumbs -->
            <nav class="flex items-center space-x-2 text-xs text-muted-foreground mb-6">
                <a href="/" class="hover:text-primary transition">Home</a>
                <span class="text-border">/</span>
                <a href="/shop" class="hover:text-primary transition">Shop</a>
                <span class="text-border">/</span>
                <a href="#" class="hover:text-primary transition">Unstitched</a>
                <span class="text-border">/</span>
                <span class="text-foreground font-semibold truncate">Sapphire Vol. 1 - Floral Print</span>
            </nav>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">

                <!-- Left: Image Gallery -->
                <div class="space-y-4">
                    <!-- Main Image -->
                    <div
                        class="aspect-square bg-gray-100 rounded-lg bg-cover bg-center overflow-hidden border border-border relative group">
                        <img src="https://pk.khaadi.com/dw/image/v2/BJTG_PRD/on/demandware.static/-/Sites-khaadi-master-catalog/default/dwb3bd330c/images/hi-res/krn02a_multi_1.jpg?sw=800&sh=1200"
                            class="object-cover transition duration-500 group-hover:scale-105" id="main-product-image">
                        <div class="absolute top-4 left-4 bg-primary text-white text-xs font-bold px-2 py-1 rounded">
                            New Arrival
                        </div>

                        <!-- Double Tap Hint Animation -->
                        <!-- Attractive Double Tap Hint -->
                        <div id="gallery-hint"
                            class="absolute inset-0 z-10 flex flex-col items-center justify-center pointer-events-none opacity-0">

                            <!-- Hand Animation Container -->
                            <div class="relative w-24 h-24 mb-2">
                                <!-- Ripple Effect (Synced with animation) -->
                                <div
                                    class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-12 h-12 bg-white/40 rounded-full animate-tap-ripple">
                                </div>

                                <!-- Hand Icon -->
                                <div
                                    class="absolute inset-0 flex items-center justify-center animate-double-tap-hand drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)]">
                                    <i
                                        class="fa-solid fa-hand-pointer text-5xl text-white transform rotate-[-15deg] stroke-black stroke-2"></i>
                                </div>
                            </div>

                            <!-- Text Pill -->
                            <div
                                class="bg-black/40 backdrop-blur-md border border-white/20 text-white text-[10px] font-bold uppercase tracking-widest px-4 py-1.5 rounded-full shadow-lg">
                                Double Tap to View
                            </div>
                        </div>
                    </div>
                    <!-- Thumbnails -->
                    <div class="grid grid-cols-4 gap-2">
                        <button class="aspect-square rounded-md overflow-hidden border-2 border-primary cursor-pointer">
                            <img src="https://pk.khaadi.com/dw/image/v2/BJTG_PRD/on/demandware.static/-/Sites-khaadi-master-catalog/default/dw5e850994/images/hi-res/krn02a_multi_2.jpg?sw=800&sh=1200"
                                class="object-cover">
                        </button>
                        <button
                            class="aspect-square rounded-md overflow-hidden border border-border cursor-pointer hover:border-primary">
                            <img src="https://pk.khaadi.com/dw/image/v2/BJTG_PRD/on/demandware.static/-/Sites-khaadi-master-catalog/default/dw525efa0a/images/hi-res/krn02a_multi_3.jpg?sw=800&sh=1200"
                                class="object-cover">
                        </button>
                        <button
                            class="aspect-square rounded-md overflow-hidden border border-border cursor-pointer hover:border-primary">
                            <img src="https://pk.khaadi.com/dw/image/v2/BJTG_PRD/on/demandware.static/-/Sites-khaadi-master-catalog/default/dwfbaf1e87/images/hi-res/krn02a_multi_4.jpg?sw=800&sh=1200"
                                class="object-cover">
                        </button>
                        <button
                            class="aspect-square rounded-md overflow-hidden border border-border cursor-pointer hover:border-primary">
                            <img src="https://pk.khaadi.com/dw/image/v2/BJTG_PRD/on/demandware.static/-/Sites-khaadi-master-catalog/default/dw9c8711a8/images/hi-res/krn02a_multi_5.jpg?sw=800&sh=1200"
                                class="object-cover">
                        </button>
                    </div>
                </div>

                <!-- Right: Product Details -->
                <div>
                    <!-- Brand & Title -->
                    <div class="mb-6">
                        <div class="flex items-center justify-between mb-2">
                            <span class="bg-black text-white text-xs font-bold px-2 py-1 rounded">SAPPHIRE</span>
                            <div class="flex gap-2">
                                <button
                                    class="text-muted-foreground hover:text-primary transition w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100">
                                    <i class="fa-solid fa-share-nodes"></i>
                                </button>
                                <button
                                    class="text-muted-foreground hover:text-destructive transition w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                            </div>
                        </div>
                        <h1 class="text-2xl md:text-3xl font-display font-bold text-foreground mb-2">Floral Printed Lawn
                            3 Piece Suit</h1>
                        <p class="text-sm text-muted-foreground">Vol. 1 Summer Collection 2025</p>
                    </div>

                    <!-- Price & CTA (Affiliate Box) -->
                    <div class="bg-secondary/30 rounded-xl p-6 border border-border mb-8">
                        <div class="flex items-end gap-3 mb-4">
                            <span class="text-3xl font-bold text-primary">Rs. 4,990</span>
                            <span class="text-sm text-muted-foreground line-through mb-1">Rs. 5,490</span>
                            <span class="text-xs font-bold text-green-600 bg-green-100 px-2 py-0.5 rounded mb-1">10%
                                OFF</span>
                        </div>

                        <div class="flex flex-col gap-3">
                            <a href="#" target="_blank"
                                class="w-full bg-foreground text-background font-bold text-center py-3.5 rounded-lg hover:bg-foreground/90 transition flex items-center justify-center gap-2">
                                Buy on Sapphire.com <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                            </a>
                            <button
                                class="w-full bg-white border border-border text-foreground font-bold py-3.5 rounded-lg hover:border-primary hover:text-primary transition flex items-center justify-center gap-2">
                                <i class="fa-solid fa-code-compare"></i> Add to Compare
                            </button>
                        </div>
                        <p
                            class="text-xs text-muted-foreground text-center mt-3 flex items-center justify-center gap-1">
                            <i class="fa-solid fa-circle-info"></i> We redirect you to the official brand store.
                        </p>
                    </div>

                    <!-- Specifications -->
                    <div class="mb-8">
                        <h3 class="font-bold text-foreground mb-4 border-b border-border pb-2">Product Specifications
                        </h3>
                        <div class="grid grid-cols-2 gap-y-4 text-sm">
                            <div class="text-muted-foreground">Fabric</div>
                            <div class="font-semibold text-foreground">Premium Lawn</div>

                            <div class="text-muted-foreground">Type</div>
                            <div class="font-semibold text-foreground">Unstitched</div>

                            <div class="text-muted-foreground">Pieces</div>
                            <div class="font-semibold text-foreground">3 Piece (Shirt, Trouser, Dupatta)</div>

                            <div class="text-muted-foreground">Color</div>
                            <div class="font-semibold text-foreground">Black & Gold</div>

                            <div class="text-muted-foreground">Collection</div>
                            <div class="font-semibold text-foreground">Summer Vol. 1</div>

                            <div class="text-muted-foreground">SKU</div>
                            <div class="font-semibold text-foreground">SAP-25-V1-004</div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mb-8">
                        <h3 class="font-bold text-foreground mb-3">Description</h3>
                        <div class="prose prose-sm text-muted-foreground leading-relaxed">
                            <p>Elevate your summer wardrobe with this stunning 3-piece unstitched lawn suit from
                                Sapphire. Featuring a digital printed lawn shirt with intricate floral motifs, paired
                                with a dyed cambric trouser and a printed voil dupatta. Perfect for casual day outs or
                                semi-formal gatherings.</p>
                            <p class="mt-2"><strong>Key Features:</strong></p>
                            <ul class="list-disc pl-5 mt-1 space-y-1">
                                <li><strong>Shirt:</strong> Digital Printed Fine Lawn (3.00 Meters)</li>
                                <li><strong>Dupatta:</strong> Digital Printed Voile Dupatta (2.50 Meters)</li>
                                <li><strong>Trousers:</strong> Dyed Cambric Trousers (2.50 Meters)</li>
                            </ul>
                        </div>
                    </div>

                    <!-- About Brand -->
                    <div class="mb-8 p-5 bg-secondary/30 rounded-xl border border-border/60 flex items-start gap-4">
                        <div
                            class="w-14 h-14 bg-white rounded-lg flex items-center justify-center border border-border shadow-xs shrink-0 overflow-hidden">
                            <span class="font-display font-bold text-xl tracking-tighter">S.</span>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between mb-1">
                                <h4 class="font-bold text-foreground">Sapphire</h4>
                                <a href="#"
                                    class="text-xs font-semibold text-primary hover:underline flex items-center gap-1">
                                    View Store <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </div>
                            <p class="text-xs text-muted-foreground leading-relaxed mb-0">
                                Sapphire is a high-street brand introduced by one of the largest textile manufacturers
                                in Pakistan. We celebrate the true essence of Pakistani women with our affordable yet
                                premium clothing.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Similar Products -->
            <div class="mt-16 border-t border-border pt-10">
                <h2 class="text-xl font-display font-bold text-foreground mb-6">You May Also Like</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
                    <!-- Product Card 1 -->
                    <div
                        class="bg-white border border-border rounded-lg overflow-hidden hover:shadow-lg transition group">
                        <div class="relative aspect-3/4 bg-gray-100">
                            <img src="https://pk.khaadi.com/dw/image/v2/BJTG_PRD/on/demandware.static/-/Sites-khaadi-master-catalog/default/dw623e9211/images/hi-res/krn03b_multi_4.jpg?sw=800&sh=1200"
                                class="w-full h-full object-cover">
                            <div
                                class="absolute top-2 left-2 bg-black/80 text-white text-[10px] font-bold px-1.5 py-0.5 rounded">
                                SAPPHIRE</div>
                            <button
                                class="absolute top-2 right-2 w-7 h-7 bg-white/80 rounded-full flex items-center justify-center text-muted-foreground hover:text-destructive transition">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            <div
                                class="absolute bottom-0 left-0 w-full bg-linear-to-t from-black/60 to-transparent p-2">
                                <p class="text-white text-xs font-bold">3 Piece Lawn</p>
                            </div>
                        </div>
                        <div class="p-3">
                            <h3 class="text-sm font-bold text-foreground truncate">Floral Printed Suit</h3>
                            <div class="flex items-center justify-between border-t border-border pt-2 mt-2">
                                <span class="text-sm font-bold text-primary">Rs. 4,990</span>
                                <button
                                    class="text-xs bg-secondary hover:bg-foreground hover:text-white text-foreground px-2 py-1 rounded transition">Compare</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div
                        class="bg-white border border-border rounded-lg overflow-hidden hover:shadow-lg transition group">
                        <div class="relative aspect-3/4 bg-gray-100">
                            <img src="https://pk.khaadi.com/dw/image/v2/BJTG_PRD/on/demandware.static/-/Sites-khaadi-master-catalog/default/dw355f0536/images/hi-res/krn09ast_multi_1.jpg?sw=800&sh=1200"
                                class="w-full h-full object-cover">
                            <div
                                class="absolute top-2 left-2 bg-black/80 text-white text-[10px] font-bold px-1.5 py-0.5 rounded">
                                KHAADI</div>
                            <button
                                class="absolute top-2 right-2 w-7 h-7 bg-white/80 rounded-full flex items-center justify-center text-muted-foreground hover:text-destructive transition">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            <div
                                class="absolute bottom-0 left-0 w-full bg-linear-to-t from-black/60 to-transparent p-2">
                                <p class="text-white text-xs font-bold">2 Piece Pret</p>
                            </div>
                        </div>
                        <div class="p-3">
                            <h3 class="text-sm font-bold text-foreground truncate">Embroidered Kurta</h3>
                            <div class="flex items-center justify-between border-t border-border pt-2 mt-2">
                                <span class="text-sm font-bold text-primary">Rs. 3,490</span>
                                <button
                                    class="text-xs bg-secondary hover:bg-foreground hover:text-white text-foreground px-2 py-1 rounded transition">Compare</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 3 -->
                    <div
                        class="bg-white border border-border rounded-lg overflow-hidden hover:shadow-lg transition group">
                        <div class="relative aspect-3/4 bg-gray-100">
                            <img src="http://pk.khaadi.com/dw/image/v2/BJTG_PRD/on/demandware.static/-/Sites-khaadi-master-catalog/default/dw5e50ab3a/images/hi-res/lkw61ast_multi_1.jpg?sw=800&sh=1200"
                                class="w-full h-full object-cover">
                            <div
                                class="absolute top-2 left-2 bg-black/80 text-white text-[10px] font-bold px-1.5 py-0.5 rounded">
                                MARIA.B</div>
                            <button
                                class="absolute top-2 right-2 w-7 h-7 bg-white/80 rounded-full flex items-center justify-center text-muted-foreground hover:text-destructive transition">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            <div
                                class="absolute bottom-0 left-0 w-full bg-linear-to-t from-black/60 to-transparent p-2">
                                <p class="text-white text-xs font-bold">Luxury Chiffon</p>
                            </div>
                        </div>
                        <div class="p-3">
                            <h3 class="text-sm font-bold text-foreground truncate">Evening Wear</h3>
                            <div class="flex items-center justify-between border-t border-border pt-2 mt-2">
                                <span class="text-sm font-bold text-primary">Rs. 14,990</span>
                                <button
                                    class="text-xs bg-secondary hover:bg-foreground hover:text-white text-foreground px-2 py-1 rounded transition">Compare</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 4 -->
                    <div
                        class="bg-white border border-border rounded-lg overflow-hidden hover:shadow-lg transition group">
                        <div class="relative aspect-3/4 bg-gray-100">
                            <img src="https://pk.khaadi.com/dw/image/v2/BJTG_PRD/on/demandware.static/-/Sites-khaadi-master-catalog/default/dwfc8f8de1/images/hi-res/kw67bst_multi_1.jpg?sw=800&sh=1200"
                                class="w-full h-full object-cover">
                            <div
                                class="absolute top-2 left-2 bg-black/80 text-white text-[10px] font-bold px-1.5 py-0.5 rounded">
                                GUL AHMED</div>
                            <button
                                class="absolute top-2 right-2 w-7 h-7 bg-white/80 rounded-full flex items-center justify-center text-muted-foreground hover:text-destructive transition">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            <div
                                class="absolute bottom-0 left-0 w-full bg-linear-to-t from-black/60 to-transparent p-2">
                                <p class="text-white text-xs font-bold">Printed Lawn</p>
                            </div>
                        </div>
                        <div class="p-3">
                            <h3 class="text-sm font-bold text-foreground truncate">Summer Breeze</h3>
                            <div class="flex items-center justify-between border-t border-border pt-2 mt-2">
                                <span class="text-sm font-bold text-primary">Rs. 2,990</span>
                                <button
                                    class="text-xs bg-secondary hover:bg-foreground hover:text-white text-foreground px-2 py-1 rounded transition">Compare</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 5 -->
                    <div
                        class="bg-white border border-border rounded-lg overflow-hidden hover:shadow-lg transition group">
                        <div class="relative aspect-3/4 bg-gray-100">
                            <img src="https://pk.khaadi.com/dw/image/v2/BJTG_PRD/on/demandware.static/-/Sites-khaadi-master-catalog/default/dwe7a93396/images/hi-res/25-09-10e3-01ta_multi_1.jpg?sw=800&sh=1200"
                                class="w-full h-full object-cover">
                            <div
                                class="absolute top-2 left-2 bg-black/80 text-white text-[10px] font-bold px-1.5 py-0.5 rounded">
                                GUL AHMED</div>
                            <button
                                class="absolute top-2 right-2 w-7 h-7 bg-white/80 rounded-full flex items-center justify-center text-muted-foreground hover:text-destructive transition">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            <div
                                class="absolute bottom-0 left-0 w-full bg-linear-to-t from-black/60 to-transparent p-2">
                                <p class="text-white text-xs font-bold">Printed Lawn</p>
                            </div>
                        </div>
                        <div class="p-3">
                            <h3 class="text-sm font-bold text-foreground truncate">Summer Breeze</h3>
                            <div class="flex items-center justify-between border-t border-border pt-2 mt-2">
                                <span class="text-sm font-bold text-primary">Rs. 2,990</span>
                                <button
                                    class="text-xs bg-secondary hover:bg-foreground hover:text-white text-foreground px-2 py-1 rounded transition">Compare</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- Image Gallery Modal -->
    <div id="image-gallery-modal"
        class="fixed inset-0 z-50 hidden bg-black/90 backdrop-blur-sm transition-opacity duration-300 opacity-0 flex flex-col"
        aria-hidden="true">
        <!-- Close Button -->
        <button id="gallery-close"
            class="absolute top-4 right-4 text-white hover:text-gray-300 z-60 w-10 h-10 flex items-center justify-center rounded-full bg-black/50 hover:bg-black/70 transition">
            <i class="fa-solid fa-xmark text-xl"></i>
        </button>

        <!-- Main Gallery Image Container -->
        <div class="relative w-full flex-1 min-h-0 flex items-center justify-center p-4">
            <!-- Loading Spinner -->
            <div id="gallery-loader" class="absolute inset-0 flex items-center justify-center text-white hidden">
                <i class="fa-solid fa-circle-notch fa-spin text-3xl"></i>
            </div>

            <!-- Image -->
            <img id="gallery-image" src=""
                class="max-h-full max-w-full object-contain shadow-2xl rounded-sm transition-transform duration-300 select-none"
                alt="Gallery Image">

            <!-- Previous Button -->
            <button id="gallery-prev"
                class="absolute left-2 md:left-6 top-1/2 -translate-y-1/2 text-white hover:text-gray-300 w-10 h-10 md:w-12 md:h-12 flex items-center justify-center rounded-full bg-black/50 hover:bg-black/70 transition opacity-0 hover:opacity-100 md:opacity-100 group-hover:opacity-100">
                <i class="fa-solid fa-chevron-left text-xl"></i>
            </button>

            <!-- Next Button -->
            <button id="gallery-next"
                class="absolute right-2 md:right-6 top-1/2 -translate-y-1/2 text-white hover:text-gray-300 w-10 h-10 md:w-12 md:h-12 flex items-center justify-center rounded-full bg-black/50 hover:bg-black/70 transition opacity-0 hover:opacity-100 md:opacity-100 group-hover:opacity-100">
                <i class="fa-solid fa-chevron-right text-xl"></i>
            </button>

            <!-- Image Counter -->
            <div
                class="absolute bottom-6 left-1/2 -translate-x-1/2 text-white/80 text-sm font-medium bg-black/50 px-3 py-1 rounded-full">
                <span id="gallery-current-index">1</span> / <span id="gallery-total-count">1</span>
            </div>
        </div>

        <!-- Thumbnails Strip -->
        <div id="gallery-thumbnails"
            class="w-full flex gap-2 overflow-x-auto p-4 shrink-0 justify-center hidden md:flex bg-black/20">
            <!-- Thumbnails will be injected here via JS -->
        </div>
    </div>

    <script src="{{ asset('assets/js/product.js') }}"></script>
</x-layout>