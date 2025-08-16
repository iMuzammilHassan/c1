<nav class="border-b bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <a href="{{ route('home') }}" class="text-xl font-semibold">Shop</a>
            <div class="flex items-center gap-6">
                <a href="{{ route('shop.index') }}" class="text-gray-700 hover:text-gray-900">Shop</a>
                <a href="{{ route('cart.index') }}" class="text-gray-700 hover:text-gray-900">Cart</a>
                @auth
                    <a href="{{ route('account.orders') }}" class="text-gray-700 hover:text-gray-900">Account</a>
                    <a href="{{ route('admin.products') }}" class="text-gray-700 hover:text-gray-900">Admin</a>
                @else
                    <a href="/login" class="text-gray-700 hover:text-gray-900">Login</a>
                @endauth
            </div>
        </div>
    </div>
</nav>