<?php

namespace App\Http\Controllers\Api\Serivce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrumvipController extends Controller
{
    // private $api_token;
    public $apiToken = "";
    public $path = "";
    public $server = "";
    public $data = [
        'order_link' => '',
 
        'token' => '',
        'proxy' => '',
        'cookie' => '',
        'speed_to' => '',
       
        'limit_per_day' => '',
        'user_id' => '',
        'name' => '',
        'country' => '',
        'server_order' =>'',
        'reaction' => '',
        'quantity' => '',
        'target' => '',
        'time_end' => '',
        'time_start' => '',
        'timebuy' => '',
        'limit_post' => '',
        'speed_from' => '',
      
        'black_list'   => '',
        'uids[profile]'=>  '',
        'uids[group]'=>  '',
        'uids[page]'=>  '',
        'reaction_type'   => '',
        'stories_enable'   => '',
        'story_reaction_type'   => '',
        'comment_enable'   => '',
        'content'   => '',
        'sticker'   => '',
        'images'   => '',
        'image_link'   => '',
        'image_auto_custom_text'   => '',
        'notes'   => '',
    ];

     public function __construct()
    {
        $this->apiToken = env('TOKEN_TRUMVIP');
    }
     
     
    public function CreateOrder()
    {
        $apiToken = $this->apiToken;
        $url = "https://trum.vip/api/services/";
        $uri = $url . $this->path;
        $data = $this->data; 
        $dataPost = [
            'name' => $data['order_link'] ?? '',
            'key' => $apiToken ?? '986b38a255be4ddd2789aafc0178530d',
            'token' => $data['token'] ?? '',
            'proxy' => $data['proxy'] ?? '',
            'cookie' => $data['cookie'] ?? '',
            'speed_to' => $data['speed_to'] ?? '',
            'period' => $data['timebuy'] ?? $_REQUEST['period'],
            'limit_per_day' => $data['limit_per_day'] ?? '',
            'user_id' => $data['user_id'] ?? '',
            'name' => $data['name'] ?? '',
            'country' => $data['country'] ?? $_REQUEST['country'],,
            'type' => $data['server_order'] ?? $_REQUEST['type'],
          
            'quantity' => $data['quantity'] ?? $_REQUEST['quantity'],,
            'target' => $data['target'] ?? '',
            'time_end' => $data['time_end'] ?? '',
            'time_start' => $data['time_start'] ?? '0',
            'time' => $data['timebuy'] ?? '0',
            'limit_post' => $data['limit_post'] ?? '0',
            'speed_from' => $data['speed_from'] ?? '0',
      
            'uids[profile]' => $data['uids[profile]'] ?? '0',
            'uids[group]'=> $data['uids[group]'] ?? '0',
            'uids[page]'=> $data['uids[page]'] ?? '0',
            'black_list'   => $data['black_list'] ?? '0',
            'reaction_type'   => $data['reaction_type'] ?? '0',
            'stories_enable'   => $data['stories_enable'] ?? '0',
            'story_reaction_type'   => $data['story_reaction_type'] ?? '0',
            'comment_enable'   => $data['comment_enable'] ?? '0',
            'content'   => $data['content'] ?? '0',
            'sticker'   => $data['sticker'] ?? '0',
            'images'   => $data['images'] ?? '0',
            'image_link'   => $data['image_link'] ?? '0',
            'image_auto_custom_text'   => $data['image_auto_custom_text'] ?? '0',
            'notes'   => $data['notes'] ?? $_REQUEST['notes'],,

        ];
        error_log(print_r($dataPost,true),3,'xxx.log');
         error_log(print_r($_REQUEST,true),3,'xxx.log');
        $result = $this->curl($uri, $dataPost);
        if ($result['success'] == true) {
            return $data = [
                'status' => true,
                'message' => "Đặt hàng thành công",
                'data' => $result['data'],
            ];
        } else {
            return $data = [
                'status' => false,
                'message' => $result['msg'],
            ];
        }
    }
    public function checkproxy($order_code)
    {
        $url = "https://trum.vip/api/services/proxy/list";
      

         
        $data = [
            'key' => $apiToken,
            'order_id' => $order_code,
        ];
        $result = $this->curl($url, $data);
        return $result;
    }
    public function giahanbot($order_code)
    {
        $url="https://trum.vip/api/services/bot/extend";
        $post_data = [
            'key' => $apiToken,
            'order_id' => $order_code,
            'period' => 30
        ];
        $result=$this->curl($url, $data);
        return $result;
    }

    public function curl($path, $data = [])
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $path);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result, true);
    }

   
}

