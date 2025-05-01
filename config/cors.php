<?php
return [
    'supports_credentials' => false,

    'allowed_origins' => [
        'http://localhost:8081', // Your frontend URL
        'http://192.168.1.128:8081', // Your frontend machine IP (replace with actual IP)
    ],

    'allowed_headers' => [
        'Content-Type',
        'X-Requested-With',
        'Authorization',
    ],

    'allowed_methods' => [
        'GET', 'POST', 'PUT', 'DELETE', 'OPTIONS',
    ],

    'exposed_headers' => [],
    'max_age' => 0,
    'hosts' => [],
];