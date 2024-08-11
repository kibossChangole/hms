<?php
session_start();

require __DIR__ . "/vendor/autoload.php";

$stripe_secret_key = "sk_test_51Pm2m9RoW3qRYsPcAVddt3Ter7r1zNy68Fp4PrRZG0zpsKASsdjDlVI5NzoRJ6dszkYDRj4xjL4iEov6Z5iXslyb00GwdxsW4a";

\Stripe\Stripe::setApiKey($stripe_secret_key);

$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/hms/success.php",
    "cancel_url" => "http://localhost/hms/index.php",
    "locale" => "auto",
    "line_items" => [
        [
            "quantity" => 1,
            "price_data" => [
                "currency" => "usd",
                "unit_amount" => 20000,
                "product_data" => [
                    "name" => "The Hotel Suite"
                ]
            ]
        ],
        [
            "quantity" => 2,
            "price_data" => [
                "currency" => "usd",
                "unit_amount" => 2000,
                "product_data" => [
                    "name" => "Service Fee"
                ]
            ]
        ]
    ]
]);

http_response_code(303);
header("Location: " . $checkout_session->url);
