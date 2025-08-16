<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Shop' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<body class="min-h-screen bg-gray-50 text-gray-900">
    @include('components.nav')

    <main class="container mx-auto px-4 sm:px-6 lg:px-8 py-6">
        {{ $slot ?? '' }}
        @yield('content')
    </main>

    <footer class="border-t bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 text-sm text-gray-500">
            <p>&copy; {{ date('Y') }} Shop. All rights reserved.</p>
        </div>
    </footer>

    @livewireScripts
</body>
</html>