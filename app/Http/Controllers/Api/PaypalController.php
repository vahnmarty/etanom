<?php

namespace App\Http\Controllers\Api;

use Str;
use Http;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaypalController extends Controller
{

    public $url = '';
    public $client_id, $client_secret;

    public function __construct()
    {
        $this->client_id = config('services.paypal.client_id');
        $this->client_secret = config('services.paypal.client_secret');
    }

    public function createToken()
    {
        $url = 'https://api-m.sandbox.paypal.com/v1/oauth2/token';

        $response = Http::asForm()
            ->withBasicAuth($this->client_id, $this->client_secret)
            ->post($url, [
                'grant_type' => 'client_credentials'
            ]);

        return $response;

    }

    private function getAccessToken()
    {
        $access_token = session('paypal.access_token');

        if(empty($access_token)){
            $token = $this->createToken();
            $access_token = $token['access_token'];

            session()->put('paypal.access_token', $access_token);
        }

        return $access_token;
    }

    public function createOrder($code)
    {
        $order = Order::whereCode($code)->firstOrFail();
        
        $access_token = $this->getAccessToken();

        $return_url = route('inventory.index');
        $cancel_url = route('order.checkout', $code);

        $url = 'https://api-m.sandbox.paypal.com/v2/checkout/orders';

        $headers = [
            'Content-Type' => 'application/json',
            'PayPal-Request-Id' => '7b92603e-77ed-4896-8e78-5dea2050476a',
            'Authorization' => 'Bearer ' . $access_token,
        ];

        $data = [
            'intent' => 'CAPTURE',
            'purchase_units' => [
                [
                    'reference_id' => 'd9f80740-38f0-11e8-b467-0ed5f89f718b',
                    'amount' => [
                        'currency_code' => 'USD',
                        'value' => $order->amount,
                    ],
                ],
            ],
            'payment_source' => [
                'paypal' => [
                    'experience_context' => [
                        "payment_method_preference" => "IMMEDIATE_PAYMENT_REQUIRED",
                        "brand_name" => "ETANOM",
                        "locale" => "en-US",
                        "landing_page" => "LOGIN",
                        "shipping_preference" => "NO_SHIPPING",
                        "user_action" => "PAY_NOW",
                        'return_url' => $return_url,
                        'cancel_url' => $cancel_url,
                    ],
                ],
            ],
        ];

        $response = Http::withHeaders($headers)->post($url, $data);

        // You can access the response as needed
        $statusCode = $response->status();
        $responseData = $response->json();

        return $responseData;
    }

    public function capture($orderID)
    {
        $access_token = $this->getAccessToken();

        $url = 'https://api-m.sandbox.paypal.com/v2/checkout/orders/' . $orderID . '/capture';

        $headers = [
            'PayPal-Request-Id: 7b92603e-77ed-4896-8e78-5dea2050476a',
            'Authorization: Bearer ' . $access_token,
            'Content-Type: application/json',
        ];

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'cURL error: ' . curl_error($ch);
        }

        curl_close($ch);

        return $response;

    }

}
