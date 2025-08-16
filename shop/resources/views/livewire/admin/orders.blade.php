@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <h1 class="text-xl font-semibold">Orders</h1>
    <div class="bg-white rounded-lg shadow overflow-x-auto">
        <table class="min-w-full text-sm">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-2 text-left">Order #</th>
                    <th class="px-4 py-2 text-left">Customer</th>
                    <th class="px-4 py-2 text-left">Total</th>
                    <th class="px-4 py-2 text-left">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y">
            @foreach($orders as $o)
                <tr>
                    <td class="px-4 py-2">{{ $o['id'] }}</td>
                    <td class="px-4 py-2">{{ $o['customer'] }}</td>
                    <td class="px-4 py-2">${{ number_format($o['total'], 2) }}</td>
                    <td class="px-4 py-2">{{ $o['status'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection