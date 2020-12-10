<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' => '493936738538-tggbb4gu2ge1sqtuh2klh7aph48hf7hn.apps.googleusercontent.com',
        'client_secret' => '-0X0DNP-SAmqDAUFLKtrW_XZ',
        'redirect' => 'http://localhost/multiauth-master/callback/google',
    ],
    'facebook' => [
        'client_id' => '2359594734340210',
        'client_secret' => 'd42f5f011f7813bbd121942ba2da9e74',
        'redirect' => 'http://localhost/multiauth-master/callback/facebook',
    ],

];
