<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Login</title>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-4xl font-extrabold mb-4 text-center text-blue-600">MyApp</h1>
        <p class="text-gray-600 text-center mb-8">Your gateway to seamless productivity. Log in to access your dashboard and start managing your projects.</p>

        <!-- Display success message if present -->
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                <strong class="font-bold">Success!</strong>
                <p class="mt-2">{{ session('success') }}</p>
            </div>
        @endif

        <!-- Display error messages if present -->
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <strong class="font-bold">Wrong credentials!</strong>
                <ul class="mt-3 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h2 class="text-3xl font-bold mb-6 text-center text-blue-600">Login</h2>

        <form method="post" action="{{ route('account.authenticate') }}" class="space-y-4">
            @csrf
            <!-- Email Field -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-medium">Email</label>
                <input
                    id="email"
                    type="text"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password Field -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-medium">Password</label>
                <input
                    id="password"
                    type="password"
                    name="password"
                    required
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 flex items-center">
                <input
                    id="remember_me"
                    type="checkbox"
                    name="remember"
                    class="mr-2 h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                >
                <label for="remember_me" class="text-gray-700 text-sm">Remember me</label>
            </div>

            <div class="mb-6">
                <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Login
                </button>
            </div>

            <div class="text-center">
                <a href="" class="text-blue-500 hover:underline">
                    Forgot Your Password?
                </a>
            </div>
        </form>

        <div class="mt-6 text-center">
            <p class="text-gray-600">Don't have an account?</p>
            <a href="{{ route('account.register') }}" class="text-blue-500 hover:underline">Sign up here</a>
        </div>
    </div>
</body>
</html>
