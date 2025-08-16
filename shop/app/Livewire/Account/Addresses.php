<?php

namespace App\Livewire\Account;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Addresses extends Component
{
    public array $addresses = [
        ['name' => 'Home', 'line1' => '123 Main St', 'city' => 'Springfield', 'country' => 'USA'],
        ['name' => 'Office', 'line1' => '456 5th Ave', 'city' => 'Metropolis', 'country' => 'USA'],
    ];

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.account.addresses')->title('My Addresses');
    }
}