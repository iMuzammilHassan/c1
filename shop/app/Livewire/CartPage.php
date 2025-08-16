<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Support\Cart;

class CartPage extends Component
{
    public array $items = [];

    protected $listeners = ['cart-updated' => 'refreshCart'];

    public function mount(): void
    {
        $this->refreshCart();
    }

    public function refreshCart(): void
    {
        $this->items = Cart::get();
    }

    public function increment(string $slug): void
    {
        $item = $this->items[$slug] ?? null;
        if ($item) {
            Cart::updateQuantity($slug, $item['qty'] + 1);
            $this->refreshCart();
        }
    }

    public function decrement(string $slug): void
    {
        $item = $this->items[$slug] ?? null;
        if ($item) {
            Cart::updateQuantity($slug, max(1, $item['qty'] - 1));
            $this->refreshCart();
        }
    }

    public function remove(string $slug): void
    {
        Cart::remove($slug);
        $this->refreshCart();
    }

    #[Layout('layouts.app')]
    public function render()
    {
        $totals = Cart::totals();
        return view('livewire.cart-page', [
            'items' => $this->items,
            'totals' => $totals,
        ])->title('Cart');
    }
}