<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Parrino Flower Shop</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'DM Sans', sans-serif; }
        .serif { font-family: 'Playfair Display', serif; }
        .flower-hero {
            background-image:
                linear-gradient(90deg, rgba(48, 30, 33, .75), rgba(48, 30, 33, .12)),
                url('https://images.unsplash.com/photo-1490750967868-88aa4486c946?auto=format&fit=crop&w=1600&q=90');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="bg-[#faf6f3] text-[#403533]">

<!-- NAVIGATION -->
<header class="sticky top-0 z-20 border-b border-[#eee4df] bg-white/95 backdrop-blur">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 lg:px-8">

        <a href="{{ url('/') }}" class="serif text-3xl font-bold text-[#75454c]">
            parrino<span class="text-[#bd7c88]">.</span>
        </a>

        <nav class="hidden items-center gap-8 text-sm font-medium md:flex">
            <a href="{{ url('/') }}" class="text-gray-600 hover:text-[#965966]">Home</a>
            <a href="{{ route('dashboard') }}" class="font-bold text-[#965966]">Dashboard</a>
            <a href="{{ route('products.index') }}" class="text-gray-600 hover:text-[#965966]">Flower Collection</a>
        </nav>

        <div class="flex items-center gap-3">
            <span class="hidden text-sm text-gray-600 sm:block">
                Hi, {{ auth()->user()->name ?? 'Flower Lover' }}
            </span>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="rounded-full border border-[#e6d5d5] px-4 py-2 text-sm font-semibold text-[#965966] hover:bg-[#f8eeee]">
                    Log Out
                </button>
            </form>
        </div>
    </div>
</header>

<main class="mx-auto max-w-7xl px-5 py-8 lg:px-8">

    <!-- WELCOME -->
    <section class="mb-8">
        <p class="text-xs font-bold uppercase tracking-[4px] text-[#a65d69]">
            Your flower shop
        </p>

        <h1 class="serif mt-2 text-4xl sm:text-5xl">
            Welcome back, {{ auth()->user()->name ?? 'Flower Lover' }}!
        </h1>

        <p class="mt-3 text-gray-500">
            Make someone's day a little more beautiful with flowers.
        </p>
    </section>

    <!-- HERO BANNER -->
    <section class="flower-hero flex min-h-[300px] items-center overflow-hidden rounded-3xl px-7 py-10 text-white shadow-sm sm:px-12">
        <div class="max-w-xl">
            <p class="mb-4 text-xs font-semibold uppercase tracking-[4px] text-pink-100">
                Fresh flowers • Beautiful moments
            </p>

            <h2 class="serif text-4xl leading-tight sm:text-5xl">
                Every bloom tells a story.
            </h2>

            <p class="mt-4 max-w-md leading-7 text-white/90">
                Explore our flower collection and find the perfect arrangement
                for every person and every occasion.
            </p>

            <a href="{{ route('products.index') }}"
               class="mt-7 inline-flex items-center rounded-full bg-white px-6 py-3 text-sm font-bold text-[#86515b] transition hover:bg-pink-100">
                Explore Flowers <span class="ml-3">→</span>
            </a>
        </div>
    </section>

    <!-- DASHBOARD CARDS -->
    <section class="mt-10">
        <div class="mb-5 flex items-end justify-between">
            <div>
                <h2 class="serif text-3xl">Your Overview</h2>
                <p class="mt-1 text-sm text-gray-500">A little snapshot of your flower shop.</p>
            </div>
        </div>

        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

            <div class="rounded-2xl border border-[#eee3de] bg-white p-6 shadow-sm">
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-500">Flower Collection</span>
                    <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-pink-50 text-2xl">🌷</span>
                </div>
                <p class="serif mt-4 text-3xl">Discover</p>
                <p class="mt-2 text-sm text-gray-500">Browse flowers for every occasion.</p>
                <a href="{{ route('products.index') }}" class="mt-5 inline-block text-sm font-bold text-[#965966] hover:underline">
                    View collection →
                </a>
            </div>

            <div class="rounded-2xl border border-[#eee3de] bg-white p-6 shadow-sm">
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-500">Special Occasions</span>
                    <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-rose-50 text-2xl">💐</span>
                </div>
                <p class="serif mt-4 text-3xl">Made for You</p>
                <p class="mt-2 text-sm text-gray-500">Find flowers for birthdays, love, and celebrations.</p>
                <a href="{{ route('products.index') }}" class="mt-5 inline-block text-sm font-bold text-[#965966] hover:underline">
                    Find a bouquet →
                </a>
            </div>

            <div class="rounded-2xl border border-[#eee3de] bg-white p-6 shadow-sm sm:col-span-2 lg:col-span-1">
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-500">Your Account</span>
                    <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-purple-50 text-2xl">🌸</span>
                </div>
                <p class="serif mt-4 text-3xl">Welcome!</p>
                <p class="mt-2 text-sm text-gray-500">You are signed in to Parrino Flower Shop.</p>
                <p class="mt-5 truncate text-sm font-semibold text-[#965966]">
                    {{ auth()->user()->email ?? '' }}
                </p>
            </div>

        </div>
    </section>

    <!-- FEATURED FLOWERS -->
    <section class="mt-12">
        <div class="mb-6 flex items-end justify-between gap-4">
            <div>
                <p class="text-xs font-bold uppercase tracking-[3px] text-[#a65d69]">Handpicked for you</p>
                <h2 class="serif mt-2 text-3xl sm:text-4xl">Featured Flowers</h2>
            </div>

            <a href="{{ route('products.index') }}"
               class="shrink-0 text-sm font-bold text-[#965966] hover:underline">
                View all →
            </a>
        </div>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

            <article class="overflow-hidden rounded-2xl border border-[#eee3de] bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                <img
                    src="https://images.unsplash.com/photo-1520763185298-1b434c919102?auto=format&fit=crop&w=800&q=85"
                    alt="Pink flower bouquet"
                    class="h-64 w-full object-cover"
                >
                <div class="p-5">
                    <p class="text-xs font-semibold uppercase tracking-widest text-[#a65d69]">Romantic</p>
                    <h3 class="serif mt-2 text-2xl">Blush Bouquet</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-500">Soft, romantic blooms for a special someone.</p>
                    <a href="{{ route('products.index') }}" class="mt-4 inline-block text-sm font-bold text-[#965966] hover:underline">
                        Discover more →
                    </a>
                </div>
            </article>

            <article class="overflow-hidden rounded-2xl border border-[#eee3de] bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                <img
                    src="https://images.unsplash.com/photo-1494972308805-463bc619d34e?auto=format&fit=crop&w=800&q=85"
                    alt="Colorful fresh flowers"
                    class="h-64 w-full object-cover"
                >
                <div class="p-5">
                    <p class="text-xs font-semibold uppercase tracking-widest text-[#a65d69]">Cheerful</p>
                    <h3 class="serif mt-2 text-2xl">Garden Dreams</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-500">Colorful flowers to brighten someone's day.</p>
                    <a href="{{ route('products.index') }}" class="mt-4 inline-block text-sm font-bold text-[#965966] hover:underline">
                        Discover more →
                    </a>
                </div>
            </article>

            <article class="overflow-hidden rounded-2xl border border-[#eee3de] bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                <img
                    src="https://images.unsplash.com/photo-1508610048659-a06b669e3321?auto=format&fit=crop&w=800&q=85"
                    alt="Elegant flower arrangement"
                    class="h-64 w-full object-cover"
                >
                <div class="p-5">
                    <p class="text-xs font-semibold uppercase tracking-widest text-[#a65d69]">Elegant</p>
                    <h3 class="serif mt-2 text-2xl">Timeless Blooms</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-500">An elegant arrangement for life's best moments.</p>
                    <a href="{{ route('products.index') }}" class="mt-4 inline-block text-sm font-bold text-[#965966] hover:underline">
                        Discover more →
                    </a>
                </div>
            </article>

        </div>
    </section>

    <!-- FOOTER BANNER -->
    <section class="mt-12 rounded-3xl bg-[#f0e3df] px-6 py-10 text-center sm:px-10">
        <p class="text-2xl text-[#965966]">✿</p>
        <h2 class="serif mt-2 text-3xl sm:text-4xl">Let every day bloom.</h2>
        <p class="mx-auto mt-3 max-w-xl text-sm leading-7 text-gray-600">
            A thoughtful bouquet can say what words cannot. Find your next favorite flowers at Parrino.
        </p>
        <a href="{{ route('products.index') }}"
           class="mt-6 inline-block rounded-full bg-[#965966] px-7 py-3 text-sm font-semibold text-white hover:bg-[#7f4652]">
            Shop Flowers
        </a>
    </section>

</main>

<footer class="mt-12 border-t border-[#eee4df] bg-white px-5 py-7 text-center text-sm text-gray-500">
    © {{ date('Y') }} Parrino Flower Shop. Made with love and flowers.
</footer>

</body>
</html>