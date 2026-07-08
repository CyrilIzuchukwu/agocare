<?php

return [
    'api_key' => env('FORGELAYER_API_KEY'),
    'base_url' => env('FORGELAYER_BASE_URL', 'https://api.forgelayer.io'),
    'webhook_secret' => env('FORGELAYER_WEBHOOK_SECRET'),
    'live' => env('FORGELAYER_LIVE', false),
];

