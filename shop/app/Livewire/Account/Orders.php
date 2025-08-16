<?php

namespace App\Livewire\Account;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Orders extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        $orders = [
            ['id' => 1001, 'date' => '2025-01-01', 'total' => 129.99, 'status' => 'Shipped'],
            ['id' => 1002, 'date' => '2025-01-08', 'total' => 59.49, 'status' => 'Processing'],
        ];
        return view('livewire.account.orders', compact('orders'))->title('My Orders');
    }
}