
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloom & Blossom | Flower Shop</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap"
          rel="stylesheet">

    <style>
        body {
            font-family: 'DM Sans', sans-serif;
        }

        .heading {
            font-family: 'Playfair Display', serif;
        }

        .hero-bg {
            background: linear-gradient(
                90deg,
                rgba(255, 247, 244, 0.98) 0%,
                rgba(255, 247, 244, 0.88) 45%,
                rgba(255, 247, 244, 0.05) 100%
            );
        }
    </style>
</head>

<body class="bg-[#fffaf8] text-[#493b3d]">

    <!-- NAVIGATION -->
    <header class="bg-white/95 border-b border-rose-100">
        <nav class="max-w-7xl mx-auto px-6 py-5 flex items-center justify-between">

            <a href="/" class="heading text-2xl md:text-3xl font-bold text-rose-700">
                Bloom & Blossom<span class="text-rose-400">.</span>
            </a>

            <div class="hidden md:flex items-center gap-8 text-sm font-medium">
                <a href="/" class="text-rose-600">Home</a>
                <a href="#about" class="hover:text-rose-600">About Us</a>
                <a href="#featured" class="hover:text-rose-600">Flowers</a>
                <a href="#contact" class="hover:text-rose-600">Contact</a>
            </div>

            <div class="flex items-center gap-3">
                <a href="{{ route('login') }}"
                   class="hidden sm:inline-block px-4 py-2 text-rose-700 hover:text-rose-900">
                    Log In
                </a>

                <a href="{{ route('register') }}"
                   class="bg-rose-600 hover:bg-rose-700 text-white px-5 py-3 rounded-full text-sm font-semibold transition">
                    Get Started
                </a>
            </div>

        </nav>
    </header>


    <!-- HERO SECTION -->
    <section class="relative min-h-[570px] flex items-center overflow-hidden">

        <div class="absolute inset-0">
            <img
                src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?auto=format&fit=crop&w=2000&q=85"
                alt="Beautiful fresh flowers"
                class="w-full h-full object-cover object-center"
            >
            <div class="hero-bg absolute inset-0"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 py-24 w-full">
            <div class="max-w-xl">

                <span class="inline-block bg-rose-100 text-rose-700 px-4 py-2 rounded-full text-xs font-bold uppercase tracking-[0.2em] mb-6">
                    Fresh flowers, happy hearts
                </span>

                <h1 class="heading text-5xl md:text-7xl leading-tight font-semibold text-[#50353a]">
                    Flowers that
                    <span class="text-rose-600 italic">speak</span>
                    from the heart.
                </h1>

                <p class="mt-6 text-gray-600 text-base md:text-lg leading-8 max-w-lg">
                    Share love, celebrate special moments, and brighten
                    someone's day with our beautiful hand-picked flowers
                    and thoughtfully arranged bouquets.
                </p>

                <div class="mt-9 flex flex-wrap gap-4">
                    <a href="{{ route('products.index') }}"
                       class="bg-rose-600 hover:bg-rose-700 text-white px-7 py-4 rounded-full font-semibold shadow-lg shadow-rose-200 transition">
                        Shop Flowers &rarr;
                    </a>

                    <a href="#about"
                       class="border border-rose-300 hover:bg-rose-50 px-7 py-4 rounded-full font-semibold transition">
                        Discover Our Story
                    </a>
                </div>

                <div class="mt-10 flex items-center gap-4">
                    <div class="flex -space-x-3">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&h=100&fit=crop"
                             alt="Customer" class="w-10 h-10 rounded-full border-2 border-white object-cover">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&h=100&fit=crop"
                             alt="Customer" class="w-10 h-10 rounded-full border-2 border-white object-cover">
                        <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?w=100&h=100&fit=crop"
                             alt="Customer" class="w-10 h-10 rounded-full border-2 border-white object-cover">
                    </div>

                    <div>
                        <p class="text-sm font-bold">Made with love</p>
                        <p class="text-xs text-gray-500">For life's beautiful moments</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- WHY CHOOSE US -->
    <section id="about" class="py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center max-w-2xl mx-auto mb-12">
                <p class="text-rose-600 uppercase tracking-[0.2em] text-xs font-bold">
                    The Bloom difference
                </p>

                <h2 class="heading text-3xl md:text-4xl mt-3">
                    A little beauty in every bouquet
                </h2>

                <p class="text-gray-500 mt-4 leading-7">
                    We believe every flower has a story. Let us help you
                    share yours with the people who matter most.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div class="bg-white p-8 rounded-3xl border border-rose-100 text-center hover:shadow-lg transition">
                    <div class="w-16 h-16 mx-auto bg-rose-100 rounded-2xl flex items-center justify-center text-3xl">
                        🌷
                    </div>
                    <h3 class="heading text-xl mt-5">Fresh Every Day</h3>
                    <p class="text-gray-500 text-sm leading-7 mt-3">
                        Beautiful, carefully selected flowers for every
                        occasion and celebration.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-rose-100 text-center hover:shadow-lg transition">
                    <div class="w-16 h-16 mx-auto bg-rose-100 rounded-2xl flex items-center justify-center text-3xl">
                        🎁
                    </div>
                    <h3 class="heading text-xl mt-5">Made with Love</h3>
                    <p class="text-gray-500 text-sm leading-7 mt-3">
                        Each bouquet is thoughtfully arranged to make
                        your special moments unforgettable.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-rose-100 text-center hover:shadow-lg transition">
                    <div class="w-16 h-16 mx-auto bg-rose-100 rounded-2xl flex items-center justify-center text-3xl">
                        🚚
                    </div>
                    <h3 class="heading text-xl mt-5">Careful Delivery</h3>
                    <p class="text-gray-500 text-sm leading-7 mt-3">
                        We prepare each order with care so your flowers
                        arrive looking beautiful.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- FEATURED FLOWERS -->
    <section id="featured" class="py-16 md:py-20 bg-[#fff1f0]">
        <div class="max-w-7xl mx-auto px-6">

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-5 mb-10">
                <div>
                    <p class="text-rose-600 uppercase tracking-[0.2em] text-xs font-bold">
                        Handpicked for you
                    </p>
                    <h2 class="heading text-3xl md:text-4xl mt-3">
                        Our lovely flowers
                    </h2>
                    <p class="text-gray-500 mt-3">
                        Find the perfect flowers for every occasion.
                    </p>
                </div>

                <a href="{{ route('products.index') }}"
                   class="text-rose-700 font-semibold hover:text-rose-900">
                    View All Flowers &rarr;
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-7">

                <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1494972308805-463bc619d34e?auto=format&fit=crop&w=800&q=80"
                         alt="Pink roses bouquet"
                         class="w-full h-72 object-cover">
                    <div class="p-6">
                        <p class="text-xs text-rose-500 font-bold uppercase tracking-widest">Romantic</p>
                        <h3 class="heading text-2xl mt-2">Pink Rose Bouquet</h3>
                        <div class="flex justify-between items-center mt-4">
                            <p class="text-rose-700 font-bold text-xl">₱850</p>
                            <a href="{{ route('products.index') }}"
                               class="bg-rose-100 hover:bg-rose-600 hover:text-white text-rose-700 px-5 py-3 rounded-full text-sm font-semibold transition">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1520763185298-1b434c919102?auto=format&fit=crop&w=800&q=80"
                         alt="Colorful tulip bouquet"
                         class="w-full h-72 object-cover">
                    <div class="p-6">
                        <p class="text-xs text-rose-500 font-bold uppercase tracking-widest">Bright & Cheerful</p>
                        <h3 class="heading text-2xl mt-2">Colorful Tulips</h3>
                        <div class="flex justify-between items-center mt-4">
                            <p class="text-rose-700 font-bold text-xl">₱650</p>
                            <a href="{{ route('products.index') }}"
                               class="bg-rose-100 hover:bg-rose-600 hover:text-white text-rose-700 px-5 py-3 rounded-full text-sm font-semibold transition">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1525310072745-f49212b5ac6d?auto=format&fit=crop&w=800&q=80"
                         alt="Elegant white flower bouquet"
                         class="w-full h-72 object-cover">
                    <div class="p-6">
                        <p class="text-xs text-rose-500 font-bold uppercase tracking-widest">Elegant</p>
                        <h3 class="heading text-2xl mt-2">White Floral Dream</h3>
                        <div class="flex justify-between items-center mt-4">
                            <p class="text-rose-700 font-bold text-xl">₱950</p>
                            <a href="{{ route('products.index') }}"
                               class="bg-rose-100 hover:bg-rose-600 hover:text-white text-rose-700 px-5 py-3 rounded-full text-sm font-semibold transition">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- CALL TO ACTION -->
    <section class="py-20">
        <div class="max-w-5xl mx-auto px-6">
            <div class="bg-rose-700 text-white rounded-[2rem] px-8 py-14 md:p-16 text-center">
                <p class="uppercase tracking-[0.2em] text-rose-200 text-xs font-bold">
                    Make someone's day
                </p>

                <h2 class="heading text-3xl md:text-5xl mt-4">
                    Every moment deserves flowers.
                </h2>

                <p class="text-rose-100 mt-5 max-w-xl mx-auto leading-7">
                    From birthdays and anniversaries to simple surprises,
                    find a bouquet that says exactly what you feel.
                </p>

                <a href="{{ route('products.index') }}"
                   class="inline-block mt-8 bg-white text-rose-700 hover:bg-rose-50 px-8 py-4 rounded-full font-bold transition">
                    Explore Our Collection
                </a>
            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <footer id="contact" class="bg-[#35282b] text-white py-12">
        <div class="max-w-7xl mx-auto px-6">

            <div class="flex flex-col md:flex-row justify-between gap-8">
                <div>
                    <a href="/" class="heading text-3xl font-bold">
                        Bloom & Blossom<span class="text-rose-400">.</span>
                    </a>
                    <p class="text-gray-300 text-sm mt-4 max-w-sm leading-7">
                        Bringing beauty, love, and happiness to life's
                        most meaningful moments, one flower at a time.
                    </p>
                </div>

                <div>
                    <h3 class="font-bold mb-4">Quick Links</h3>
                    <div class="flex flex-col gap-3 text-sm text-gray-300">
                        <a href="/" class="hover:text-rose-300">Home</a>
                        <a href="#about" class="hover:text-rose-300">About Us</a>
                        <a href="#featured" class="hover:text-rose-300">Flowers</a>
                        <a href="{{ route('login') }}" class="hover:text-rose-300">Log In</a>
                    </div>
                </div>

                <div>
                    <h3 class="font-bold mb-4">Contact Us</h3>
                    <p class="text-sm text-gray-300 leading-7">
                        Email: hello@bloomandblossom.com<br>
                        Open daily for your special moments.
                    </p>
                </div>
            </div>

            <div class="border-t border-white/10 mt-10 pt-6 text-center text-sm text-gray-400">
                &copy; {{ date('Y') }} Bloom & Blossom. All rights reserved.
            </div>

        </div>
    </footer>

</body>
</html>
