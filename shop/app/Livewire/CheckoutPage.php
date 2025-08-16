<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Support\Cart;

class CheckoutPage extends Component
{
    public string $name = '';
    public string $email = '';
    public string $address = '';

    public function placeOrder(): \Symfony\Component\HttpFoundation\Response
    {
        // In a real app, validate, create Order, charge, etc.
        Cart::clear();
        return redirect()->route('order.success');
    }

    #[Layout('layouts.app')]
    public function render()
    {
        $totals = Cart::totals();
        return view('livewire.checkout-page', [
            'totals' => $totals,
        ])->title('Checkout');
    }
}