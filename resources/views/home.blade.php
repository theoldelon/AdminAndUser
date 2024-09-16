<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Home</title>
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-blue-800 text-white">
        <div class="max-w-7xl mx-auto px-4 py-6 flex items-center justify-between">
            <h1 class="text-3xl font-bold">My Application</h1>
            <nav>
                <a href="{{ route('account.login') }}" class="text-white hover:text-gray-200 px-4">Login</a>
                <a href="{{ route('account.register') }}" class="text-white hover:text-gray-200 px-4">Register</a>
                <a href="{{ route('admin.login') }}" class="text-white hover:text-gray-300 transition">Admin Login</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-blue-600 text-white text-center py-20">
        <div class="max-w-2xl mx-auto">
            <h2 class="text-4xl font-bold mb-4">Welcome to My Application</h2>
            <p class="text-lg mb-8">Here you can manage your profile, browse jobs, and more.</p>
            <a href="{{ route('account.register') }}" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100">Get Started</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4">
        <p>&copy; {{ date('Y') }} My Application. All rights reserved.</p>
    </footer>

</body>
</html>
