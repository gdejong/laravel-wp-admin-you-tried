<?php

return [
    /**
     * All the routes you want to 'mock'
     */
    'login-endpoints' => [
        '/wp-admin',
        // '/login',
        // '/administrator',
    ],

    /**
     * Supported options:
     *      redirect
     */
    'action' => 'redirect',

    /**
     * If `action` is set to `redirect` the user will be redirected
     * to this URL after submitting the form. Fully qualified URL.
     * I am not linked to this example, I just found it funny.
     */
    'redirect_url' => 'http://endless.horse/'
];
