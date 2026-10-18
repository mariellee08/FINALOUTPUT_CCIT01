<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Parrino Flower Shop</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'DM Sans', sans-serif;
        }

        .serif {
            font-family: 'Playfair Display', serif;
        }

        .flower-bg {
            background:
                linear-gradient(rgba(44, 35, 34, .25), rgba(44, 35, 34, .60)),
                url('https://images.unsplash.com/photo-1490750967868-88aa4486c946?auto=format&fit=crop&w=1400&q=90');
            background-size: cover;
            background-position: center;
        }

        .form-input:focus {
            outline: none;
            border-color: #a65d69;
            box-shadow: 0 0 0 3px rgba(166, 93, 105, .12);
        }
    </style>
</head>

<body class="min-h-screen bg-[#f8f4f0]">

<div class="min-h-screen grid lg:grid-cols-2">

    <!-- LEFT SIDE: FLOWER SHOP DESIGN -->
    <section class="flower-bg hidden lg:flex flex-col justify-between p-12 xl:p-16 text-white">

        <a href="{{ url('/') }}" class="serif text-4xl tracking-wide">
            parrino<span class="text-pink-200">.</span>
        </a>

        <div class="max-w-lg">
            <p class="uppercase tracking-[5px] text-sm text-pink-100 mb-6">
                Flowers made with love
            </p>

            <h1 class="serif text-6xl xl:text-7xl leading-tight mb-6">
                Let your moments bloom.
            </h1>

            <p class="text-lg leading-8 text-white/90">
                Beautiful flowers for birthdays, anniversaries, celebrations,
                and every moment worth remembering.
            </p>

            <div class="flex items-center gap-3 mt-8">
                <div class="h-px w-12 bg-pink-200"></div>
                <span class="text-sm tracking-widest uppercase">Beautifully yours</span>
            </div>
        </div>

        <p class="text-sm text-white/80">
            © {{ date('Y') }} Parrino Flower Shop
        </p>
    </section>

    <!-- RIGHT SIDE: REGISTRATION FORM -->
    <section class="flex items-center justify-center px-6 py-10 sm:px-12 lg:px-14 xl:px-20">

        <div class="w-full max-w-md">

            <div class="flex justify-between items-center mb-8">
                <a href="{{ url('/') }}" class="serif text-3xl text-[#75454c] lg:hidden">
                    parrino<span class="text-[#bd7c88]">.</span>
                </a>

                <a href="{{ url('/') }}"
                   class="ml-auto text-sm text-gray-500 hover:text-[#a65d69]">
                    ← Back to Home
                </a>
            </div>

            <div class="mb-8">
                <div class="inline-flex items-center gap-2 rounded-full bg-[#f0e4e2] px-4 py-2 text-xs font-semibold uppercase tracking-widest text-[#955864] mb-5">
                    <span>✿</span> Join our community
                </div>

                <h2 class="serif text-4xl sm:text-5xl text-[#3f3432]">
                    Create Account
                </h2>

                <p class="mt-4 text-gray-500 leading-7">
                    Join Parrino and discover beautiful blooms for every special occasion.
                </p>
            </div>

            <!-- VALIDATION ERRORS -->
            @if ($errors->any())
                <div class="mb-6 rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-700">
                    <p class="font-semibold mb-2">Please correct these errors:</p>
                    <ul class="list-disc pl-5 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- REGISTRATION FORM -->
            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-semibold text-[#514442] mb-2">
                        Full Name
                    </label>

                    <input
                        id="name"
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        required
                        autofocus
                        autocomplete="name"
                        placeholder="Enter your full name"
                        class="form-input w-full rounded-xl border border-[#e6dcd7] bg-white px-4 py-3.5 text-sm"
                    >
                </div>

                <div>
                    <label for="email" class="block text-sm font-semibold text-[#514442] mb-2">
                        Email Address
                    </label>

                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autocomplete="email"
                        placeholder="you@example.com"
                        class="form-input w-full rounded-xl border border-[#e6dcd7] bg-white px-4 py-3.5 text-sm"
                    >
                </div>

                <div>
                    <label for="password" class="block text-sm font-semibold text-[#514442] mb-2">
                        Password
                    </label>

                    <input
                        id="password"
                        type="password"
                        name="password"
                        required
                        autocomplete="new-password"
                        placeholder="Create a password"
                        class="form-input w-full rounded-xl border border-[#e6dcd7] bg-white px-4 py-3.5 text-sm"
                    >
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-semibold text-[#514442] mb-2">
                        Confirm Password
                    </label>

                    <input
                        id="password_confirmation"
                        type="password"
                        name="password_confirmation"
                        required
                        autocomplete="new-password"
                        placeholder="Enter your password again"
                        class="form-input w-full rounded-xl border border-[#e6dcd7] bg-white px-4 py-3.5 text-sm"
                    >
                </div>

                <button
                    type="submit"
                    class="w-full rounded-xl bg-[#965966] py-4 text-sm font-semibold tracking-wide text-white shadow-lg shadow-[#965966]/15 transition hover:bg-[#7f4652] active:scale-[.99]"
                >
                    Create My Account →
                </button>
            </form>

            <div class="flex items-center gap-4 my-7">
                <div class="h-px flex-1 bg-[#e8ded9]"></div>
                <span class="text-xs text-gray-400">ALREADY A MEMBER?</span>
                <div class="h-px flex-1 bg-[#e8ded9]"></div>
            </div>

            <p class="text-center text-sm text-gray-600">
                Already have an account?
                <a href="{{ route('login') }}"
                   class="font-bold text-[#965966] hover:underline">
                    Sign In
                </a>
            </p>

            <p class="text-center text-xs text-gray-400 mt-8 leading-6">
                Your next beautiful moment starts with Parrino.
            </p>

        </div>
    </section>

</div>

</body>
</html>