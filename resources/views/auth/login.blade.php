<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Parrino Flower Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'DM Sans', sans-serif; }
        .serif { font-family: 'Playfair Display', serif; }
        .flower-bg {
            background-image: linear-gradient(rgba(44,35,34,.25),rgba(44,35,34,.55)),
            url('https://images.unsplash.com/photo-1490750967868-88aa4486c946?auto=format&fit=crop&w=1400&q=85');
            background-size: cover;
            background-position: center;
        }
        input:focus {
            outline: none;
            border-color: #a65d69;
            box-shadow: 0 0 0 3px rgba(166,93,105,.12);
        }
    </style>
</head>
<body class="min-h-screen bg-[#f8f4f0]">

<div class="min-h-screen grid lg:grid-cols-2">

    <section class="flower-bg hidden lg:flex flex-col justify-between p-14 text-white">
        <a href="{{ url('/') }}" class="serif text-4xl">parrino<span class="text-pink-200">.</span></a>

        <div class="max-w-lg">
            <p class="uppercase tracking-[5px] text-sm text-pink-100 mb-6">Flowers made with love</p>
            <h1 class="serif text-7xl leading-tight mb-6">Every flower tells a story.</h1>
            <p class="text-white/90 text-lg leading-8">
                Find the perfect blooms to celebrate love, friendship, and life's beautiful moments.
            </p>
        </div>

        <p class="text-sm text-white/80">© {{ date('Y') }} Parrino Flower Shop</p>
    </section>

    <section class="flex items-center justify-center px-6 py-12 sm:px-12">
        <div class="w-full max-w-md">

            <div class="flex justify-between items-center mb-10">
                <a href="{{ url('/') }}" class="serif text-3xl text-[#75454c] lg:hidden">parrino.</a>
                <a href="{{ url('/') }}" class="ml-auto text-sm text-gray-500 hover:text-pink-700">← Back to Home</a>
            </div>

            <div class="mb-8">
                <p class="text-xs font-semibold tracking-[3px] uppercase text-[#a65d69] mb-4">Welcome back</p>
                <h2 class="serif text-5xl text-[#3f3432]">Sign in</h2>
                <p class="text-gray-500 mt-4 leading-7">Sign in to discover beautiful blooms and special offers.</p>
            </div>

            @if (session('status'))
                <div class="mb-5 rounded-xl bg-green-50 p-4 text-sm text-green-700">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-5 rounded-xl bg-red-50 border border-red-200 p-4 text-sm text-red-600">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-semibold text-[#514442] mb-2">Email address</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                           required autofocus autocomplete="username" placeholder="you@example.com"
                           class="w-full rounded-xl border border-[#e6dcd7] bg-white px-4 py-3.5 text-sm">
                </div>

                <div>
                    <div class="flex justify-between mb-2">
                        <label for="password" class="text-sm font-semibold text-[#514442]">Password</label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-xs text-[#a65d69] hover:underline">Forgot password?</a>
                        @endif
                    </div>
                    <input id="password" type="password" name="password" required
                           autocomplete="current-password" placeholder="Enter your password"
                           class="w-full rounded-xl border border-[#e6dcd7] bg-white px-4 py-3.5 text-sm">
                </div>

                <label class="flex items-center gap-2 text-sm text-gray-600">
                    <input type="checkbox" name="remember" class="accent-[#965966] rounded">
                    Remember me
                </label>

                <button type="submit"
                        class="w-full rounded-xl bg-[#965966] py-4 text-sm font-semibold text-white shadow-lg hover:bg-[#7f4652] transition">
                    Sign In →
                </button>
            </form>

            <div class="my-7 flex items-center gap-4">
                <div class="h-px flex-1 bg-[#e8ded9]"></div>
                <span class="text-xs text-gray-400">NEW TO PARRINO?</span>
                <div class="h-px flex-1 bg-[#e8ded9]"></div>
            </div>

            <p class="text-center text-sm text-gray-600">
                Don't have an account?
                <a href="{{ route('register') }}" class="font-bold text-[#965966] hover:underline">Create account</a>
            </p>

        </div>
    </section>
</div>
</body>
</html>