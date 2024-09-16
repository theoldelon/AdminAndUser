<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body class="bg-gray-100 h-screen flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-white border-r border-gray-200 p-4">
        <h2 class="text-2xl font-bold text-blue-600 mb-6">MyApp</h2>
        <nav>
            <ul>
                <li><a href="#" class="block py-2 px-4 rounded hover:bg-blue-100 text-blue-600">Dashboard</a></li>
                <li><a href="#" class="block py-2 px-4 rounded hover:bg-blue-100 text-gray-700">Profile</a></li>
                <li><a href="#" class="block py-2 px-4 rounded hover:bg-blue-100 text-gray-700">Settings</a></li>
                <li><a href="{{ route('account.logout') }}" class="block py-2 px-4 rounded hover:bg-blue-100 text-gray-700">Logout</a></li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        <header class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-gray-900"><span class="text-blue-900">{{auth()->user()->name}}`s</span> Dashboard</h1>
            <div class="flex items-center space-x-4">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">New Task</button>
                <div class="relative">
                    <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400">Notifications</button>
                    <span class="absolute top-0 right-0 bg-red-500 text-white text-xs font-bold rounded-full w-4 h-4 flex items-center justify-center">3</span>
                </div>
            </div>
        </header>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-6">
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Total Sales</h3>
                <p class="text-2xl font-bold text-blue-600">$25,000</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">New Users</h3>
                <p class="text-2xl font-bold text-green-600">150</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Pending Tasks</h3>
                <p class="text-2xl font-bold text-red-600">8</p>
            </div>
        </div>

        <!-- Analytics Section -->
        <section class="bg-white p-4 rounded-lg shadow mb-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Analytics</h3>
            <div class="h-64 bg-gray-100 rounded-lg flex items-center justify-center">
                <p class="text-gray-600">[Line Graph Placeholder]</p>
            </div>
        </section>

        <!-- Task Management Table -->
        <section class="bg-white p-4 rounded-lg shadow mb-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Task Management</h3>
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b text-left text-gray-600">Task</th>
                        <th class="py-2 px-4 border-b text-left text-gray-600">Assigned To</th>
                        <th class="py-2 px-4 border-b text-left text-gray-600">Deadline</th>
                        <th class="py-2 px-4 border-b text-left text-gray-600">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b">Design Homepage</td>
                        <td class="py-2 px-4 border-b">John Doe</td>
                        <td class="py-2 px-4 border-b">Sept 12, 2024</td>
                        <td class="py-2 px-4 border-b"><span class="text-green-600">Completed</span></td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b">Fix Bug #320</td>
                        <td class="py-2 px-4 border-b">Jane Smith</td>
                        <td class="py-2 px-4 border-b">Sept 15, 2024</td>
                        <td class="py-2 px-4 border-b"><span class="text-yellow-600">In Progress</span></td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b">Deploy New Features</td>
                        <td class="py-2 px-4 border-b">Mike Wilson</td>
                        <td class="py-2 px-4 border-b">Sept 20, 2024</td>
                        <td class="py-2 px-4 border-b"><span class="text-red-600">Pending</span></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- User Activity Feed -->
        <section class="bg-white p-4 rounded-lg shadow">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">User Activity Feed</h3>
            <ul class="space-y-4">
                <li class="flex items-center">
                    <span class="w-3 h-3 bg-purple-500 rounded-full mr-2"></span>
                    <p class="text-gray-700">User <strong>John Doe</strong> uploaded a new project.</p>
                </li>
                <li class="flex items-center">
                    <span class="w-3 h-3 bg-orange-500 rounded-full mr-2"></span>
                    <p class="text-gray-700">User <strong>Jane Smith</strong> completed the task "Bug Fix #320".</p>
                </li>
                <li class="flex items-center">
                    <span class="w-3 h-3 bg-teal-500 rounded-full mr-2"></span>
                    <p class="text-gray-700">User <strong>Mike Wilson</strong> commented on the task "Deploy New Features".</p>
                </li>
            </ul>
        </section>

    </main>
</body>
</html>
