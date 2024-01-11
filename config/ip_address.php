<?php

return [
    /*
    |--------------------------------------------------------------------------
    | IpAddress On Authentication
    |--------------------------------------------------------------------------
    |
    | The proxy verification should be enabled on authentication routes? (Used by Jetstream Plus)
    |
    */
    'on_auth' => env('IP_ADDRESS_ON_AUTH', false),

    /*
    |--------------------------------------------------------------------------
    | IpAddress Driver Name
    |--------------------------------------------------------------------------
    |
    | IPInfo driver service name.
    |
    */
    'driver' => env('IP_ADDRESS_DRIVER'),

    /*
    |--------------------------------------------------------------------------
    | IpAddress Authentication Key
    |--------------------------------------------------------------------------
    |
    | IPInfo generated private key.
    |
    */
    'key' => env('IP_ADDRESS_DRIVER_KEY'),

    /*
    |--------------------------------------------------------------------------
    | IpAddress Cache Duration
    |--------------------------------------------------------------------------
    |
    | IPInfo cache duration until it get re-validated (in minutes).
    |
    */
    'cache_duration' => env('IP_ADDRESS_CACHE_DURATION', 60 * 24),
];
