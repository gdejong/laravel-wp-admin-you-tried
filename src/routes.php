<?php

/*
|--------------------------------------------------------------------------
| LaravelWPAdminYouTried Routes
|--------------------------------------------------------------------------
|
*/

$loginEndpoints = config('wp-admin-you-tried.login-endpoints', []);
$action = config('wp-admin-you-tried.action', 'redirect');
$redirectURL = config('wp-admin-you-tried.redirect_url', 'http://endless.horse/');
$redirectSleep = config('wp-admin-you-tried.redirect_sleep', 0);

foreach ($loginEndpoints as $endpoint) {
    Route::get($endpoint, function () {
        return view('gdejong::index');
    });

    if ($action === 'redirect') {
        Route::post($endpoint, function () use ($redirectURL, $redirectSleep) {
            sleep($redirectSleep);
            return redirect()->to($redirectURL);
        });
    }
}
