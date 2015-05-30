<?php namespace Unamatasanatarai\ShortURL;

use Illuminate\Support\ServiceProvider;

class ShortURLServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/ShortURL.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
