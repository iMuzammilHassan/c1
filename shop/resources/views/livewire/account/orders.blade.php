<div class="space-y-6">
    <h1 class="text-xl font-semibold">My Orders</h1>
    <div class="bg-white rounded-lg shadow divide-y">
        @forelse($orders as $order)
            <div class="p-4 flex items-center justify-between">
                <div>
                    <div class="font-medium">Order #{{ $order['id'] }}</div>
                    <div class="text-sm text-gray-500">{{ $order['date'] }}</div>
                </div>
                <div class="flex items-center gap-6">
                    <div class="text-sm">${{ number_format($order['total'], 2) }}</div>
                    <span class="text-xs px-2 py-1 rounded bg-gray-100">{{ $order['status'] }}</span>
                </div>
            </div>
        @empty
            <div class="p-6 text-gray-500">No orders yet.</div>
        @endforelse
    </div>
</div>