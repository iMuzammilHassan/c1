<div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
    <aside class="lg:col-span-1 space-y-6">
        <div class="bg-white rounded-lg shadow p-4">
            <h3 class="font-semibold mb-3">Search</h3>
            <input type="text" wire:model.live.debounce.300ms="q" class="w-full border rounded px-3 py-2" placeholder="Search products...">
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <h3 class="font-semibold mb-3">Category</h3>
            <div class="space-y-2">
                <button wire:click="$set('category','')" class="text-sm {{ $category === '' ? 'font-semibold text-indigo-600' : 'text-gray-700' }}">All</button>
                @foreach($categories as $cat)
                    <button wire:click="$set('category','{{ $cat['slug'] }}')" class="block text-left text-sm {{ $category === $cat['slug'] ? 'font-semibold text-indigo-600' : 'text-gray-700' }}">{{ $cat['name'] }}</button>
                @endforeach
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <h3 class="font-semibold mb-3">Sort</h3>
            <select wire:model.live="sort" class="w-full border rounded px-3 py-2">
                <option value="popular">Most popular</option>
                <option value="price-asc">Price: Low to High</option>
                <option value="price-desc">Price: High to Low</option>
            </select>
        </div>
    </aside>

    <section class="lg:col-span-3 space-y-4">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold">Shop</h2>
            <div class="text-sm text-gray-500">{{ $total }} results</div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($items as $product)
                <a href="{{ route('product.show', $product['slug']) }}" class="group bg-white rounded-lg shadow hover:shadow-md transition overflow-hidden">
                    <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}" class="h-48 w-full object-cover">
                    <div class="p-4">
                        <div class="font-medium">{{ $product['title'] }}</div>
                        <div class="mt-1 text-indigo-600 font-semibold">${{ number_format($product['price'], 2) }}</div>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="flex items-center justify-center gap-2">
            @php $maxPage = (int) ceil($total / $perPage); @endphp
            <button wire:click="$set('page', {{ max(1, $page - 1) }})" class="px-3 py-1 border rounded {{ $page <= 1 ? 'opacity-50 cursor-not-allowed' : '' }}" @disabled($page <= 1)>Prev</button>
            <div class="text-sm">Page {{ $page }} of {{ $maxPage }}</div>
            <button wire:click="$set('page', {{ min($maxPage, $page + 1) }})" class="px-3 py-1 border rounded {{ $page >= $maxPage ? 'opacity-50 cursor-not-allowed' : '' }}" @disabled($page >= $maxPage)>Next</button>
        </div>
    </section>
</div>