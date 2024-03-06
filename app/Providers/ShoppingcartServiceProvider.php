<?php

namespace App\Providers;

use Illuminate\Auth\Events\Logout;
use Illuminate\Session\SessionManager;
use Illuminate\Support\ServiceProvider;


class ShoppingcartServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('cart', 'App\Shoppingcart\Cart');

        $config = __DIR__ . '/../../config/cart.php';
        $this->mergeConfigFrom($config, 'cart');
        $this->publishes([__DIR__ . '/../../config/cart.php' => config_path('cart.php')], 'config');
        $this->app['events']->listen(Logout::class, function () {
            if ($this->app['config']->get('cart.destroy_on_logout')) {
                $this->app->make(SessionManager::class)->forget('cart');
            }
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
