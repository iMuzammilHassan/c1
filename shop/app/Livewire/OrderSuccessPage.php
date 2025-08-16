<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class OrderSuccessPage extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.order-success-page')->title('Order placed');
    }
}