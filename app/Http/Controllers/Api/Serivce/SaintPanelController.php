<?php

namespace App\Http\Controllers\Api\Serivce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaintPanelController extends Controller
{
    public $api_url = 'https://saintpanel.com/api/v2';

    /** Your API key */
    public $apiToken = '';

    
    /** Add order */
    public function order($data)
    {
        $post = array_merge(['key' => $this->apiToken, 'action' => 'add'], $data);
        return json_decode($this->connect($post), true);
    }

    /** Get order status  */
    public function status($order_id)
    {
        return json_decode(
            $this->connect([
                'key' => $this->apiToken,
                'action' => 'status',
                'order' => $order_id
            ]),
            true
        );
    }

    /** Get orders status */
    public function multiStatus($order_ids)
    {
        return json_decode(
            $this->connect([
                'key' => $this->apiToken,
                'action' => 'status',
                'orders' => implode(",", (array)$order_ids)
            ]),
            true
        );
    }

    /** Get services */
    public function services()
    {
        return json_decode(
            $this->connect([
                'key' => $this->apiToken,
                'action' => 'services',
            ])
        );
    }

    /** Refill order */
    public function refill(int $orderId)
    {
        return json_decode(
            $this->connect([
                'key' => $this->apiToken,
                'order' => $orderId,
            ]),
            true
        );
    }

    /** Refill orders */
    public function multiRefill(array $orderIds)
    {
        return json_decode(
            $this->connect([
                'key' => $this->apiToken,
                'orders' => implode(',', $orderIds),
            ]),
            true
    );
    }

    /** Get refill status */
    public function refillStatus(int $refillId)
    {
        return json_decode(
            $this->connect([
                'key' => $this->apiToken,
                'refill' => $refillId,
            ]),
            true
        );
    }

    /** Get refill statuses */
    public function multiRefillStatus(array $refillIds)
    {
        return json_decode(
            $this->connect([
                'key' => $this->apiToken,
                'refills' => implode(',', $refillIds),
            ]),
            true
        );
    }

    /** Get balance */
    public function balance()
    {
        return json_decode(
            $this->connect([
                'key' => $this->apiToken,
                'action' => 'balance',
            ]),
            true
        );
    }

    private function connect($post)
    {
        $_post = [];
        if (is_array($post)) {
            foreach ($post as $name => $value) {
                $_post[] = $name . '=' . urlencode($value);
            }
        }

        $ch = curl_init($this->api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        if (is_array($post)) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, join('&', $_post));
        }
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');
        $result = curl_exec($ch);
        if (curl_errno($ch) != 0 && empty($result)) {
            $result = false;
        }
        curl_close($ch);
        return $result;
    }
}