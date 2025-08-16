<div class="space-y-12">
    <section class="relative overflow-hidden rounded-xl bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white">
        <div class="px-8 py-20 md:px-12">
            <h1 class="text-4xl md:text-5xl font-bold">Discover your style</h1>
            <p class="mt-4 text-lg md:text-xl text-white/90">Fresh arrivals, curated picks, and exclusive deals.</p>
            <a href="{{ route('shop.index') }}" class="mt-8 inline-block bg-white text-gray-900 px-6 py-3 rounded-lg font-medium hover:bg-white/90">Shop now</a>
        </div>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-4">Shop by category</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-7 gap-4">
            @foreach ($categories as $category)
                <a href="{{ route('shop.index', ['category' => $category['slug']]) }}" class="group rounded-lg overflow-hidden bg-white shadow hover:shadow-md transition">
                    <img src="{{ $category['image'] }}" alt="{{ $category['name'] }}" class="h-28 w-full object-cover">
                    <div class="p-3 text-center text-sm font-medium">{{ $category['name'] }}</div>
                </a>
            @endforeach
        </div>
    </section>

    <section>
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-xl font-semibold">Featured products</h2>
            <a href="{{ route('shop.index') }}" class="text-sm text-indigo-600 hover:text-indigo-700">View all</a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($featured as $product)
                <a href="{{ route('product.show', $product['slug']) }}" class="group bg-white rounded-lg shadow hover:shadow-md transition overflow-hidden">
                    <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}" class="h-56 w-full object-cover">
                    <div class="p-4">
                        <div class="font-medium">{{ $product['title'] }}</div>
                        <div class="mt-1 text-indigo-600 font-semibold">${{ number_format($product['price'], 2) }}</div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
</div>