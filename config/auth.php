<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],
        'tbl_sellers' => [
            'driver' => 'session',
            'provider' => 'tbl_sellers',
        ],
        'tbl_sellers-api' => [
            'driver' => 'token',
            'provider' => 'tbl_sellers',
        ],
        'table_admin' => [
            'driver' => 'session',
            'provider' => 'table_admin',
        ],
        'table_admin-api' => [
            'driver' => 'token',
            'provider' => 'table_admin',
        ],
        'tbl_customer_users' => [
            'driver' => 'session',
            'provider' => 'tbl_customer_users',
        ],
        'tbl_customer_users-api' => [
            'driver' => 'token',
            'provider' => 'tbl_customer_users',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        'tbl_sellers' => [
            'driver' => 'eloquent',
            'model' => App\Models\Seller::class,
        ],
        'table_admin' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class,
        ],
        'tbl_customer_users' => [
            'driver' => 'eloquent',
            'model' => App\Models\CustomerUser::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'tbl_sellers' => [
            'provider' => 'tbl_sellers',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'table_admin' => [
            'provider' => 'table_admin',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'tbl_customer_users' => [
            'provider' => 'tbl_customer_users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];
