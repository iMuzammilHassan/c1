<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Support\FakeCatalog;
use App\Support\Cart;

class ProductDetail extends Component
{
    public string $slug;
    public int $quantity = 1;

    public function mount(string $slug): void
    {
        $this->slug = $slug;
    }

    public function addToCart(): void
    {
        $product = FakeCatalog::findProductBySlug($this->slug);
        if ($product) {
            Cart::add($product, max(1, (int)$this->quantity));
            session()->flash('message', 'Added to cart');
            $this->dispatch('cart-updated');
        }
    }

    #[Layout('layouts.app')]
    public function render()
    {
        $product = FakeCatalog::findProductBySlug($this->slug);
        abort_if(!$product, 404);

        return view('livewire.product-detail', [
            'product' => $product,
        ])->title($product['title']);
    }
}