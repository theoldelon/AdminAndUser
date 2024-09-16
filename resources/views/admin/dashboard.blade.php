<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Admin Dashboard</title>
</head>
<body class="bg-gray-100 flex h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-blue-800 text-white flex flex-col">
        <div class="p-6">
            <h1 class="text-2xl font-semibold mb-4">Admin Panel</h1>
            <nav>
                <a href="{{ route('admin.dashboard') }}" class="block py-2.5 px-4 rounded hover:bg-blue-700">Dashboard</a>
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-700">Manage Users</a>
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-700">Settings</a>
                <a href="{{ route('admin.logout') }}" class="block py-2.5 px-4 rounded hover:bg-blue-700">Logout</a>
            </nav>
        </div>
    </aside>

    <!-- Main content -->
    <div class="flex-1 p-6 bg-gray-100">
        <header class="bg-white shadow rounded-lg p-4 flex items-center justify-between">
            <h2 class="text-xl font-semibold text-gray-700">Dashboard Overview</h2>
            <p class="text-gray-600">Welcome, {{ Auth::guard('admin')->user()->name }}!</p>
        </header>

        <!-- Dashboard Content -->
        <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Stats Card 1 -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-2xl font-bold text-blue-600">{{ $totalUsers }}</h3>
                <p class="text-gray-600 mt-2">Total Users</p>
            </div>
            

            <!-- Stats Card 2 -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-2xl font-bold text-blue-600">45</h3>
                <p class="text-gray-600 mt-2">Active Projects</p>
            </div>

            <!-- Stats Card 3 -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-2xl font-bold text-blue-600">12</h3>
                <p class="text-gray-600 mt-2">Pending Tasks</p>
            </div>
        </div>

        <!-- Recent Activity Section -->
        <div class="mt-6 bg-white p-6 rounded-lg shadow">
            <h3 class="text-xl font-semibold mb-4 text-gray-700">Recent Activity</h3>
            <ul class="divide-y divide-gray-200">
                <li class="py-4">
                    <p class="text-gray-600">User <strong>John Doe</strong> registered an account.</p>
                    <p class="text-sm text-gray-500">2 hours ago</p>
                </li>
                <li class="py-4">
                    <p class="text-gray-600">Project <strong>Redesign Website</strong> has been completed.</p>
                    <p class="text-sm text-gray-500">1 day ago</p>
                </li>
                <li class="py-4">
                    <p class="text-gray-600">User <strong>Jane Smith</strong> updated her profile.</p>
                    <p class="text-sm text-gray-500">3 days ago</p>
                </li>
            </ul>
        </div>
    </div>

</body>
</html>
