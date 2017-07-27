<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('pk_test_OLLIrBWLyXFHRK97jaLjyTR3'),
        'secret' => env('sk_test_IUTIfgb2MdyKnWJLFquVfVCJ'),
    ],

    'facebook' => [
        'client_id' => '500013280340412',
        'client_secret' => '89c82d4b5ae3a34346339bdf413e4700',
        'redirect' => 'http://liinkart.app/login/facebook/callback',
    ],

    'twitter' => [
        'client_id' => 'OOZrinWCQiehDdS9rbIJ35U7U',
        'client_secret' => 'yX0XbWBNO66xfcwK5gb17tQj5b1y2AFBanHnReD2ojqZvlYTpp',
        'redirect' => 'http://liinkart.app/login/twitter/callback',
    ],

    'google' => [
        'client_id' => '488906779477-mu1iu1kipq783lh48scrgld32sqs1bb0.apps.googleusercontent.com',
        'client_secret' => 'DLdCc_rYmAM2cgQ_WhZX0sHe',
        'redirect' => 'http://liinkart.app/login/google/callback',
    ],

];
