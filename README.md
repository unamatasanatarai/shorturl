in laravel `config/app.php` providers add:

`'Unamatasanatarai\ShortURL\ShortURLServiceProvider'`

then run:

`php artisan vendor:publish`

then use:

`\Unamatasanatarai\ShortURL\ShortURL::makeHash('http://...');`

`header('Location:' . \Unamatasanatarai\ShortURL\ShortURL::hit($hash));`