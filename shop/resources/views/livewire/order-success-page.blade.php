<div class="max-w-xl mx-auto text-center space-y-4">
    <div class="text-green-600 text-5xl">✓</div>
    <h1 class="text-2xl font-semibold">Thank you for your order!</h1>
    <p class="text-gray-600">We sent a confirmation email. You can track your orders in your account.</p>
    <div class="flex items-center justify-center gap-3">
        <a href="{{ route('shop.index') }}" class="px-5 py-2 border rounded">Continue shopping</a>
        <a href="{{ route('account.orders') }}" class="px-5 py-2 bg-indigo-600 text-white rounded">View orders</a>
    </div>
</div>