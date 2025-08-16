<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Orders extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        $orders = [
            ['id' => 1001, 'customer' => 'Jane Doe', 'total' => 129.99, 'status' => 'Shipped'],
            ['id' => 1002, 'customer' => 'John Smith', 'total' => 59.49, 'status' => 'Processing'],
        ];
        return view('livewire.admin.orders', compact('orders'))->title('Admin • Orders');
    }
}