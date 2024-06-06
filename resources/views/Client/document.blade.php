@extends('Layout.App')

@section('title', 'Tài liệu Api')

@section('content')
<div class="app-wrapper" id="kt_app_wrapper">
            <div id="kt_app_toolbar_container" class="app-container container-fluid">
                

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="card card-flush">
                                    <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                            API Documentation
                                            <span class="ribbon-inner bg-default"></span>
                                        </div>
                                    </div>
                                    <div class="card-body pt-2">
                                        
                                        <h2 class="fw-bolder mb-4">Lấy Danh Sách Dịch Vụ</h2>
                                        <div class="row mb-4">
                                            <div class="col-xl-6">
                                                <h4 class="fw-bolder">Sample Code:</h4>
                                                <div class="highlight">
                                                    <button class="highlight-copy btn" data-bs-toggle="tooltip" onclick="coppy('copy')" data-bs-original-title="Copy code" data-kt-initialized="1">copy</button>
                                                    <div class="highlight-code">
<pre class="language-html" tabindex="0" id="copy" style="height:500px"><code class="language-html text-white">
<span class="token tag">
&lt;?php
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://{{ getDomain() }}/api/service/prices',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_HTTPHEADER => array(
        'Api-Token: {Api-token}'
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
;?&gt;
</span>
</code>
</pre>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <h4 class="fw-bolder">Example Response:</h4>
                                                <div class="highlight">
                                                    <div class="highlight-code">
<pre class="language-html" tabindex="0" style="height:500px"><code class="language-html text-white">
<span class="token tag">
{
  "status": "success",
  "message": "Lấy dữ liệu thành công!",
  "data": [
    {
      "id": 69,
      "name": "Tăng like bài viết (Sale)",
      "server": "1",
      "price": "7.5",
      "min": "100",
      "max": "1000000",
      "title": "Like clone nuôi, max 3m like (nên dùng ổn định)",
      "description": "Tốc độ ổn 5k/ngày, không hỗ trợ bài viết chia sẻ video, bài viết trong nhóm, bài viết hoặc video đang chạy ads.",
      "status": "Active"
    },
    {
      "id": 70,
      "name": "Tăng like bài viết (Sale)",
      "server": "2",
      "price": "10.5",
      "min": "100",
      "max": "1000000",
      "title": "Like clone nuôi, max 3m like (nên dùng ổn định)",
      "description": "Tốc độ ổn 10k/ngày, không hỗ trợ bài viết chia sẻ video, bài viết trong nhóm, bài viết hoặc video đang chạy ads.",
      "status": "Active"
    },
    {
      "id": 71,
      "name": "Tăng like bài viết (Sale)",
      "server": "3",
      "price": "9.5",
      "min": "100",
      "max": "1000000",
      "title": "Like clone nuôi, max 3m like (nên dùng ổn định)",
      "description": "Tốc độ ổn 5k/ngày, không hỗ trợ bài viết chia sẻ video, bài viết trong nhóm, bài viết hoặc video đang chạy ads",
      "status": "Active"
    },
    {
      "id": 2248,
      "name": "Tăng view tiktok",
      "server": "1",
      "price": "0",
      "min": "1000",
      "max": "999999",
      "title": "View tiktok độc quyền free",
      "description": "View tiktok độc quyền free, ngày nhận 40 đơn dưới 1m view",
      "status": "Active"
    }
  ]
}
</span>
</code>
</pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder mb-4">Lấy Thông Tin Tài Khoản</h2>
                                        <div class="row mb-4">
                                            <div class="col-xl-6">
                                                <h4 class="fw-bolder">Sample Code:</h4>
                                                <div class="highlight">
                                                    <button class="highlight-copy btn" data-bs-toggle="tooltip" onclick="coppy('codeapi')" data-bs-original-title="Copy code" data-kt-initialized="1">copy</button>
                                                    <div class="highlight-code">
<pre class="language-html" tabindex="0" id="codeapi" style="height:500px"><code class="language-html text-white">
<span class="token tag">
&lt;?php
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://{{ getDomain() }}/api/me',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_HTTPHEADER => array(
        'Api-Token: {Api-token}'
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
;?&gt;
</span>
</code>
</pre>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <h4 class="fw-bolder">Example Response:</h4>
                                                <div class="highlight">
                                                    <div class="highlight-code">
<pre class="language-html" tabindex="0" style="height:500px"><code class="language-html text-white">
<span class="token tag">
{
  "status": "success",
  "message": "Lấy dữ liệu người dùng thành công!",
  "data": {
    "id": 455591,
    "name": "Nguyễn Tấn Tài",
    "email": "tantaideptraivl@gmail.com",
    "username": "tantaideptrai",
    "balance": "3868839.87",
    "total_recharge": "5640402.2",
    "total_deduct": "1771562.33",
    "api_token": "C9V2r576CV2KRj63MUmlpcmwOcdRUDeKQGhe82m0WaOjxZc9YhtzMxf9W5YKFoebueUUBdAFmHAXGL6t",
    "level": "2",
    "status": "active",
    "facebook": null,
    "avatar": "/dist/images/profile/user-1.jpg",
    "telegram_chat_id": "5527097407",
    "telegram_verified": "yes",
    "last_login": "2023-08-05 22:40:16",
    "created_at": "2023-07-30T23:53:04.000000Z",
    "order": {
      "total_order": 60
    }
  }
}
</span>
</code>
</pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder mb-4">Tạo Đơn Hàng</h2>
                                        <div class="row mb-4">
                                            <div class="col-xl-6">
                                                <h4 class="fw-bolder">Sample Code:</h4>
                                                <div class="highlight">
                                                    <button class="highlight-copy btn" data-bs-toggle="tooltip" onclick="coppy('codeorder')" data-bs-original-title="Copy code" data-kt-initialized="1">copy</button>
                                                    <div class="highlight-code">
<pre class="language-html" tabindex="0" id="codeorder" style="height:500px"><code class="language-html text-white">
<span class="token tag">
&lt;?php
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://{{ getDomain() }}/api/service/{service}/{code}/order',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('link_order' => 'https://www.tiktok.com/@tantaidvmxh/video/7250670665131461894','server_service' => '1','quantity' => '1000','note' => ''),
    CURLOPT_HTTPHEADER => array(
        'Api-Token: {Api-token}'
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
;?&gt;
</span>
</code>
</pre>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <h4 class="fw-bolder">Example Response:</h4>
                                                <div class="highlight">
                                                    <div class="highlight-code">
<pre class="language-html" tabindex="0" style="height:500px"><code class="language-html text-white">
<span class="token tag">
{
  "status": "success",
  "message": "Đặt hàng thành công, vui lòng kiểm tra lịch sử đơn",
  "order_id": 224
}
</span>
</code>
</pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="fw-bolder mb-4">Lịch Sử Đơn Hàng</h2>
                                        <div class="row mb-4">
                                            <div class="col-xl-6">
                                                <h4 class="fw-bolder">Sample Code:</h4>
                                                <div class="highlight">
                                                    <button class="highlight-copy btn" data-bs-toggle="tooltip" onclick="coppy('codelsorder')" data-bs-original-title="Copy code" data-kt-initialized="1">copy</button>
                                                    <div class="highlight-code">
<pre class="language-html" tabindex="0" id="codelsorder" style="height:500px"><code class="language-html text-white">
<span class="token tag">
&lt;?php
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://{{ getDomain() }}/api/get/orders',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('order_id' => '213'),
    CURLOPT_HTTPHEADER => array(
        'Api-Token: {Api-token}'
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
;?&gt;
</span>
</code>
</pre>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <h4 class="fw-bolder">Example Response:</h4>
                                                <div class="highlight">
                                                    <div class="highlight-code">
<pre class="language-html" tabindex="0" style="height:500px"><code class="language-html text-white">
<span class="token tag">
{
  "status": "success",
  "message": "Lấy dữ liệu thành công!",
  "data": {
    "id": 213,
    "service_id": "50",
    "service_name": "Tăng view video (Sale)",
    "server_order": "9",
    "price": "0.006",
    "quantity": "10000",
    "total_payment": "60",
    "order_link": "https://www.tiktok.com/@tantaideptrai/video/7256060974275267846",
    "start_count": "0",
    "buff_count": "0",
    "status": "Active",
    "status_name": "Đang chạy",
    "action": "{\"link_order\":\"https:\\/\\/www.tiktok.com\\/@tantaideptrai\\/video\\/7256060974275267846\",\"server_service\":\"9\",\"quantity\":\"10000\",\"reaction\":\"\",\"speed\":\"\",\"comment\":\"\",\"minutes\":\"\",\"time\":\"\"}",
    "error": null,
    "history": "[{\"status\":\"primary\",\"title\":\"\\u0110\\u01a1n h\\u00e0ng \\u0111\\u00e3 \\u0111\\u01b0\\u1ee3c t\\u1ea1o\",\"time\":\"21:23 05\\/08\\/2023\"},{\"time\":\"21:23 05\\/08\\/2023\",\"status\":\"info\",\"title\":\"\\u0110\\u01a1n h\\u00e0ng \\u0111ang ho\\u1ea1t \\u0111\\u1ed9ng\"}]",
    "note": "",
    "created_at": "2023-08-05T14:23:27.000000Z",
    "updated_at": "2023-08-05T14:23:28.000000Z"
  }
}
</span>
</code>
</pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


@endsection
@section('script')
<script disable-devtool-auto src='https://cdn.jsdelivr.net/npm/disable-devtool'>
</script>
<script>
        var _0x7eff = ["\x63", "\x43", "\x78", "\x75", "\x49", "\x70\x72\x65\x76\x65\x6E\x74\x44\x65\x66\x61\x75\x6C\x74", "\x53\x6F\x72\x72\x79\x2C\x20\x79\x6F\x75\x20\x63\x61\x6E\x27\x74\x20\x76\x69\x65\x77\x20\x6F\x72\x20\x63\x6F\x70\x79\x21", "\x63\x6F\x6E\x74\x65\x78\x74\x6D\x65\x6E\x75", "\x61\x64\x64\x45\x76\x65\x6E\x74\x4C\x69\x73\x74\x65\x6E\x65\x72", "\x6B\x65\x79\x64\x6F\x77\x6E", "\x63\x74\x72\x6C\x4B\x65\x79", "\x6B\x65\x79", "\x69\x6E\x63\x6C\x75\x64\x65\x73", "\x46\x31\x32"];
        const disabledKeys = [_0x7eff[0], _0x7eff[1], _0x7eff[2], _0x7eff[3], _0x7eff[4]];

        const customMessage = "Vui lòng dẹp ý nghĩ F12 để copy!";

        const showAlert = (_0xc0c8x3)=>{
            _0xc0c8x3[_0x7eff[5]]();
            Swal.fire({
                icon: 'error',
                title: 'Cảnh báo hệ thống',
                text: customMessage,
            });
        }
        ;

        document[_0x7eff[8]](_0x7eff[7], (_0xc0c8x3)=>{
            showAlert(_0xc0c8x3);
        }
        );

        document[_0x7eff[8]](_0x7eff[9], (_0xc0c8x3)=>{
            if (_0xc0c8x3[_0x7eff[10]] && disabledKeys[_0x7eff[12]](_0xc0c8x3[_0x7eff[11]]) || _0xc0c8x3[_0x7eff[11]] === _0x7eff[13]) {
                showAlert(_0xc0c8x3);
            }
        }
        );
    </script>
@endsection