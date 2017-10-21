# LaravelWPAdminYouTried

Quick Laravel package to give something back to all the automated web scrapers trying to access `/wp-admin`.

## Install

Via Composer

``` bash
$ composer require gdejong/laravel-wp-admin-you-tried:dev-master
```

Add Service Provider to `config\app.php`
``` bash
\gdejong\LaravelWPAdminYouTried\LaravelWPAdminYouTriedServiceProvider::class,
```

Publish vendor files
``` bash
$ php artisan vendor:publish
```

## Contributing

Via Pull Requests.


## License

The Unlicense. Please see [License File](LICENSE.md) for more information.
