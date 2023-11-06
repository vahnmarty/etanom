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
        'scheme' => 'https',
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
        'enable' => env('GOOGLE_ENABLE', false),
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => env('GOOGLE_REDIRECT_URI') 
    ],

    'facebook' => [ 
        'enable' => env('FACEBOOK_ENABLE', false),   
        'client_id' => env('FACEBOOK_CLIENT_ID'),  
        'client_secret' => env('FACEBOOK_CLIENT_SECRET'),  
        'redirect' => env('FACEBOOK_REDIRECT_URI') 
    ],

    'twitter' => [
        'enable' => env('TWITTER_ENABLE', false),   
        'client_id' => env('TWITTER_CLIENT_ID'),  
        'client_secret' => env('TWITTER_CLIENT_SECRET'),  
        'redirect' => env('TWITTER_REDIRECT_URI') 
    ],

    'stripe' => [
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET')
    ],

    'paypal' => [
        'client_id' => env('PAYPAL_CLIENT_ID', 'AWEBvpJ3GW_-fkykjNMoerxNWCh6bsIcRH6XOgiXEZJfQr0z0PDyrxkg5gan8StM7J87js1x0I4tn1qY'),
        'client_secret' => env('PAYPAL_CLIENT_SECRET', 'EBu-3pI9xYQV-5cq4i7d3WSM0otWWGDzDiuO8ReQoaGm5eWg2oZWGCyH_D6vOY_eI1PicWOkyt_XTb8G')
    ]

];
