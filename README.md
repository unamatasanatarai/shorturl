in laravel, add provider in `config/app.php`:

`'Unamatasanatarai\ShortURL\ShortURLServiceProvider'`

`php artisan vendor:publish`

`\Unamatasanatarai\ShortURL\ShortURL::makeHash('http://...');`

`header('Location:' . \Unamatasanatarai\ShortURL\ShortURL::hit($hash));`