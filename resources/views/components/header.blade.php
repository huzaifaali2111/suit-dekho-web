<!-- Top Bar: Market Stats -->
<div class="bg-foreground text-background py-1.5 px-4 text-xs font-medium hidden md:flex justify-between items-center">
    <div class="flex gap-3 lg:gap-6 overflow-x-auto no-scrollbar">
        <span class="whitespace-nowrap"><i class="fa-solid fa-chart-line text-primary mr-2"></i>Market Updates:</span>
        <span class="text-white/80 whitespace-nowrap">Sapphire Summer Vol.1 Launched</span>
        <span class="text-white/80 whitespace-nowrap">Khaadi Sale Live (Up to 50% Off)</span>
    </div>
    <div class="hidden lg:flex gap-4">
        <span><i class="fa-solid fa-database mr-1"></i> 12,405 Suits Indexed</span>
        <span><i class="fa-solid fa-store mr-1"></i> 45 Brands</span>
    </div>
</div>

<!-- Main Header -->
<header class="sticky top-0 z-40 bg-white/95 backdrop-blur-sm border-b border-border shadow-sm">
    <div class="max-w-7xl mx-auto px-3 sm:px-4 md:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16 md:h-20">
            <!-- Logo -->
            <div class="flex items-center gap-2 shrink-0">
                <div
                    class="w-7 h-7 md:w-8 md:h-8 bg-primary rounded flex items-center justify-center text-white font-display font-bold text-base md:text-lg">
                    S</div>
                <a href="#" class="text-xl md:text-2xl font-display font-bold text-foreground tracking-tight">
                    Suit<span class="text-primary">Dekho</span>
                </a>
            </div>

            <!-- Mega Menu Navigation (Center) -->
            <nav
                class="hidden md:flex items-center space-x-4 lg:space-x-8 text-xs font-bold uppercase tracking-widest text-foreground/80 h-full">

                <!-- NEW IN -->
                <div class="group relative h-full flex items-center">
                    <a href="#" class="hover:text-primary transition-colors py-2 relative flex items-center gap-1">
                        NEW IN
                        <span
                            class="absolute -top-1 -right-4 text-[9px] text-primary font-bold animate-pulse">NEW</span>
                    </a>

                    <div
                        class="-left-[200px] absolute top-full w-screen max-w-[90vw] lg:max-w-3xl pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform translate-y-2 group-hover:translate-y-0 z-50">

                        <div class="bg-white rounded-xl p-4 md:p-6 shadow-xl border border-border/50">

                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">

                                <div class="flex flex-col gap-4 md:gap-6 md:border-r border-border/50 md:pr-4 lg:pr-6">
                                    <div>
                                        <h4
                                            class="font-bold text-primary mb-3 text-[11px] uppercase tracking-wider flex items-center gap-2">
                                            <i class="fa-regular fa-clock text-sm"></i>
                                            Timeline
                                        </h4>
                                        <ul class="space-y-2 text-muted-foreground font-bold text-[11px]">
                                            <li
                                                class="hover:text-foreground cursor-pointer transition-colors flex justify-between group/link">
                                                <a href="" class="truncate">Just Landed</a> <span
                                                    class="text-primary opacity-0 -translate-x-2 group-hover/link:opacity-100 group-hover/link:translate-x-0 transition-all">&rarr;</span>
                                            </li>
                                            <li
                                                class="hover:text-foreground cursor-pointer transition-colors flex justify-between group/link">
                                                <a href="" class="truncate">This Week's Drop</a> <span
                                                    class="text-primary opacity-0 -translate-x-2 group-hover/link:opacity-100 group-hover/link:translate-x-0 transition-all">&rarr;</span>
                                            </li>
                                            <li
                                                class="hover:text-foreground cursor-pointer transition-colors flex justify-between group/link">
                                                <a href="" class="truncate">Back in Stock</a> <span
                                                    class="text-primary opacity-0 -translate-x-2 group-hover/link:opacity-100 group-hover/link:translate-x-0 transition-all">&rarr;</span>
                                            </li>

                                        </ul>
                                    </div>

                                    <div>
                                        <h4
                                            class="font-bold text-primary mb-3 text-[11px] uppercase tracking-wider flex items-center gap-2">
                                            <i class="fa-solid fa-tag text-sm"></i>
                                            By Brand
                                        </h4>
                                        <ul class="space-y-2 text-muted-foreground font-bold text-[11px]">
                                            <li class="hover:text-foreground cursor-pointer transition-colors truncate">
                                                <a href="">Sapphire Latest</a></li>
                                            <li class="hover:text-foreground cursor-pointer transition-colors truncate">
                                                <a href="">Khaadi New</a></li>
                                            <li class="hover:text-foreground cursor-pointer transition-colors truncate">
                                                <a href="">Maria.B Edit</a></li>
                                        </ul>
                                    </div>

                                    <div class="mt-auto pt-4">
                                        <a href="#"
                                            class="text-[10px] font-bold text-primary underline decoration-dotted hover:decoration-solid">View
                                            Full Catalog</a>
                                    </div>
                                </div>

                                <div
                                    class="relative rounded-lg overflow-hidden group/card h-full min-h-[180px] md:min-h-[220px] order-first md:order-none cursor-pointer">
                                
                                    <img src="{{ asset('assets/img/eid_collection.webp') }}" alt="Eid Collection"
                                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover/card:scale-105">
                                
                                    <div class="absolute inset-0 bg-black/0 group-hover/card:bg-black/20 transition-colors duration-300"></div>
                                
                                    <div class="absolute bottom-0 left-0 p-4 w-full bg-gradient-to-t from-black/90 via-black/40 to-transparent">
                                        <span
                                            class="bg-primary text-white text-[9px] font-bold px-2 py-0.5 rounded-full mb-2 inline-block uppercase tracking-wider">
                                            Trending
                                        </span>
                                        <h4 class="text-white font-bold text-base md:text-lg leading-tight">
                                            Eid Collection
                                        </h4>
                                    </div>
                                </div>

                                <div
                                    class="relative rounded-lg overflow-hidden group/card h-full min-h-[180px] md:min-h-[220px] order-first md:order-none cursor-pointer">
                                
                                    <img src="{{ asset('assets/img/summer_collection.webp') }}" alt="Eid Collection"
                                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover/card:scale-105">
                                
                                    <div class="absolute inset-0 bg-black/0 group-hover/card:bg-black/20 transition-colors duration-300"></div>
                                
                                    <div class="absolute bottom-0 left-0 p-4 w-full bg-gradient-to-t from-black/90 via-black/40 to-transparent">
                                        <span
                                            class="bg-primary text-white text-[9px] font-bold px-2 py-0.5 rounded-full mb-2 inline-block uppercase tracking-wider">
                                            Trending
                                        </span>
                                        <h4 class="text-white font-bold text-base md:text-lg leading-tight">
                                            Summer 
                                        </h4>
                                    </div>
                                </div>


                                

                            </div>
                        </div>
                    </div>
                </div>

                <!-- UNSTITCHED -->
                <div class="group relative h-full flex items-center">
                    <a href="#" class="hover:text-primary transition-colors py-2">UNSTITCHED</a>
                    <div
                        class="-left-[200px] absolute top-full w-screen max-w-[90vw] lg:max-w-4xl pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform translate-y-2 group-hover:translate-y-0 z-50">
                        <div
                            class="bg-white rounded-xl p-4 md:p-8 shadow-xl border border-border/50 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 lg:gap-8">
                            <div>
                                <h4
                                    class="font-bold text-primary mb-4 border-b border-border pb-2 text-[11px] uppercase tracking-wider">
                                    By Pieces</h4>
                                <ul class="space-y-2 text-muted-foreground font-bold text-[11px]">
                                    <li class="hover:text-foreground cursor-pointer transition-colors truncate">1 Piece
                                        (Kurta)
                                    </li>
                                    <li class="hover:text-foreground cursor-pointer transition-colors truncate">2 Piece
                                    </li>
                                    <li class="hover:text-foreground cursor-pointer transition-colors truncate">3 Piece
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h4
                                    class="font-bold text-primary mb-4 border-b border-border pb-2 text-[11px] uppercase tracking-wider">
                                    By Fabric</h4>
                                <ul class="space-y-2 text-muted-foreground font-bold text-[11px]">
                                    <li class="hover:text-foreground cursor-pointer transition-colors truncate">Lawn
                                    </li>
                                    <li class="hover:text-foreground cursor-pointer transition-colors truncate">Chiffon
                                    </li>
                                    <li class="hover:text-foreground cursor-pointer transition-colors truncate">Organza
                                    </li>
                                    <li class="hover:text-foreground cursor-pointer transition-colors truncate">Cotton
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h4
                                    class="font-bold text-primary mb-4 border-b border-border pb-2 text-[11px] uppercase tracking-wider">
                                    Price Points</h4>
                                <ul class="space-y-2 text-muted-foreground font-bold text-[11px]">
                                    <li class="hover:text-foreground cursor-pointer transition-colors truncate">Under
                                        3,000</li>
                                    <li class="hover:text-foreground cursor-pointer transition-colors truncate">3,000 -
                                        6,000
                                    </li>
                                    <li class="hover:text-foreground cursor-pointer transition-colors truncate">Premium
                                        (8k+)
                                    </li>
                                </ul>
                            </div>
                            <div
                                class="relative rounded-lg p-4 md:p-5 flex flex-col justify-end overflow-hidden group/card shadow-inner md:col-span-2 lg:col-span-1 h-full min-h-[180px]">
                            
                                <img src="{{ asset(path: 'assets/img/luxury_formal.webp') }}" alt="Luxury Formals"
                                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover/card:scale-110">
                            
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent z-10"></div>
                            
                                <div class="absolute inset-0 bg-black/0 group-hover/card:bg-black/20 transition-colors duration-300 z-10"></div>
                            
                                <div class="relative z-20">
                                    <h4 class="font-bold text-white mb-1 text-sm tracking-wide">Luxury Formals</h4>
                                    <span
                                        class="text-[10px] font-bold text-white/90 cursor-pointer group-hover/card:underline flex items-center gap-1">
                                        Shop Collection &rarr;
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- READY TO WEAR -->
                <div class="group relative h-full flex items-center">
                    <a href="#" class="hover:text-primary transition-colors py-2">READY TO WEAR</a>
                    <div
                        class="absolute top-full left-1/2 -translate-x-1/2 w-screen max-w-[90vw] lg:max-w-3xl pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform translate-y-2 group-hover:translate-y-0 z-50">
                        <div
                            class="bg-white rounded-xl p-4 md:p-8 shadow-xl border border-border/50 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 lg:gap-8">
                            <div>
                                <h4
                                    class="font-bold text-primary mb-4 border-b border-border pb-2 text-[11px] uppercase tracking-wider">
                                    Styles</h4>
                                <ul class="space-y-2 text-muted-foreground font-bold text-[11px]">
                                    <li class="hover:text-foreground cursor-pointer transition-colors truncate">Solids
                                        (Co-ords)
                                    </li>
                                    <li class="hover:text-foreground cursor-pointer transition-colors truncate">
                                        Embroidered</li>
                                    <li class="hover:text-foreground cursor-pointer transition-colors truncate">Fusion /
                                        Western
                                    </li>
                                    <li class="hover:text-foreground cursor-pointer transition-colors truncate">Maxis
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h4
                                    class="font-bold text-primary mb-4 border-b border-border pb-2 text-[11px] uppercase tracking-wider">
                                    Sizes</h4>
                                <ul class="space-y-2 text-muted-foreground font-bold text-[11px]">
                                    <li class="hover:text-foreground cursor-pointer transition-colors truncate">XS -
                                        Extra Small
                                    </li>
                                    <li class="hover:text-foreground cursor-pointer transition-colors truncate">S -
                                        Small</li>
                                    <li class="hover:text-foreground cursor-pointer transition-colors truncate">M -
                                        Medium</li>
                                    <li class="hover:text-foreground cursor-pointer transition-colors truncate">L -
                                        Large</li>
                                    <li class="hover:text-foreground cursor-pointer transition-colors truncate">XL -
                                        Extra Large
                                    </li>
                                    <li class="hover:text-foreground cursor-pointer transition-colors truncate">Plus
                                        Size</li>
                                </ul>
                            </div>
                            <div>
                                <h4
                                    class="font-bold text-primary mb-4 border-b border-border pb-2 text-[11px] uppercase tracking-wider">
                                    Fits</h4>
                                <ul class="space-y-2 text-muted-foreground font-bold text-[11px]">
                                    <li class="hover:text-foreground cursor-pointer transition-colors truncate">Boxy /
                                        Oversized
                                    </li>
                                    <li class="hover:text-foreground cursor-pointer transition-colors truncate">Straight
                                        Cut</li>
                                    <li class="hover:text-foreground cursor-pointer transition-colors truncate">A-Line
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- BRANDS -->
                <div class="group relative h-full flex items-center">
                    <a href="#" class="hover:text-primary transition-colors py-2 relative group-hover:text-primary">
                        BRANDS
                    </a>

                    <div
                        class="absolute top-full left-1/2 -translate-x-1/2 w-screen max-w-[90vw] lg:max-w-4xl pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform translate-y-2 group-hover:translate-y-0 z-50">

                        <div class="bg-white rounded-xl shadow-2xl border border-border/50 overflow-hidden">
                            <div class="flex flex-col lg:flex-row">

                                <div class="w-full lg:w-3/4 p-4 md:p-6">
                                    <div
                                        class="flex flex-col md:flex-row md:items-center justify-between mb-4 border-b border-border/50 pb-2">
                                        <h4 class="font-bold text-primary text-[11px] uppercase tracking-wider">Featured
                                            Designers</h4>
                                        <a href="#"
                                            class="text-[10px] text-muted-foreground hover:text-primary transition-colors font-bold mt-1 md:mt-0">View
                                            All 45+ Brands</a>
                                    </div>

                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-2 md:gap-3">
                                        <a href="#"
                                            class="group/brand flex items-center justify-center p-2 md:p-3 border border-border/60 rounded-lg hover:border-primary/50 hover:shadow-md transition-all bg-gray-50/50 hover:bg-white h-[70px] md:h-[80px]">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRq7hAcCQtWLEFRFmTVFE_LB6snMlzNoJmYFw&s"
                                                alt="Maria B"
                                                class="max-h-full max-w-full object-contain opacity-70 group-hover/brand:opacity-100 group-hover/brand:scale-105 transition-all grayscale group-hover/brand:grayscale-0">
                                        </a>

                                        <a href="#"
                                            class="group/brand flex items-center justify-center p-2 md:p-3 border border-border/60 rounded-lg hover:border-primary/50 hover:shadow-md transition-all bg-gray-50/50 hover:bg-white h-[70px] md:h-[80px]">
                                            <img src="https://placehold.co/120x40/transparent/222?text=SAPPHIRE&font=montserrat"
                                                alt="Sapphire"
                                                class="max-h-full max-w-full object-contain opacity-70 group-hover/brand:opacity-100 group-hover/brand:scale-105 transition-all grayscale group-hover/brand:grayscale-0">
                                        </a>

                                        <a href="#"
                                            class="group/brand flex items-center justify-center p-2 md:p-3 border border-border/60 rounded-lg hover:border-primary/50 hover:shadow-md transition-all bg-gray-50/50 hover:bg-white h-[70px] md:h-[80px]">
                                            <img src="https://i.dawn.com/primary/2021/12/61caa7175be6b.png" alt="Khaadi"
                                                class="max-h-full max-w-full object-contain opacity-70 group-hover/brand:opacity-100 group-hover/brand:scale-105 transition-all grayscale group-hover/brand:grayscale-0">
                                        </a>

                                        <a href="#"
                                            class="group/brand flex items-center justify-center p-2 md:p-3 border border-border/60 rounded-lg hover:border-primary/50 hover:shadow-md transition-all bg-gray-50/50 hover:bg-white h-[70px] md:h-[80px]">
                                            <img src="https://ilcdnstatic.investorslounge.com//ResearchImages/FullImage//818156e4-ba5e-4844-b258-d3cea4ef10f3.png"
                                                alt="Gul Ahmed"
                                                class="max-h-full max-w-full object-contain opacity-70 group-hover/brand:opacity-100 group-hover/brand:scale-105 transition-all grayscale group-hover/brand:grayscale-0">
                                        </a>

                                        <a href="#"
                                            class="group/brand flex items-center justify-center p-2 md:p-3 border border-border/60 rounded-lg hover:border-primary/50 hover:shadow-md transition-all bg-gray-50/50 hover:bg-white h-[70px] md:h-[80px]">
                                            <img src="https://sanasafinaz.com/cdn/shop/files/Logo_600x.webp?v=1748932269"
                                                alt="Sana Safinaz"
                                                class="max-h-full max-w-full object-contain opacity-70 group-hover/brand:opacity-100 group-hover/brand:scale-105 transition-all grayscale group-hover/brand:grayscale-0">
                                        </a>

                                        <a href="#"
                                            class="group/brand flex items-center justify-center p-2 md:p-3 border border-border/60 rounded-lg hover:border-primary/50 hover:shadow-md transition-all bg-gray-50/50 hover:bg-white h-[70px] md:h-[80px]">
                                            <img src="https://www.limelight.pk/cdn/shop/files/LimeLight_New_Logo_Source_File-01_220x_60ba6562-d3a3-4362-83ec-25aeadc96177.svg?v=1735035472&width=255"
                                                alt="Limelight"
                                                class="max-h-full max-w-full object-contain opacity-70 group-hover/brand:opacity-100 group-hover/brand:scale-105 transition-all grayscale group-hover/brand:grayscale-0">
                                        </a>
                                    </div>
                                </div>

                                <div
                                    class="w-full lg:w-1/4 bg-gray-50 p-4 md:p-6 border-t lg:border-t-0 lg:border-l border-border/50 flex flex-col justify-between">
                                    <div>
                                        <h4
                                            class="font-bold text-primary mb-4 text-[11px] uppercase tracking-wider flex items-center gap-2">
                                            <i class="fa-solid fa-layer-group"></i> Categories
                                        </h4>
                                        <ul class="space-y-3">
                                            <li><a href="#"
                                                    class="block text-[11px] font-bold text-muted-foreground hover:text-primary hover:translate-x-1 transition-all truncate">High
                                                    Street / Pret</a></li>
                                            <li><a href="#"
                                                    class="block text-[11px] font-bold text-muted-foreground hover:text-primary hover:translate-x-1 transition-all truncate">Luxury
                                                    Formals</a></li>
                                            <li><a href="#"
                                                    class="block text-[11px] font-bold text-muted-foreground hover:text-primary hover:translate-x-1 transition-all truncate">Boutique
                                                    & Artisan</a></li>
                                        </ul>
                                    </div>

                                    <div class="pt-4 border-t border-border/30">
                                        <a href="#"
                                            class="group/btn flex items-center justify-between w-full bg-white border border-border rounded px-3 py-2 shadow-sm hover:shadow hover:border-primary/30 transition-all">
                                            <span class="text-[10px] font-bold text-primary">All Categories</span>
                                            <span
                                                class="text-xs text-muted-foreground group-hover/btn:translate-x-1 transition-transform">&rarr;</span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- OCCASIONS -->
                <div class="group relative h-full flex items-center">
                    <a href="#" class="hover:text-primary transition-colors py-2 relative group-hover:text-primary">
                        OCCASIONS
                    </a>

                    <div
                        class="absolute top-full left-1/2 -translate-x-1/2 w-screen max-w-[90vw] lg:max-w-3xl pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform translate-y-2 group-hover:translate-y-0 z-50">

                        <div class="bg-white rounded-xl p-4 md:p-5 shadow-xl border border-border/50">

                            <div
                                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 md:gap-4 h-auto md:h-[300px]">

                                <a href="#"
                                    class="relative rounded-lg overflow-hidden group/card cursor-pointer block h-[120px] md:h-full">
                                    <img src="{{ asset(path: 'assets/img/eid_collection.webp') }}"
                                        alt="eid Wear"
                                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover/card:scale-110">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-80 group-hover/card:opacity-90 transition-opacity">
                                    </div>

                                    <div
                                        class="absolute bottom-0 left-0 p-3 md:p-4 w-full translate-y-2 group-hover/card:translate-y-0 transition-transform duration-300">
                                        <p class="text-white/80 text-[10px] uppercase tracking-wider mb-1 font-medium">
                                            Ramzan &
                                            Eid-Ul-Fitr</p>
                                        <h4 class="text-white font-bold text-base md:text-lg leading-none">Eid Wear
                                        </h4>
                                        <div
                                            class="h-0.5 w-0 bg-white mt-2 group-hover/card:w-8 md:group-hover/card:w-12 transition-all duration-300 delay-100">
                                        </div>
                                    </div>
                                </a>

                                <a href="#"
                                    class="relative rounded-lg overflow-hidden group/card cursor-pointer block h-[120px] md:h-full">
                                    <img src="{{ asset(path: 'assets/img/summer_collection.webp') }}"
                                        alt="Summer Collection"
                                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover/card:scale-110">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-80 group-hover/card:opacity-90 transition-opacity">
                                    </div>

                                    <div
                                        class="absolute bottom-0 left-0 p-3 md:p-4 w-full translate-y-2 group-hover/card:translate-y-0 transition-transform duration-300">
                                        <p class="text-white/80 text-[10px] uppercase tracking-wider mb-1 font-medium">
                                            Eid & Parties</p>
                                        <h4 class="text-white font-bold text-base md:text-lg leading-none">Festive Edit
                                        </h4>
                                        <div
                                            class="h-0.5 w-0 bg-white mt-2 group-hover/card:w-8 md:group-hover/card:w-12 transition-all duration-300 delay-100">
                                        </div>
                                    </div>
                                </a>

                                <a href="#"
                                    class="relative rounded-lg overflow-hidden group/card cursor-pointer block h-[120px] md:h-full md:col-span-2 lg:col-span-1">
                                    <img src="{{ asset(path: 'assets/img/luxury_formal.webp') }}"
                                        alt="Wedding"
                                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover/card:scale-110">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-80 group-hover/card:opacity-90 transition-opacity">
                                    </div>

                                    <div
                                        class="absolute bottom-0 left-0 p-3 md:p-4 w-full translate-y-2 group-hover/card:translate-y-0 transition-transform duration-300">
                                        <p class="text-white/80 text-[10px] uppercase tracking-wider mb-1 font-medium">
                                            Luxury & Formal
                                        </p>
                                        <h4 class="text-white font-bold text-base md:text-lg leading-none">Wedding Guest
                                        </h4>
                                        <div
                                            class="h-0.5 w-0 bg-white mt-2 group-hover/card:w-8 md:group-hover/card:w-12 transition-all duration-300 delay-100">
                                        </div>
                                    </div>
                                </a>

                            </div>

                            <div class="mt-4 text-center border-t border-dashed border-border/60 pt-3">
                                <a href="#"
                                    class="text-[10px] font-bold text-primary transition-colors uppercase tracking-widest group/all">
                                    View All Occasions <span
                                        class="inline-block transition-transform group-hover/all:translate-x-1">&rarr;</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SALE -->
                <div class="group relative h-full flex items-center">
                    <a href="#"
                        class="text-destructive hover:text-primary transition-colors py-2 relative flex items-center gap-1 font-bold">
                        <i class="fa-solid fa-bolt text-xs animate-pulse text-primary"></i>
                        SALE
                    </a>

                    <div
                        class=" absolute top-full -right-[300px] w-screen max-w-[90vw] lg:max-w-4xl pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform translate-y-2 group-hover:translate-y-0 z-50">

                        <div class="bg-white rounded-xl shadow-2xl overflow-hidden">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">

                                <div class="p-4 md:p-6 border-b md:border-b-0 md:border-r border-border/50">
                                    <h4
                                        class="font-bold text-primary mb-4 text-[11px] uppercase tracking-wider flex items-center gap-2">
                                        <i class="fa-solid fa-percent"></i>
                                        By Discount
                                    </h4>
                                    <ul class="space-y-3">
                                        <li>
                                            <a href="#"
                                                class="flex justify-between items-center group/link text-muted-foreground hover:text-primary transition-colors">
                                                <span class="font-bold text-[11px] truncate">Flat 50% Off</span>
                                                <span
                                                    class="bg-primary/10 text-primary text-[9px] px-1.5 rounded font-bold shrink-0">HOT</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block font-bold text-[11px] text-muted-foreground hover:text-primary transition-colors truncate">
                                                Flat 40% Off
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block font-bold text-[11px] text-muted-foreground hover:text-primary transition-colors truncate">
                                                Flat 30% Off
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block font-bold text-[11px] text-muted-foreground hover:text-primary transition-colors truncate">
                                                Up to 70% Off
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="p-4 md:p-6 border-b lg:border-b-0 lg:border-r border-border/50">
                                    <h4
                                        class="font-bold text-primary mb-4 text-[11px] uppercase tracking-wider flex items-center gap-2">
                                        <i class="fa-solid fa-wallet text-primary"></i>
                                        Under Budget
                                    </h4>
                                    <ul class="space-y-3">
                                        <li class="hover:translate-x-1 transition-transform">
                                            <a href="#"
                                                class="text-[11px] font-bold text-muted-foreground hover:text-gray-900 truncate">
                                                Under PKR 1,999
                                            </a>
                                        </li>
                                        <li class="hover:translate-x-1 transition-transform">
                                            <a href="#"
                                                class="text-[11px] font-bold text-muted-foreground hover:text-gray-900 truncate">
                                                Under PKR 2,999
                                            </a>
                                        </li>
                                        <li class="hover:translate-x-1 transition-transform">
                                            <a href="#"
                                                class="text-[11px] font-bold text-muted-foreground hover:text-gray-900 truncate">
                                                Under PKR 4,999
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="p-4 md:p-6">
                                    <h4 class="font-bold text-primary mb-4 text-[11px] uppercase tracking-wider">
                                        Categories
                                    </h4>
                                    <ul class="space-y-3">
                                        <li><a href="#"
                                                class="text-[11px] font-bold text-muted-foreground hover:text-primary transition-colors truncate">Unstitched
                                                Sale</a></li>
                                        <li><a href="#"
                                                class="text-[11px] font-bold text-muted-foreground hover:text-primary transition-colors truncate">Pret
                                                Sale</a></li>
                                        <li><a href="#"
                                                class="text-[11px] font-bold text-muted-foreground hover:text-primary transition-colors truncate">Trousers
                                                Sale</a></li>
                                        <li><a href="#"
                                                class="text-[11px] font-bold text-primary hover:underline decoration-dotted">View
                                                All Sale &rarr;</a></li>
                                    </ul>
                                </div>

                                <a href="#"
                                    class="relative bg-primary group/card overflow-hidden flex flex-col justify-center items-center text-center p-6 cursor-pointer order-first md:order-last">
                                    <div
                                        class="absolute top-0 right-0 w-24 h-24 bg-white/10 rounded-full -mr-10 -mt-10 transition-transform group-hover/card:scale-150 duration-700">
                                    </div>
                                    <div
                                        class="absolute bottom-0 left-0 w-16 h-16 bg-black/10 rounded-full -ml-8 -mb-8">
                                    </div>

                                    <div class="relative z-10">
                                        <span
                                            class="inline-block bg-white text-primary text-[9px] font-black px-2 py-1 rounded shadow-lg mb-3 animate-bounce">
                                            ENDING SOON
                                        </span>
                                        <h3
                                            class="text-xl md:text-2xl font-black text-white italic tracking-tighter mb-1">
                                            FLASH<br>DEAL
                                        </h3>
                                        <p class="text-white/90 text-[10px] font-medium mb-4">
                                            Extra 10% Off on Cards
                                        </p>
                                        <span
                                            class="bg-black/20 text-white border border-white/20 font-bold text-[10px] px-4 py-2 rounded-full group-hover/card:bg-white group-hover/card:text-primary transition-colors shadow-sm">
                                            Shop Now
                                        </span>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Actions -->
            <div class="flex items-center gap-2 md:gap-4">
                <button id="mobileMenuButton" class="md:hidden text-foreground p-2 text-xl">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <a href="#"
                    class="hidden md:flex items-center gap-2 px-3 lg:px-4 py-2 bg-secondary rounded-lg text-xs font-bold hover:bg-secondary/80 transition-colors">
                    <i class="fa-regular fa-heart"></i>
                    <span class="hidden lg:inline">Saved</span>
                </a>

                <a href="#"
                    class="hidden md:flex items-center gap-2 px-4 lg:px-5 py-2 bg-foreground text-background rounded-lg text-xs font-bold hover:bg-foreground/90 transition-colors shadow-sm">
                    <i class="fa-solid fa-user"></i>
                    <span class="hidden lg:inline">Login</span>
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Slide-over Menu (Moved outside header to fix z-index/fixed positioning issues) -->
<div id="mobileMenuWrapper" class="relative z-50 hidden" aria-labelledby="slide-over-title" role="dialog"
    aria-modal="true">
    <div id="mobileMenuOverlay"
        class="fixed inset-0 bg-black/50 transition-opacity opacity-0 transition-ease-in-out duration-500">
    </div>

    <div class="fixed inset-0 overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                <div id="mobileMenuPanel"
                    class="pointer-events-auto relative w-screen max-w-xs transform transition ease-in-out duration-500 translate-x-full">
                    <div class="flex h-full flex-col overflow-y-scroll bg-background shadow-2xl">
                        <div class="px-6 py-4 border-b border-border bg-secondary/30">
                            <div class="flex items-center justify-between">
                                <h2 class="text-lg font-display font-bold text-foreground" id="slide-over-title">
                                    Menu</h2>
                                <button id="closeMenuButton" type="button"
                                    class="rounded-md text-muted-foreground hover:text-foreground focus:outline-none">
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