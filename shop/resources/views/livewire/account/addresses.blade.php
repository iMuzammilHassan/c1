<div class="space-y-6">
    <h1 class="text-xl font-semibold">My Addresses</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @foreach($addresses as $addr)
            <div class="bg-white rounded-lg shadow p-4">
                <div class="font-medium">{{ $addr['name'] }}</div>
                <div class="text-sm text-gray-600">{{ $addr['line1'] }}</div>
                <div class="text-sm text-gray-600">{{ $addr['city'] }}, {{ $addr['country'] }}</div>
                <div class="mt-3 text-sm text-indigo-600">Edit</div>
            </div>
        @endforeach
    </div>
</div>