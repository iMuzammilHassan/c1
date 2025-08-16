# Shop Front-end (Blade + Livewire)

This directory contains Blade views and Livewire components for a shop front-end. Copy these into a Laravel 11 app with Livewire 3 installed.

## Requirements
- PHP 8.2+
- Laravel 11
- Livewire 3 (`composer require livewire/livewire`)
- Tailwind CSS (CDN or Vite)

## Quick Start (existing Laravel app)
1. Install Livewire:
   - `composer require livewire/livewire`
2. Copy the contents of `app/`, `resources/`, `routes/`, and `database/` into your Laravel app (merge folders).
3. Ensure `resources/views/layouts/app.blade.php` is your main layout or adjust the layout path in views.
4. Run migrations:
   - `php artisan migrate`
5. Seed sample data (optional):
   - `php artisan db:seed --class=DatabaseSeeder`
6. Serve the app:
   - `php artisan serve`

## Routes
- `/` Home: hero banner, 7 shop cards, featured products
- `/shop` Shop listing with filters + pagination
- `/product/{slug}` Product detail with gallery, add to cart
- `/cart` Cart page
- `/checkout` Checkout page
- `/order/success` Order success
- `/account/orders` Account orders (auth)
- `/account/addresses` Account addresses (auth)
- `/admin/products` Admin products (basic)
- `/admin/orders` Admin orders (basic)

If you already have auth, wrap account routes with `auth` middleware as needed.