# LaravelWPAdminYouTried

Quick Laravel package to give something back to all the automated web scrapers trying to access `/wp-admin`.

What it does: present you with a WordPress login screen. After submitting the login form the user will be redirected to another URL.

Configuration options:
- `login-endpoints` an array containing the endpoints to mock.
- `action` what to do after submitting the form, currently only supports `redirect`
- `redirect_url` where to redirect the user to after submitting the login form
- `redirect_sleep` how many seconds to wait before redirecting

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

Edit config to your liking
``` bash
config/wp-admin-you-tried.php
```

## Contributing

Via Pull Requests.


## License

The Unlicense. Please see [License File](LICENSE) for more information.
