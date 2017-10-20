<?php

/*
|--------------------------------------------------------------------------
| LaravelWPAdminYouTried Routes
|--------------------------------------------------------------------------
|
*/

foreach (config('wp-admin-you-tried.login-endpoints') as $endpoint) {
    Route::get($endpoint, function () {
        return view('gdejong::index');
    });

    if (config('wp-admin-you-tried.action') === 'redirect') {
        Route::post($endpoint, function () {
            return redirect()->to(config('wp-admin-you-tried.redirect_url'));
        });
    }
}
