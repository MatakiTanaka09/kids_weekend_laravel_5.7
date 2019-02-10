<?php
    return [
        'url' => env('FRONTEND_URL', 'http://localhost:8888'),
        'reset_pass_url' => env('RESET_PASS_URL', '/reset?queryURL='),
        'email_verify_url' => env('FRONTEND_EMAIL_VERIFY_URL', '/verify?queryURL='),
    ];
