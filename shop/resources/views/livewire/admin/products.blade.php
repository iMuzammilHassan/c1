@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <h1 class="text-xl font-semibold">Products</h1>
    <div class="bg-white rounded-lg shadow overflow-x-auto">
        <table class="min-w-full text-sm">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-2 text-left">ID</th>
                    <th class="px-4 py-2 text-left">Title</th>
                    <th class="px-4 py-2 text-left">Category</th>
                    <th class="px-4 py-2 text-left">Price</th>
                    <th class="px-4 py-2 text-left">Featured</th>
                </tr>
            </thead>
            <tbody class="divide-y">
            @foreach($products as $p)
                <tr>
                    <td class="px-4 py-2">{{ $p['id'] }}</td>
                    <td class="px-4 py-2">{{ $p['title'] }}</td>
                    <td class="px-4 py-2">{{ $p['category'] }}</td>
                    <td class="px-4 py-2">${{ number_format($p['price'], 2) }}</td>
                    <td class="px-4 py-2">{{ $p['featured'] ? 'Yes' : 'No' }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection