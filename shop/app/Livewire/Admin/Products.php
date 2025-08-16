<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Support\FakeCatalog;

class Products extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        $products = FakeCatalog::products();
        return view('livewire.admin.products', compact('products'))->title('Admin • Products');
    }
}