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
        // remember to run `php artisan vendor:publish`
        $this->publishes([
            realpath(__DIR__ . '/migrations') => $this->app->databasePath() . '/migrations',
        ]);
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
