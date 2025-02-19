<?php

return [

    'merchant_id' => env('ZARINPAL_MERCHANT_ID', '00000000-0000-0000-0000-000000000000'),

    // IRR for Rial or IRT for Toman
    'currency' => env('ZARINPAL_CURRENCY', 'IRT'),

    // true for sandbox and false for production
    'sandbox' => env('ZARINPAL_SANDBOX', false),
];
