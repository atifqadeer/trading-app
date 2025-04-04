<?php

declare(strict_types=1);

use Auth0\SDK\Configuration\SdkConfiguration;

return [
    'registerGuards' => true,
    'registerMiddleware' => true,
    'registerAuthenticationRoutes' => true,

    'configuration' => [
        'strategy' => SdkConfiguration::STRATEGY_REGULAR,
        'domain' => env('AUTH0_DOMAIN'),
        'clientId' => env('AUTH0_CLIENT_ID'),
        'clientSecret' => env('AUTH0_CLIENT_SECRET'),
        'cookieSecret' => env('APP_KEY'),
        'audience' => [env('AUTH0_AUDIENCE')],
        'scope' => ['openid', 'profile', 'email'],
        'redirectUri' => env('APP_URL') . '/callback',
        'usePkce' => true,
    ],

    'guards' => [
        'web' => [
            'configuration' => 'default',
        ],
        'api' => [
            'strategy' => SdkConfiguration::STRATEGY_API,
        ],
    ],
];