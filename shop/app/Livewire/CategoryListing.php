<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;
use App\Support\FakeCatalog;

class CategoryListing extends Component
{
    use WithPagination;

    #[Url]
    public string $q = '';

    #[Url]
    public string $category = '';

    #[Url]
    public string $sort = 'popular';

    #[Url]
    public int $page = 1;

    #[Layout('layouts.app')]
    public function render()
    {
        $products = FakeCatalog::products();

        if ($this->q !== '') {
            $products = array_values(array_filter($products, function ($p) {
                return str_contains(strtolower($p['title']), strtolower($this->q));
            }));
        }

        if ($this->category !== '') {
            $products = array_values(array_filter($products, fn ($p) => $p['category'] === $this->category));
        }

        if ($this->sort === 'price-asc') {
            usort($products, fn ($a, $b) => $a['price'] <=> $b['price']);
        } elseif ($this->sort === 'price-desc') {
            usort($products, fn ($a, $b) => $b['price'] <=> $a['price']);
        }

        $perPage = 12;
        $page = max(1, (int) $this->page);
        $total = count($products);
        $items = array_slice($products, ($page - 1) * $perPage, $perPage);

        return view('livewire.category-listing', [
            'items' => $items,
            'total' => $total,
            'perPage' => $perPage,
            'page' => $page,
            'categories' => FakeCatalog::categories(),
        ])->title('Shop');
    }
}