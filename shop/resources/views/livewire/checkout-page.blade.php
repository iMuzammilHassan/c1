<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <section class="lg:col-span-2 space-y-4">
        <h1 class="text-xl font-semibold">Checkout</h1>
        <div class="bg-white rounded-lg shadow p-4 space-y-4">
            <div>
                <label class="block text-sm">Full name</label>
                <input type="text" wire:model.live="name" class="w-full border rounded px-3 py-2" />
            </div>
            <div>
                <label class="block text-sm">Email</label>
                <input type="email" wire:model.live="email" class="w-full border rounded px-3 py-2" />
            </div>
            <div>
                <label class="block text-sm">Shipping address</label>
                <textarea wire:model.live="address" rows="4" class="w-full border rounded px-3 py-2"></textarea>
            </div>
        </div>
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
            <button wire:click="placeOrder" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-lg">Place order</button>
        </div>
    </aside>
</div>