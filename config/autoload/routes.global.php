<?php

return [
    'routes' => [
        [
            'name' => 'home',
            'path' => '/',
            'middleware' => Fm\App\Action\HomePageAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'api.ping',
            'path' => '/api/ping',
            'middleware' => Fm\Api\Action\PingAction::class,
            'allowed_methods' => ['GET'],
        ],
    ],
];
