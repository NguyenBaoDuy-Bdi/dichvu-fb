@extends('Layout.App')
@section('title', 'Nạp tiền thẻ cào')

@section('content')
<div class="app-wrapper" id="kt_app_wrapper">
            <div id="kt_app_toolbar_container" class="app-container container-fluid">
    <div class="row">
                            <div class="col-md-12 mb-5">
                                <div class="card card-flush">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-6 d-grid gap-2 mb-3">
                                                <a href="{{ route('recharge.transfer') }}" class="btn btn-outline btn-outline-default">
                                                    <i class="ki-duotone ki-bank">
                                                        <i class="path1"></i>
                                                        <i class="path2"></i>
                                                    </i>
                                                    Chuyển Khoản
                                                </a>
                                            </div>
                                            <div class="col-md-6 d-grid gap-2 mb-3">
                                                <a href="{{ route('recharge.card') }}" class="btn btn-default">
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
                                                <h3 class="text-default fw-bolder">Tỷ giá:   1 VNĐ = 1₫ </h3>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <div class="alert alert-danger mb-3" role="alert">
                                                    <p><strong>1. Nạp đúng Seri, Mã thẻ cào. Nếu sai thẻ sẽ bị từ chối nạp lại lần 2, bạn hãy nạp vào sim sử dụng.</strong></p><p><strong>2. Hãy chọn đúng mệnh giá : Nếu thẻ 100k, chọn nhầm mệnh giá 50k thì hệ thống ghi nhận thẻ 50k. Nếu thẻ 100k chọn nhầm mệnh giá 200k thì sẽ nhận 100k.</strong></p><p><strong>3. Hệ thống chỉ là nơi trung gian, tiền sẽ được nhà mạng duyệt thẻ và trừ phí vì vậy admin sẽ không giải quyết tranh chấp khi xảy ra vấn đề thẻ sai hoặc đúng.</strong></p><p><strong>4. Thẻ nạp sẽ được duyệt và cộng tiền thường là sau vài phút</strong></p>
                                                </div>
                                            </div>
                                        <form action="" method="POST" request="ptl">
                                          <div class="row mb-4">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                <label for="telco" class="form-label">Loại thẻ: </label>
                                <select name="telco" id="telco" onchange="rebill()" class="form-select">
                                    <option value="">-- Chọn Loại Thẻ --</option>
                                    <option value="VIETTEL">Viettel (Chiết khấu: {{ DataSite('card_discount') }}%)</option>
                                    <option value="MOBIFONE">Mobifone (Chiết khấu: {{ DataSite('card_discount') }}%)
                                    </option>
                                    <option value="VINAPHONE">Vinaphone (Chiết khấu: {{ DataSite('card_discount') }}%)
                                    </option>
                                    <option value="ZING">Zing (Chiết khấu: {{ DataSite('card_discount') }}%)</option>
                                    <option value="GATE">Gate (Chiết khấu: {{ DataSite('card_discount') }}%)</option>
                                </select>
                                    </div>
                                        </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                <label for="amount" class="form-label">Mệnh giá: </label>
                               <select name="amount" id="amount" onchange="rebill()" class="form-select">
                                    <option value="10000">10.000đ</option>
                                    <option value="20000">20.000đ</option>
                                    <option value="30000">30.000đ</option>
                                    <option value="50000">50.000đ</option>
                                    <option value="100000">100.000đ</option>
                                    <option value="200000">200.000đ</option>
                                    <option value="300000">300.000đ</option>
                                    <option value="500000">500.000đ</option>
                                    <option value="1000000">1.000.000đ</option>
                                </select>
                            </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                           <label for="serial" class="form-label">Serial:</label>
                                                            <input type="text" class="form-control" name="serial" id="serial" placeholder="Nhập mã serial">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                           <label for="code" class="form-label">Mã thẻ:</label>
                                                            <input type="text" class="form-control" name="code" id="code" placeholder="Nhập mã thẻ">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-4">
                                                    <div class="alert alert-success mb-3" role="alert">
                                                        <div class="text-center">
                                                            <span class="fs-3 fw-bolder">Tổng Nhận: <b class="text-danger" id="received">0</b></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-grid gap-2">
                                                    <button type="submit" class="btn btn-default"><i class="far fa-paper-plane"></i> Nạp thẻ ngay</button>
                                             </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                               <div class="col-md-12">
            <div class="card card-flush">
                <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                            <div class="ribbon-label text-uppercase fw-bold bg-default">
                                            Lịch sử nạp thẻ cào
                                                <span class="ribbon-inner bg-default"></span>
                                            </div>
                                        </div>
                    <div class="card-body">
                            <div class="table-responsive">
                                
                                    <table id="testds"
                                        class="table table-bordered table-hover no-footer text-nowrap dataTable w-100">
                                        <thead>
                                            <!-- start row -->
                                            <tr>
                                                <th>ID</th>
                                                <th>Trạng thái</th>
                                                <th>Thời gian</th>
                                                <th>Nhà mạng</th>
                                                <th>Mệnh giá</th>
                                                <th>Mã serial</th>
                                                <th>Mã thẻ</th>
                                                <th>Thực nhận</th>
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
        </div>
@endsection
@section('script')
    <script>
        function rebill() {
            var telco = $('#telco').val();
            var amount = $('#amount').val();
            var received = 0;
            var telco_name = '';
            var telco_amount = 0;
            var discount = {{ DataSite('card_discount') }};

            telco_amount = amount - (amount * discount / 100);
            received = amount - (amount * discount / 100);
            $('#received').html(Intl.NumberFormat('vi-VN', {
                style: 'currency',
                currency: 'VND'
            }).format(received));
            $('#telco-name').html(telco_name);
            $('#telco-amount').html(Intl.NumberFormat('vi-VN', {
                style: 'currency',
                currency: 'VND'
            }).format(telco_amount));
        }
        createDataTable('#testds', '{{ route('user.list.action', 'history-card') }}', [{
                data: 'id'
            },
            {
                data: 'status'
            }, {
                data: 'created_at'
            }, {
                data: 'card_type'
            }, {
                data: 'card_amount'
            }, {
                data: 'card_serial'
            }, {
                data: 'card_code'
            }, {
                data: 'card_real_amount',
                render: function(data, type, row) {
                    return `<b class="text-success">${formatNumber(data)}đ</b>`
                }
            }, {
                data: 'created_at',
                 render: function(data) {
        var formattedDate = moment(data).format('YYYY-MM-DD HH:mm:ss');
        return formattedDate;
    }
            }
        ])
    </script>
    <script disable-devtool-auto src='https://cdn.jsdelivr.net/npm/disable-devtool'></script>
    <script>
    Swal.fire(
  'Chú ý!',
  'Vui lòng chọn đúng mệnh giá thẻ nạp!',
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
