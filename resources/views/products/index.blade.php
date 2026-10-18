<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Collection | Parrino Flower Shop</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'DM Sans', sans-serif; }
        .serif { font-family: 'Playfair Display', serif; }
        .hero {
            background:
                linear-gradient(90deg, rgba(52,32,37,.78), rgba(52,32,37,.15)),
                url('https://images.unsplash.com/photo-1490750967868-88aa4486c946?auto=format&fit=crop&w=1600&q=90');
            background-size: cover;
            background-position: center;
        }
        .product-card { transition: transform .25s ease, box-shadow .25s ease; }
        .product-card:hover { transform: translateY(-5px); box-shadow: 0 14px 30px rgba(80,45,50,.10); }
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
            <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-[#965966]">Dashboard</a>
            <a href="{{ route('products.index') }}" class="font-bold text-[#965966]">Flower Collection</a>
        </nav>

        <div class="flex items-center gap-3">
            @auth
                <span class="hidden text-sm text-gray-600 sm:block">
                    Hi, {{ auth()->user()->name }}
                </span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="rounded-full border border-[#e6d5d5] px-4 py-2 text-sm font-semibold text-[#965966] hover:bg-[#f8eeee]">
                        Log Out
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-sm font-semibold text-[#965966]">Sign In</a>
                <a href="{{ route('register') }}" class="rounded-full bg-[#965966] px-4 py-2 text-sm font-semibold text-white hover:bg-[#7f4652]">Join Us</a>
            @endauth
        </div>
    </div>
</header>

<main class="mx-auto max-w-7xl px-5 py-8 lg:px-8">

    <!-- HERO -->
    <section class="hero flex min-h-[320px] items-center overflow-hidden rounded-3xl px-7 py-12 text-white shadow-sm sm:px-12 lg:px-16">
        <div class="max-w-xl">
            <p class="mb-4 text-xs font-semibold uppercase tracking-[4px] text-pink-100">
                The Parrino Collection
            </p>
            <h1 class="serif text-5xl leading-tight sm:text-6xl">
                Flowers that speak from the heart.
            </h1>
            <p class="mt-5 max-w-lg leading-7 text-white/90">
                Discover thoughtfully selected blooms for birthdays, anniversaries,
                celebrations, or simply to brighten someone's day.
            </p>
            <a href="#products" class="mt-7 inline-flex rounded-full bg-white px-6 py-3 text-sm font-bold text-[#86515b] hover:bg-pink-100">
                Explore Collection ↓
            </a>
        </div>
    </section>

    <!-- INTRO -->
    <section id="products" class="pt-12">
        <div class="text-center">
            <p class="text-xs font-bold uppercase tracking-[4px] text-[#a65d69]">Fresh picks for you</p>
            <h2 class="serif mt-3 text-4xl sm:text-5xl">Our Flower Collection</h2>
            <p class="mx-auto mt-4 max-w-xl text-sm leading-7 text-gray-500">
                Every bouquet is a little reminder that beauty can be found in the smallest moments.
            </p>
        </div>

        <!-- CATEGORY FILTERS -->
        <div class="mt-8 flex flex-wrap justify-center gap-3">
            <button type="button" data-filter="all" class="filter-btn rounded-full bg-[#965966] px-5 py-2.5 text-sm font-semibold text-white">All Flowers</button>
            <button type="button" data-filter="romantic" class="filter-btn rounded-full border border-[#e6d5d5] bg-white px-5 py-2.5 text-sm text-gray-600 hover:border-[#965966]">Romantic</button>
            <button type="button" data-filter="birthday" class="filter-btn rounded-full border border-[#e6d5d5] bg-white px-5 py-2.5 text-sm text-gray-600 hover:border-[#965966]">Birthday</button>
            <button type="button" data-filter="elegant" class="filter-btn rounded-full border border-[#e6d5d5] bg-white px-5 py-2.5 text-sm text-gray-600 hover:border-[#965966]">Elegant</button>
        </div>

        <!-- PRODUCTS -->
        <div id="product-grid" class="mt-9 grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

            <article data-category="romantic" class="product-card overflow-hidden rounded-2xl border border-[#eee3de] bg-white">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1520763185298-1b434c919102?auto=format&fit=crop&w=800&q=85" alt="Pink rose bouquet" class="h-72 w-full object-cover">
                    <span class="absolute left-4 top-4 rounded-full bg-white/95 px-3 py-1.5 text-xs font-semibold text-[#965966]">Bestseller</span>
                </div>
                <div class="p-5">
                    <p class="text-xs font-semibold uppercase tracking-widest text-[#a65d69]">Romantic</p>
                    <h3 class="serif mt-2 text-2xl">Blush Bouquet</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-500">Soft pink blooms for someone special.</p>
                    <div class="mt-5 flex items-center justify-between">
                        <span class="text-lg font-bold text-[#75454c]">₱1,299</span>
                        <button type="button" data-name="Blush Bouquet" data-price="1299" class="add-cart rounded-full bg-[#965966] px-4 py-2.5 text-xs font-semibold text-white hover:bg-[#7f4652]">Add to Cart +</button>
                    </div>
                </div>
            </article>

            <article data-category="romantic" class="product-card overflow-hidden rounded-2xl border border-[#eee3de] bg-white">
                <img src="https://images.unsplash.com/photo-1518895949257-7621c3c786d7?auto=format&fit=crop&w=800&q=85" alt="Red roses" class="h-72 w-full object-cover">
                <div class="p-5">
                    <p class="text-xs font-semibold uppercase tracking-widest text-[#a65d69]">Romantic</p>
                    <h3 class="serif mt-2 text-2xl">Classic Red Roses</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-500">A timeless way to express love.</p>
                    <div class="mt-5 flex items-center justify-between">
                        <span class="text-lg font-bold text-[#75454c]">₱1,599</span>
                        <button type="button" data-name="Classic Red Roses" data-price="1599" class="add-cart rounded-full bg-[#965966] px-4 py-2.5 text-xs font-semibold text-white hover:bg-[#7f4652]">Add to Cart +</button>
                    </div>
                </div>
            </article>

            <article data-category="birthday" class="product-card overflow-hidden rounded-2xl border border-[#eee3de] bg-white">
                <img src="https://images.unsplash.com/photo-1494972308805-463bc619d34e?auto=format&fit=crop&w=800&q=85" alt="Colorful flower arrangement" class="h-72 w-full object-cover">
                <div class="p-5">
                    <p class="text-xs font-semibold uppercase tracking-widest text-[#a65d69]">Birthday</p>
                    <h3 class="serif mt-2 text-2xl">Garden Dreams</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-500">A cheerful mix of colorful seasonal flowers.</p>
                    <div class="mt-5 flex items-center justify-between">
                        <span class="text-lg font-bold text-[#75454c]">₱1,099</span>
                        <button type="button" data-name="Garden Dreams" data-price="1099" class="add-cart rounded-full bg-[#965966] px-4 py-2.5 text-xs font-semibold text-white hover:bg-[#7f4652]">Add to Cart +</button>
                    </div>
                </div>
            </article>

            <article data-category="elegant" class="product-card overflow-hidden rounded-2xl border border-[#eee3de] bg-white">
                <img src="https://images.unsplash.com/photo-1508610048659-a06b669e3321?auto=format&fit=crop&w=800&q=85" alt="Elegant flowers" class="h-72 w-full object-cover">
                <div class="p-5">
                    <p class="text-xs font-semibold uppercase tracking-widest text-[#a65d69]">Elegant</p>
                    <h3 class="serif mt-2 text-2xl">Timeless Blooms</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-500">A graceful arrangement for meaningful moments.</p>
                    <div class="mt-5 flex items-center justify-between">
                        <span class="text-lg font-bold text-[#75454c]">₱1,899</span>
                        <button type="button" data-name="Timeless Blooms" data-price="1899" class="add-cart rounded-full bg-[#965966] px-4 py-2.5 text-xs font-semibold text-white hover:bg-[#7f4652]">Add to Cart +</button>
                    </div>
                </div>
            </article>

            <article data-category="birthday" class="product-card overflow-hidden rounded-2xl border border-[#eee3de] bg-white">
                <img src="https://images.unsplash.com/photo-1457089328109-e5d9bd499191?auto=format&fit=crop&w=800&q=85" alt="Fresh pastel flowers" class="h-72 w-full object-cover">
                <div class="p-5">
                    <p class="text-xs font-semibold uppercase tracking-widest text-[#a65d69]">Birthday</p>
                    <h3 class="serif mt-2 text-2xl">Pastel Wishes</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-500">Gentle pastel colors for a joyful surprise.</p>
                    <div class="mt-5 flex items-center justify-between">
                        <span class="text-lg font-bold text-[#75454c]">₱999</span>
                        <button type="button" data-name="Pastel Wishes" data-price="999" class="add-cart rounded-full bg-[#965966] px-4 py-2.5 text-xs font-semibold text-white hover:bg-[#7f4652]">Add to Cart +</button>
                    </div>
                </div>
            </article>

            <article data-category="elegant" class="product-card overflow-hidden rounded-2xl border border-[#eee3de] bg-white">
                <img src="https://images.unsplash.com/photo-1468327768560-75b778cbb551?auto=format&fit=crop&w=800&q=85" alt="Elegant floral bouquet" class="h-72 w-full object-cover">
                <div class="p-5">
                    <p class="text-xs font-semibold uppercase tracking-widest text-[#a65d69]">Elegant</p>
                    <h3 class="serif mt-2 text-2xl">Blossom Elegance</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-500">An elegant gift to make a lasting impression.</p>
                    <div class="mt-5 flex items-center justify-between">
                        <span class="text-lg font-bold text-[#75454c]">₱1,499</span>
                        <button type="button" data-name="Blossom Elegance" data-price="1499" class="add-cart rounded-full bg-[#965966] px-4 py-2.5 text-xs font-semibold text-white hover:bg-[#7f4652]">Add to Cart +</button>
                    </div>
                </div>
            </article>

        </div>
    </section>

    <!-- SIMPLE DEMO CART -->
    <section id="cart" class="mt-12 rounded-3xl border border-[#eee3de] bg-white p-6 sm:p-8">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <p class="text-xs font-bold uppercase tracking-[3px] text-[#a65d69]">Your selections</p>
                <h2 class="serif mt-2 text-3xl">Shopping Cart</h2>
            </div>
            <span class="rounded-full bg-[#f5e9e8] px-4 py-2 text-sm font-semibold text-[#965966]">
                Items: <span id="cart-count">0</span>
            </span>
        </div>

        <div id="cart-items" class="mt-5 space-y-3">
            <p id="empty-cart" class="text-sm text-gray-500">Your cart is empty. Add a bouquet to get started.</p>
        </div>

        <div class="mt-6 flex items-center justify-between border-t border-[#eee3de] pt-5">
            <span class="font-semibold">Total</span>
            <span id="cart-total" class="serif text-2xl font-bold text-[#75454c]">₱0.00</span>
        </div>

        <p class="mt-3 text-xs leading-5 text-gray-400">
            Demo cart only: selections are kept in this browser page and are not saved as orders or sent for payment.
        </p>
    </section>

    <section class="mt-12 rounded-3xl bg-[#f0e3df] px-6 py-10 text-center sm:px-10">
        <p class="text-2xl text-[#965966]">✿</p>
        <h2 class="serif mt-2 text-3xl sm:text-4xl">A little flower, a lot of love.</h2>
        <p class="mt-3 text-sm text-gray-600">Thank you for choosing Parrino Flower Shop.</p>
    </section>

</main>

<footer class="mt-12 border-t border-[#eee4df] bg-white px-5 py-7 text-center text-sm text-gray-500">
    © {{ date('Y') }} Parrino Flower Shop. Made with love and flowers.
</footer>

<script>
    // Category filters
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('#product-grid article');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.dataset.filter;

            filterButtons.forEach(item => {
                item.classList.remove('bg-[#965966]', 'text-white');
                item.classList.add('bg-white', 'text-gray-600');
            });

            button.classList.add('bg-[#965966]', 'text-white');
            button.classList.remove('bg-white', 'text-gray-600');

            productCards.forEach(card => {
                card.hidden = filter !== 'all' && card.dataset.category !== filter;
            });
        });
    });

    // Demo shopping cart
    const cart = [];
    const cartItems = document.getElementById('cart-items');
    const cartCount = document.getElementById('cart-count');
    const cartTotal = document.getElementById('cart-total');

    function renderCart() {
        cartItems.innerHTML = '';

        if (cart.length === 0) {
            cartItems.innerHTML = '<p class="text-sm text-gray-500">Your cart is empty. Add a bouquet to get started.</p>';
        }

        let total = 0;
        let count = 0;

        cart.forEach((item, index) => {
            total += item.price * item.quantity;
            count += item.quantity;

            const row = document.createElement('div');
            row.className = 'flex items-center justify-between gap-4 rounded-xl bg-[#faf6f3] p-4';

            const details = document.createElement('div');
            const name = document.createElement('p');
            name.className = 'font-semibold';
            name.textContent = item.name;

            const price = document.createElement('p');
            price.className = 'mt-1 text-sm text-gray-500';
            price.textContent = '₱' + item.price.toLocaleString('en-PH') + ' × ' + item.quantity;

            details.append(name, price);

            const remove = document.createElement('button');
            remove.type = 'button';
            remove.className = 'text-sm font-semibold text-[#965966] hover:underline';
            remove.textContent = 'Remove';
            remove.addEventListener('click', () => {
                cart.splice(index, 1);
                renderCart();
            });

            row.append(details, remove);
            cartItems.appendChild(row);
        });

        cartCount.textContent = count;
        cartTotal.textContent = '₱' + total.toLocaleString('en-PH', {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        });
    }

    document.querySelectorAll('.add-cart').forEach(button => {
        button.addEventListener('click', () => {
            const name = button.dataset.name;
            const price = Number(button.dataset.price);
            const existing = cart.find(item => item.name === name);

            if (existing) {
                existing.quantity++;
            } else {
                cart.push({ name, price, quantity: 1 });
            }

            renderCart();

            button.textContent = 'Added ✓';
            setTimeout(() => {
                button.textContent = 'Add to Cart +';
            }, 1000);

            document.getElementById('cart').scrollIntoView({
                behavior: 'smooth',
                block: 'nearest'
            });
        });
    });
</script>

</body>
</html>