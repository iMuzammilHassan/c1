<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <section class="lg:col-span-2 space-y-4">
        <h1 class="text-xl font-semibold">Shopping Cart</h1>
        <div class="bg-white rounded-lg shadow divide-y">
            @forelse ($items as $item)
                <div class="p-4 flex items-center gap-4">
                    <img src="{{ $item['image'] }}" class="h-16 w-16 rounded object-cover" alt="{{ $item['title'] }}">
                    <div class="flex-1">
                        <div class="font-medium">{{ $item['title'] }}</div>
                        <div class="text-sm text-gray-500">${{ number_format($item['price'], 2) }}</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <button wire:click="decrement('{{ $item['slug'] }}')" class="px-2 py-1 border rounded">-</button>
                        <div class="w-10 text-center">{{ $item['qty'] }}</div>
                        <button wire:click="increment('{{ $item['slug'] }}')" class="px-2 py-1 border rounded">+</button>
                    </div>
                    <div class="w-24 text-right font-semibold">${{ number_format($item['price'] * $item['qty'], 2) }}</div>
                    <button wire:click="remove('{{ $item['slug'] }}')" class="text-red-600 text-sm">Remove</button>
                </div>
            @empty
                <div class="p-6 text-gray-500">Your cart is empty.</div>
            @endforelse
        </div>
        <a href="{{ route('shop.index') }}" class="text-sm text-indigo-600">Continue shopping</a>
    </section>

    <aside class="lg:col-span-1">
        <div class="bg-white rounded-lg shadow p-4 space-y-3">
            <h2 class="font-semibold">Order Summary</h2>
            <div class="flex justify-between text-sm">
                <span>Subtotal</span>
                <span>${{ number_format($totals['subtotal'], 2) }}</span>
            </div>
            <div class="flex justify-between text-sm">
                <span>Shipping</span>
                <span>${{ number_format($totals['shipping'], 2) }}</span>
            </div>
            <div class="border-t pt-3 flex justify-between font-semibold">
                <span>Total</span>
                <span>${{ number_format($totals['total'], 2) }}</span>
            </div>
            <a href="{{ route('checkout.index') }}" class="block text-center bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-lg">Checkout</a>
        </div>
    </aside>
</div>