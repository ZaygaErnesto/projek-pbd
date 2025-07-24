<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin Panel')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md h-screen hidden md:block">
        <div class="p-6 font-bold text-xl border-b">Admin Panel</div>
        <nav class="mt-6">
            <a href="{{ route('categories.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200">Categories</a>
            <a href="{{ route('items.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200">Items</a>
            {{-- <a href="{{ route('item-details.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200">Item Details</a> --}}
            <a href="{{ route('item-tags.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200">Item Tags</a>
            {{-- <a href="{{ route('item-tag-pivot.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200">Item Tag Pivot</a> --}}
            <a href="{{ route('stock-in.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200">Stock In</a>
            <a href="{{ route('stock-out.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200">Stock Out</a>
            {{-- <a href="{{ route('stock-log.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200">Stock Log</a> --}}
            <a href="{{ route('suppliers.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200">Suppliers</a>
            <a href="{{ route('users.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200">Users</a>
        </nav>
    </aside>
    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow px-6 py-4 flex items-center justify-between">
            <h1 class="text-2xl font-semibold">@yield('title', 'Admin Panel')</h1>
            <div>
                <!-- User info or logout button here -->
            </div>
        </header>
        <!-- Page Content -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>
</body>
</html> 