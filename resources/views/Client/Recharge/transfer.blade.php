@extends('Layout.App')
@section('title', 'Nạp tiền chuyển khoản')
@section('content')
<div class="app-wrapper" id="kt_app_wrapper">
            <div id="kt_app_toolbar_container" class="app-container container-fluid">
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="card card-flush">
            <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-6 d-grid gap-2 mb-3">
                                                <a href="/recharge/transfer" class="btn btn-default">
                                                    <i class="ki-duotone ki-bank">
                                                        <i class="path1"></i>
                                                        <i class="path2"></i>
                                                    </i>
                                                    Chuyển Khoản
                                                </a>
                                            </div>
                                            <div class="col-md-6 d-grid gap-2 mb-3">
                                                <a href="/recharge/card" class="btn btn-outline btn-outline-default">
                                                    <i class="ki-duotone ki-two-credit-cart">
                                                        <i class="path1"></i>
                                                        <i class="path2"></i>
                                                        <i class="path3"></i>
                                                        <i class="path4"></i>
                                                        <i class="path5"></i>
                                                    </i>
                                                    Thẻ Cào
                                                </a>
                                            </div>
                                        </div>
                                    </div>
    
                    
                    <div class="card-body pt-0">
        <div class="row">
        <div class="col-md-12 mb-2">
<h5 class="text-primary">Tỷ giá: 1 VNĐ = 1 coin</h5>
</div>
        <div class="col-md-12">
<div class="alert alert-danger mb-3" role="alert">
- Bạn vui lòng chuyển khoản chính
xác
nội dung để được cộng tiền nhanh nhất.<br>
- Nếu sau 10 phút từ khi tiền trong tài khoản của bạn bị trừ mà vẫn chưa được cộng
tiền vui liên hệ Admin để được hỗ trợ.<br>
- Vui lòng không nạp từ bank khác qua bank này (tránh lỗi).
</div>
</div>   
                    @foreach ($account as $item)
                    <div class="col-md-6 mb-5">
                                                        <h5 class="text-center"><img class="h-45px" style="width:auto" src="{{ $item->logo }}"></h5>
                                                        <div class="alert alert-primary" role="alert">
                                                            <div class="row mb-3">
                                                                <label class="col-lg-4 fw-bold fs-5">Ngân Hàng</label>
                                                                <div class="col-lg-8">
                                                                    <span class="fw-bolder fs-5">{{ strtoupper($item->type) }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label class="col-lg-4 fw-bold fs-5">Chủ Tài Khoản</label>
                                                                <div class="col-lg-8">
                                                                    <span class="fw-bolder fs-5">{{ $item->account_name }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label class="col-lg-4 fw-bold fs-5">Số Tài Khoản</label>
                                                                <div class="col-lg-8">
                                                                    <span class="fw-bolder fs-5" id="number_{{ $item->type }}" onclick="coppy('number_{{ $item->type }}')">{{ $item->account_number }} <i class="fas fa-copy"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label class="col-lg-4 fw-bold fs-5">Nạp Tối Thiểu</label>
                                                                <div class="col-lg-8">
                                                                    <span class="fw-bolder fs-5">  10,000₫ </span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label class="col-lg-4 fw-bold fs-5">Tỷ Giá</label>
                                                                <div class="col-lg-8">
                                                                    <span class="fw-bolder fs-5">  23,000₫ = 1.00$ </span>
                                                                </div>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <div class="col-12 gap-2 d-grid">
                                                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bs-example-modal-md{{ $item->type }}">Quét Mã QR <i class="fas fa-qrcode"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div id="bs-example-modal-md{{ $item->type }}" class="modal fade" tabindex="-1"
                                        aria-labelledby="bs-example-modal-md{{ $item->type }}" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header d-flex align-items-center">
                                                    <h4 class="modal-title" id="myModalLabel">
                                                        Mã QR Nạp tiền
                                                    </h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="w-100">
                                                        @if ($item->type == 'momo')
                                                        <img src="{{ $item->qr_code }}{{ DataSite('code_tranfer') }}{{ Auth::user()->id }}"
                                                            class="img-fluid" alt="">
                                                        @else
                                                        <img src="{{ $item->qr_code }}{{ DataSite('code_tranfer') }}{{ Auth::user()->id }}&is_mask=0&bg="
                                                            class="img-fluid" alt="">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button"
                                                        class="btn btn-light-danger text-danger font-medium waves-effect"
                                                        data-bs-dismiss="modal">
                                                        Đóng
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                                    </div>
                   
          
                    @endforeach
                    
                    <div class="col-md-12">
                    <div class="fw-bold text-uppercase bg-default text-light p-2 mb-0 text-center" style="border-radius: 10px 10px 0px 0px;">
                                                        Nội dung: (bắt buộc ghi đúng nội dung dưới đây)
                                                    </div>
                                                    <div class="alert alert-dismissible bg-light-default border border-default h1 fw-bolder text-center" style="border-radius: 0px 0px 10px 10px;">
            <h5 class="bg-heading font-weight-semi-bold text-center"><a href="javascript:;" onclick="coppy('content_codeRecharge');"><b id="content_codeRecharge" class="bg-heading font-weight-semi-bold text-center">{{ DataSite('code_tranfer') }}{{ Auth::user()->id }} <i class="fa fa-clone"></i></b> </a></h5>
    </div>
                    </div>
                     
                 
                  
                </div>
    </div>
</div>
        </div> 

     
        <div class="col-md-12">
            <div class="card card-flush">
            <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                            Lịch Sử Chuyển Khoản
                                            <span class="ribbon-inner bg-default"></span>
                                        </div>
                                    </div>
                <div class="card-body">
         
                  
                        <div class="table-responsive">
                            
                                <table id="testds"
                                    class="table table-bordered table-hover no-footer text-nowrap dataTable w-100" >
                                    <thead>
                                        <!-- start row -->
                                        <tr>
                                            <th>ID</th>
                                            <th>Cổng thanh toán</th>
                                            <th>Mã giao dịch</th>
                                            <th>Người chuyển</th>
                                            <th>Thực nhận</th>
                                            <th>Nội dung</th>
                                            <th>Thời gian</th>
                                        </tr>
                                        <!-- end row -->
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            
                        
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
        createDataTable('#testds', '{{ route('user.list.action', 'history-transfer') }}', [{
                data: 'id'
            },
            {
                data: 'type_bank',
                render: function(data, type, row){
                    return `<span class= "badge badge-info">${data}</span>
                                    `
                }
            },
            {
                data: 'tranid'
            },
            {
                data: 'name_bank'
            },
            {
                data: 'real_amount',
                render: function(data, type, row){
                    return `<b class="text-danger">${formatNumber(data)}</b>
                                    <sup>coin</sup>`
                }
            },
            {
                data: 'note'
            },
             {
                 data: 'created_at',
            }
        ])
       </script>
    <script>
   Swal.fire(
  'Chú ý!',
  'Vui Lòng Nạp Đúng Nội Dung!',
  'warning'
)
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
