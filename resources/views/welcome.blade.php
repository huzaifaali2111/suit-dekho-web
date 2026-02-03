<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suitdekho - Coming Soon</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/animations.css">

    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Inter"', 'sans-serif'],
                        display: ['"Inter"', 'sans-serif'],
                    },
                    colors: {
                        border: "hsl(var(--border))",
                        input: "hsl(var(--input))",
                        ring: "hsl(var(--ring))",
                        background: "hsl(var(--background))",
                        foreground: "hsl(var(--foreground))",
                        primary: {
                            DEFAULT: "hsl(var(--primary))",
                            foreground: "hsl(var(--primary-foreground))",
                        },
                        secondary: {
                            DEFAULT: "hsl(var(--secondary))",
                            foreground: "hsl(var(--secondary-foreground))",
                        },
                        muted: {
                            DEFAULT: "hsl(var(--muted))",
                            foreground: "hsl(var(--muted-foreground))",
                        },
                        accent: {
                            DEFAULT: "hsl(var(--accent))",
                            foreground: "hsl(var(--accent-foreground))",
                        },
                        card: {
                            DEFAULT: "hsl(var(--card))",
                            foreground: "hsl(var(--card-foreground))",
                        },
                    },
                    fontSize: {
                        xxs: '0.65rem',
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    }
                }
            }
        }
    </script>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --background: 40 33% 98%;
            --foreground: 210 15% 15%;
            --card: 0 0% 100%;
            --card-foreground: 210 15% 15%;
            --primary: 343 62% 54%;
            --primary-foreground: 0 0% 100%;
            --secondary: 32 40% 94%;
            --secondary-foreground: 210 15% 20%;
            --muted: 30 22% 94%;
            --muted-foreground: 210 10% 45%;
            --accent: 27 80% 88%;
            --accent-foreground: 210 15% 20%;
            --border: 27 24% 88%;
            --input: 27 24% 90%;
            --radius: 0.5rem;
        }

        [x-cloak] {
            display: none !important;
        }

        /* Glassmorphism utility */
        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        /* Marquee Animation */
        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-marquee {
            animation: marquee 30s linear infinite;
        }

        .group:hover .animate-marquee {
            animation-play-state: paused;
        }
    </style>
</head>

<body
    class="bg-background text-foreground font-sans antialiased min-h-screen relative flex flex-col justify-between overflow-x-hidden">

    <!-- Abstract Background Shapes -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none -z-10">
        <div
            class="absolute top-[-10%] left-[-10%] w-[50%] h-[50%] bg-primary/10 rounded-full blur-[100px] animate-pulse-slow">
        </div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[60%] bg-accent/30 rounded-full blur-[100px] animate-pulse-slow"
            style="animation-delay: 2s;"></div>
        <div
            class="absolute top-[20%] right-[10%] w-[20%] h-[30%] bg-secondary rounded-full blur-[80px] animate-pulse-slow font-display">
        </div>
    </div>

    <!-- Main Content Wrapper -->
    <main class="w-full flex-grow flex flex-col items-center justify-center pt-20 pb-10 px-6">

        <div class="max-w-4xl mx-auto w-full text-center">

            <!-- Logo -->
            <div class="flex items-center justify-center gap-2 mb-8 animate-float">
                <div
                    class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center text-white font-display font-bold text-2xl shadow-lg shadow-primary/30">
                    S
                </div>
                <a href="#" class="text-3xl font-display font-bold text-foreground tracking-tight">
                    Suit<span class="text-primary">Dekho</span>
                </a>
            </div>

            <!-- Main Headline -->
            <h1
                class="text-4xl md:text-6xl font-display font-extrabold text-foreground mb-6 leading-tight tracking-tight">
                Something Amazing <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-orange-500">Is In The
                    Works</span>
            </h1>

            <p class="text-muted-foreground text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
                We are building the ultimate fashion search engine for Pakistan. <br class="hidden md:block"> Compare
                thousands of suits from top brands, all in one place.
            </p>

            <!-- Countdown Timer -->
            <div x-data="timer()" x-init="startTimer()"
                class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-2xl mx-auto mb-12">
                <!-- Days -->
                <div class="bg-white/50 backdrop-blur-sm border border-white/60 p-4 rounded-xl shadow-sm">
                    <span class="block text-3xl md:text-4xl font-bold text-foreground" x-text="days">00</span>
                    <span class="text-xs uppercase font-bold text-muted-foreground tracking-wider">Days</span>
                </div>
                <!-- Hours -->
                <div class="bg-white/50 backdrop-blur-sm border border-white/60 p-4 rounded-xl shadow-sm">
                    <span class="block text-3xl md:text-4xl font-bold text-foreground" x-text="hours">00</span>
                    <span class="text-xs uppercase font-bold text-muted-foreground tracking-wider">Hours</span>
                </div>
                <!-- Minutes -->
                <div class="bg-white/50 backdrop-blur-sm border border-white/60 p-4 rounded-xl shadow-sm">
                    <span class="block text-3xl md:text-4xl font-bold text-foreground" x-text="minutes">00</span>
                    <span class="text-xs uppercase font-bold text-muted-foreground tracking-wider">Minutes</span>
                </div>
                <!-- Seconds -->
                <div class="bg-white/50 backdrop-blur-sm border border-white/60 p-4 rounded-xl shadow-sm">
                    <span class="block text-3xl md:text-4xl font-bold text-foreground" x-text="seconds">00</span>
                    <span class="text-xs uppercase font-bold text-muted-foreground tracking-wider">Seconds</span>
                </div>
            </div>

            <!-- Notify Me Section -->
            <div class="max-w-md mx-auto mb-16" x-data="{ email: '', notified: false }">
                <template x-if="!notified">
                    <form @submit.prevent="notified = true" class="relative">
                        <div
                            class="flex items-center bg-white p-1.5 rounded-xl shadow-lg border border-border/50 focus-within:ring-2 focus-within:ring-primary/20 transition-all">
                            <div class="pl-4 text-muted-foreground">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <input type="email" x-model="email" required placeholder="Enter your email address"
                                class="w-full bg-transparent border-none py-3 px-3 text-foreground placeholder-muted-foreground focus:ring-0 text-sm font-medium">
                            <button type="submit"
                                class="bg-primary hover:bg-primary/90 text-white px-6 py-2.5 rounded-lg text-sm font-bold shadow-md shadow-primary/20 transition-all transform hover:scale-105">
                                Notify Me
                            </button>
                        </div>
                        <p class="text-xs text-muted-foreground mt-3 font-medium">
                            <i class="fa-solid fa-lock text-xxs mr-1"></i> We promise not to spam you.
                        </p>
                    </form>
                </template>
                <template x-if="notified">
                    <div
                        class="bg-green-50 border border-green-200 text-green-700 p-4 rounded-xl items-center text-center animate-pulse-slow">
                        <i class="fa-solid fa-circle-check text-2xl mb-2"></i>
                        <p class="font-bold">You're on the list!</p>
                        <p class="text-sm opacity-80">We'll let you know when we launch.</p>
                    </div>
                </template>
            </div>

            <!-- What to Expect Grid -->
            <div class="grid md:grid-cols-3 gap-6 text-left w-full mb-16">
                <!-- Card 1 -->
                <div class="glass p-6 rounded-xl border border-white/60 shadow-sm hover:shadow-lg transition group">
                    <div
                        class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary mb-4 group-hover:scale-110 transition">
                        <i class="fa-solid fa-magnifying-glass text-xl"></i>
                    </div>
                    <h3 class="font-bold text-foreground text-lg mb-2">Smart Search</h3>
                    <p class="text-sm text-muted-foreground leading-relaxed">Instantly find suits by fabric, color, or
                        style across all major Pakistani brands like Sapphire, Khaadi, and more.</p>
                </div>
                <!-- Card 2 -->
                <div class="glass p-6 rounded-xl border border-white/60 shadow-sm hover:shadow-lg transition group">
                    <div
                        class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center text-orange-600 mb-4 group-hover:scale-110 transition">
                        <i class="fa-solid fa-code-compare text-xl"></i>
                    </div>
                    <h3 class="font-bold text-foreground text-lg mb-2">Price Compare</h3>
                    <p class="text-sm text-muted-foreground leading-relaxed">Compare prices side-by-side to ensure you
                        get the best deal on your favorite unstitched or pret collections.</p>
                </div>
                <!-- Card 3 -->
                <div class="glass p-6 rounded-xl border border-white/60 shadow-sm hover:shadow-lg transition group">
                    <div
                        class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center text-blue-600 mb-4 group-hover:scale-110 transition">
                        <i class="fa-regular fa-bell text-xl"></i>
                    </div>
                    <h3 class="font-bold text-foreground text-lg mb-2">Restock Alerts</h3>
                    <p class="text-sm text-muted-foreground leading-relaxed">Never miss out again. Set alerts for
                        sold-out items and get notified instantly when they are back in stock.</p>
                </div>
            </div>

            <!-- Social Links -->
            <div class="flex justify-center gap-6 mb-16">
                <a href="#"
                    class="w-10 h-10 rounded-full bg-white border border-border flex items-center justify-center text-muted-foreground hover:text-primary hover:border-primary hover:shadow-md transition-all">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="#"
                    class="w-10 h-10 rounded-full bg-white border border-border flex items-center justify-center text-muted-foreground hover:text-primary hover:border-primary hover:shadow-md transition-all">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="#"
                    class="w-10 h-10 rounded-full bg-white border border-border flex items-center justify-center text-muted-foreground hover:text-primary hover:border-primary hover:shadow-md transition-all">
                    <i class="fa-brands fa-twitter"></i>
                </a>
            </div>

        </div>
    </main>

    <!-- Brand Marquee Section -->
    <div class="w-full bg-white/50 backdrop-blur-sm border-y border-border py-4 overflow-hidden mb-10">
        <div class="max-w-7xl mx-auto px-4 mb-2 text-center">
            <p class="text-xs font-bold text-muted-foreground uppercase tracking-wider">Indexing 45+ Top Brands</p>
        </div>
        <div class="relative w-full overflow-hidden group">
            <div class="flex animate-marquee whitespace-nowrap gap-12 items-center px-4">
                <!-- Brands Set 1 -->
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

                <!-- Brands Set 2 (Duplicate) -->
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
    </div>

    <!-- Footer -->
    <div class="w-full text-center pb-6">
        <p class="text-xs text-muted-foreground font-medium">&copy; 2025 SuitDekho. All rights reserved.</p>
    </div>

    <script>
        function timer() {
            return {
                days: '00',
                hours: '00',
                minutes: '00',
                seconds: '00',
                endDate: new Date().getTime() + (14 * 24 * 60 * 60 * 1000), // 14 days from now

                startTimer() {
                    this.updateTimer();
                    setInterval(() => {
                        this.updateTimer();
                    }, 1000);
                },

                updateTimer() {
                    const now = new Date().getTime();
                    const distance = this.endDate - now;

                    if (distance < 0) {
                        this.days = '00';
                        this.hours = '00';
                        this.minutes = '00';
                        this.seconds = '00';
                        return;
                    }

                    this.days = String(Math.floor(distance / (1000 * 60 * 60 * 24))).padStart(2, '0');
                    this.hours = String(Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))).padStart(2, '0');
                    this.minutes = String(Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))).padStart(2, '0');
                    this.seconds = String(Math.floor((distance % (1000 * 60)) / 1000)).padStart(2, '0');
                }
            }
        }
    </script>
</body>

</html>
