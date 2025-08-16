<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\CategoryListing;
use App\Livewire\ProductDetail;
use App\Livewire\CartPage;
use App\Livewire\CheckoutPage;
use App\Livewire\OrderSuccessPage;
use App\Livewire\Account\Orders as AccountOrders;
use App\Livewire\Account\Addresses as AccountAddresses;
use App\Livewire\Admin\Products as AdminProducts;
use App\Livewire\Admin\Orders as AdminOrders;

Route::get('/', HomePage::class)->name('home');
Route::get('/shop', CategoryListing::class)->name('shop.index');
Route::get('/product/{slug}', ProductDetail::class)->name('product.show');

Route::get('/cart', CartPage::class)->name('cart.index');
Route::get('/checkout', CheckoutPage::class)->name('checkout.index');
Route::get('/order/success', OrderSuccessPage::class)->name('order.success');

Route::middleware(['auth'])->group(function () {
    Route::get('/account/orders', AccountOrders::class)->name('account.orders');
    Route::get('/account/addresses', AccountAddresses::class)->name('account.addresses');
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/products', AdminProducts::class)->name('products');
    Route::get('/orders', AdminOrders::class)->name('orders');
});