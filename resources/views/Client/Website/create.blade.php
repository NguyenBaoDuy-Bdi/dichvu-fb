@extends('Layout.App')
@section('title', 'Tạo website riêng')
@section('content')
<div class="app-wrapper" id="kt_app_wrapper">
            <div id="kt_app_toolbar_container" class="app-container container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-flush">
            <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                            Thông tin &amp; cấu hình
                                            <span class="ribbon-inner bg-default"></span>
                                        </div>
                                    </div>
                <div class="card-body">
            
                <div class="col-md-12 mx-auto">
                   
                    <div class="alert alert-warning " role="alert">
- Bạn phải đạt cấp bậc cộng tác viên hoặc đại lý mới có thể tạo web con! <br>
- Nghiêm cấm các tiên miền có chữ : Facebook, Instagram để tránh bị vi phạm bản quyền. <br>
- Khách hàng tạo tài khoản và sử dụng dịch vụ ở site con. Tiền sẽ trừ vào tài khoản của đại
lý ở
site chính. Vì thế để khách hàng mua được tài khoản đại lý phải còn số dư. <br>
- Chúng tôi hỗ trợ mục đích kinh doanh của tất cả cộng tác viên và đại lý!
</div>
</div>              
<div class="col-md-8 mx-auto">
                    <div class="form-group mb-3">
                            <label class="form-label" for="">Api Token</label>
                            <div class="input-group">
                                <input class="form-control" type="text" value="{{ Auth::user()->api_token }}" onclick="coppy('api_token')" id="api_token" readonly="">
                                <button type="button" id="btnReload" class="btn btn-primary"><i class="fa fa-sync"></i> Thay
                                    đổi</button>
                            </div>
                        </div>
               
                    <div class="mb-3">
                    <form action="{{ route('create.website.post') }}" method="POST">
                        @csrf
                        <input type="text" value="{{ Auth::user()->api_token }}" name="api_token" hidden>
                        <label for="domain" class="form-label">Tên miền</label>
                        <div class="input-group">
                           
                            <input type="text" class="form-control" id="domain" name="domain" placeholder="Tên miền"
                                value="{{ $sitecon->domain_name }}">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Lưu Miền Ngay</button>
                        </div>
                        
                    </form>
</div>
</div>
<div class="col-md-12 mx-auto">
                    <div class="alert alert-success " role="alert">
<p class="fw-bold">Hướng dẫn tạo website:</p>
<p><span class="fw-bold">- Bước 1 :</span> <span>Bạn cần phải có tên miền, nếu chưa bạn có
thể mua tên miền tại <a href="http://tenten.vn" target="_blank" rel="noopener noreferrer" class="">tenten.vn</a> (đọc lưu ý trước khi
mua).</span></p>
<p><span class="fw-bold">- Bước 2 :</span> <span>Trỏ Nameserver1: <b class="text-info" id="name_server1" name="name_server1" onclick="coppy('name_server1')">{{ env('NAME_SERVER1') }}</b></span></p>
<p><span class="fw-bold">- Bước 3 :</span> <span>Trỏ Nameserver2: <b class="text-info" id="name_server2" name="name_server2" onclick="coppy('name_server2')">{{ env('NAME_SERVER2') }}</b></span></p>
<p><span class="fw-bold">- Bước 4 :</span> <span>Sau khi đã trỏ Nameserver bạn hãy liên hệ
zalo: <b class="text-white"><a href="{{ DataSite('zalo') }}" target="_blank" rel="noopener noreferrer" class="">{{ DataSite('zalo') }}</a></b>
để hỗ trợ kích hoạt.</span></p>
<p><span class="fw-bold">- Bước 5 :</span> Truy cập vào trang của bạn và nhập api token (lưu
ý trước lúc kích hoạt api token không được để lộ tên miền tránh bị kích hoạt tài khoản
admin).
</p>
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
        $('#btnReload').click(function() {
            $.ajax({
                url: "{{ route('user.action', 'change-token') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                },
                dataType: "json",
                beforeSend: function() {
                    $('#btnReload').html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý..').prop(
                        'disabled', true);
                },
                complete: function() {
                    $('#btnReload').html('<i class="fa fa-sync"></i> Thay đổi').prop('disabled', false);
                },
                success: function(data) {
                    if (data.status == 'success') {
                        $('#api_token').val(data.api_token);
                        swa1("Thay đổi thành công", "success");
                    } else {
                        swa1("Thay đổi thất bại", "error");
                    }
                },
            });
        });
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
        <script>
   Swal.fire(
  'Chú ý!',
  'Tạo website con thì liên hệ admin để kích hoạt!',
  'warning'
)
      </script>
@endsection
