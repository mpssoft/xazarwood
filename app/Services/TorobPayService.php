<?php

namespace App\Services;

use http\Message\Body;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use RuntimeException;
use Illuminate\Http\Client\PendingRequest;
class TorobPayService
{
    protected string $baseUrl;

    public function __construct()
    {
        $this->baseUrl = config('torobpay.base_url');
    }

    /**
     * Get and cache TorobPay JWT access token.
     */
    public function getAccessToken(): string
    {
        return Cache::remember(
            'torobpay_access_token',
            now()->addMinutes(55),
            function () {
                $response = Http::baseUrl($this->baseUrl)
                    ->withBasicAuth(
                        config('torobpay.client_id'),
                        config('torobpay.client_secret')
                    )
                    ->acceptJson()
                    ->timeout(30)
                    ->post('/api/online/v1/oauth/token', [
                        'username' => config('torobpay.username'),
                        'password' => config('torobpay.password'),
                    ]);

                if (!$response->successful()) {
                    throw new RuntimeException(
                        'TorobPay authentication failed: ' .
                        $response->body()
                    );
                }

                $token = $response->json('access_token');

                if (empty($token)) {
                    throw new RuntimeException(
                        'TorobPay authentication response did not contain an access token.'
                    );
                }

                return $token;
            }
        );
    }

    /**
     * Create an authenticated TorobPay API request.
     */
    protected function api(): PendingRequest
    {
        return Http::baseUrl($this->baseUrl)
            ->withToken($this->getAccessToken())
            ->acceptJson()
            ->asJson()
            ->timeout(30);
    }

    /**
     * Create a TorobPay payment token.
     */
    public function createPaymentToken(array $payload): array
    {
        $response = $this->api()->post(
            '/api/online/payment/v1/token',
            $payload
        );

        if (
            !$response->successful() ||
            !$response->json('successful')
        ) {
            $message = $response->json('error.user_message')
                ?: $response->json('error.message')
                    ?: 'TorobPay payment token creation failed.';

            throw new RuntimeException($message);
        }

        $data = $response->json('response');

        if (
            empty($data['paymentToken']) ||
            empty($data['paymentPageUrl'])
        ) {
            throw new RuntimeException(
                'Invalid response from TorobPay.'
            );
        }

        return $data;
    }
    /**
     * Build customer address data for TorobPay.
     */
    public function buildAddressPayload($address): array
    {
        return [
            'address' => $address->address,
            'postalCode' => $address->postal_code,
            'customer_full_name' => trim(
                $address->name . ' ' . $address->family
            ),
            'city' => $address->city->name,
            'province' => $address->province->name,
            'registration_phone_number' => $address->mobile,
        ];
    }
    /**
     * Build cart items payload for TorobPay.
     */
    public function buildCartItemsPayload($order): array
    {
        return $order->items->map(function ($orderItem) {
            $product = $orderItem->item;

            if (!$product) {
                throw new RuntimeException(
                    "Product not found for order item ID: {$orderItem->id}"
                );
            }

            return [
                'id' => (string) $product->id,
                'amount' => (int) ($orderItem->price * 10),
                'category' => (string) ($product->category->name ?? 'general'),
                'count' => (int) $orderItem->quantity,
                'name' => (string) $product->name,
            ];
        })->values()->all();
    }
    /**
     * Create a TorobPay payment for an order.
     */
    public function createOrderPayment($totalPrice, $order, $address, string $transactionId): array    {
        $amountInRials = (int) ($totalPrice * 10 );

        if ($amountInRials < 200000 || $amountInRials > 1000000000) {
            throw new RuntimeException(
                'Order amount is outside TorobPay allowed limits.'
            );
        }

        $payload = array_merge(
            $this->buildAddressPayload($address),
            [
                'paymentMethodTypeDto' => 'ONLINE_CREDIT',
                'amount' => $amountInRials,
                'transactionId' => $transactionId,
                'returnURL' => route('payment.torobpay.callback'),
                'cartList' => [
                    [
                        'cartId' => (string) $order->id,
                        'totalAmount' => $amountInRials,
                        'isTaxIncluded' => true,
                        'isShipmentIncluded' => true,
                        'cartItems' => $this->buildCartItemsPayload($order),
                    ],
                ],
            ]
        );

        return $this->createPaymentToken($payload);
    }
    /**
     * Verify a TorobPay payment.
     */
    public function verifyPayment(string $paymentToken): array
    {
        $response = $this->api()->post(
            '/api/online/payment/v1/verify',
            [
                'paymentToken' => $paymentToken,
            ]
        );

        if (
            !$response->successful() ||
            !$response->json('successful')
        ) {
            $message = $response->json('error.user_message')
                ?: $response->json('error.message')
                    ?: 'TorobPay payment verification failed.';

            throw new RuntimeException($message);
        }

        return $response->json('response', []);
    }

    /**
     * Settle a verified TorobPay payment.
     */
    public function settlePayment(string $paymentToken): array
    {
        $response = $this->api()->post(
            '/api/online/payment/v1/settle',
            [
                'paymentToken' => $paymentToken,
            ]
        );

        if (
            !$response->successful() ||
            !$response->json('successful')
        ) {
            $message = $response->json('error.user_message')
                ?: $response->json('error.message')
                    ?: 'TorobPay payment settlement failed.';

            throw new RuntimeException($message);
        }

        return $response->json('response', []);
    }
    public function getPaymentStatus(string $paymentToken): array
    {
        $response = $this->api()->get(
            '/api/online/payment/v1/status',
            [
                'paymentToken' => $paymentToken,
            ]
        );

        if (
            !$response->successful() ||
            !$response->json('successful')
        ) {
            $message = $response->json('error.user_message')
                ?: $response->json('error.message')
                    ?: 'TorobPay payment status request failed.';

            throw new RuntimeException($message);
        }

        return $response->json('response', []);
    }
}
