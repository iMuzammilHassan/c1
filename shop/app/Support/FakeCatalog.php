<?php

namespace App\Support;

class FakeCatalog
{
    public static function categories(): array
    {
        return [
            ['slug' => 'new-arrivals', 'name' => 'New Arrivals', 'image' => 'https://picsum.photos/seed/cat1/600/400'],
            ['slug' => 'men', 'name' => 'Men', 'image' => 'https://picsum.photos/seed/cat2/600/400'],
            ['slug' => 'women', 'name' => 'Women', 'image' => 'https://picsum.photos/seed/cat3/600/400'],
            ['slug' => 'kids', 'name' => 'Kids', 'image' => 'https://picsum.photos/seed/cat4/600/400'],
            ['slug' => 'accessories', 'name' => 'Accessories', 'image' => 'https://picsum.photos/seed/cat5/600/400'],
            ['slug' => 'home', 'name' => 'Home', 'image' => 'https://picsum.photos/seed/cat6/600/400'],
            ['slug' => 'sale', 'name' => 'Sale', 'image' => 'https://picsum.photos/seed/cat7/600/400'],
        ];
    }

    public static function products(): array
    {
        $products = [];
        $categories = ['men', 'women', 'kids', 'accessories', 'home'];
        for ($i = 1; $i <= 32; $i++) {
            $category = $categories[$i % count($categories)];
            $products[] = [
                'id' => $i,
                'slug' => 'product-' . $i,
                'title' => 'Product ' . $i,
                'price' => (float) (rand(1999, 9999) / 100),
                'category' => $category,
                'image' => 'https://picsum.photos/seed/p' . $i . '/600/600',
                'images' => [
                    'https://picsum.photos/seed/p' . $i . 'a/800/800',
                    'https://picsum.photos/seed/p' . $i . 'b/800/800',
                    'https://picsum.photos/seed/p' . $i . 'c/800/800',
                ],
                'description' => 'This is a sample description for Product ' . $i . '.',
                'featured' => $i <= 8,
            ];
        }
        return $products;
    }

    public static function findProductBySlug(string $slug): ?array
    {
        foreach (self::products() as $product) {
            if ($product['slug'] === $slug) {
                return $product;
            }
        }
        return null;
    }
}