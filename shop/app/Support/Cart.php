<?php

namespace App\Support;

class Cart
{
    public static function get(): array
    {
        return session()->get('cart', []);
    }

    public static function add(array $product, int $quantity = 1): void
    {
        $cart = self::get();
        $slug = $product['slug'];
        if (isset($cart[$slug])) {
            $cart[$slug]['qty'] += $quantity;
        } else {
            $cart[$slug] = [
                'slug' => $product['slug'],
                'title' => $product['title'],
                'price' => $product['price'],
                'image' => $product['image'],
                'qty' => $quantity,
            ];
        }
        session()->put('cart', $cart);
    }

    public static function updateQuantity(string $slug, int $quantity): void
    {
        $cart = self::get();
        if (isset($cart[$slug])) {
            $cart[$slug]['qty'] = max(1, $quantity);
            session()->put('cart', $cart);
        }
    }

    public static function remove(string $slug): void
    {
        $cart = self::get();
        unset($cart[$slug]);
        session()->put('cart', $cart);
    }

    public static function clear(): void
    {
        session()->forget('cart');
    }

    public static function totals(): array
    {
        $subtotal = 0.0;
        foreach (self::get() as $item) {
            $subtotal += $item['price'] * $item['qty'];
        }
        $shipping = $subtotal > 0 ? 9.99 : 0.0;
        $total = $subtotal + $shipping;
        return [
            'subtotal' => $subtotal,
            'shipping' => $shipping,
            'total' => $total,
        ];
    }
}