<div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
    <div>
        <div class="aspect-square overflow-hidden rounded-lg bg-white shadow">
            <img src="{{ $product['images'][0] }}" class="w-full h-full object-cover" alt="{{ $product['title'] }}">
        </div>
        <div class="mt-4 grid grid-cols-4 gap-3">
            @foreach($product['images'] as $img)
                <img src="{{ $img }}" class="h-24 w-full object-cover rounded-md border" alt="thumb">
            @endforeach
        </div>
    </div>
    <div class="space-y-6">
        <div>
            <h1 class="text-2xl font-semibold">{{ $product['title'] }}</h1>
            <div class="mt-2 text-2xl text-indigo-600 font-bold">${{ number_format($product['price'], 2) }}</div>
        </div>
        <p class="text-gray-600">{{ $product['description'] }}</p>

        <div class="flex items-center gap-3">
            <input type="number" min="1" wire:model.live="quantity" class="w-24 border rounded px-3 py-2" />
            <button wire:click="addToCart" class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-lg">Add to cart</button>
        </div>

        @if (session('message'))
            <div class="text-green-600">{{ session('message') }}</div>
        @endif
    </div>
</div>