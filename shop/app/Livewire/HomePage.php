<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Support\FakeCatalog;

class HomePage extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        $categories = FakeCatalog::categories();
        $featured = array_values(array_filter(FakeCatalog::products(), fn ($p) => $p['featured']));
        return view('livewire.home-page', [
            'categories' => $categories,
            'featured' => $featured,
        ])->title('Home');
    }
}