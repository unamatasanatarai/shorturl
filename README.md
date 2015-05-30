`php artisan vendor:publish`

`\Unamatasanatarai\ShortURL\ShortURL::makeHash('http://...');`

`header('Location:' . \Unamatasanatarai\ShortURL\ShortURL::hit($hash));`