@extends('Layout.App')

@section('title', 'Trang chủ')

@section('content')
<div class="app-wrapper" id="kt_app_wrapper">
            <div id="kt_app_toolbar_container" class="app-container container-fluid">
                

                        <div class="row flex-row-reverse">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12 mb-5 d-lg-block d-none">
                                        <div class="card card-flush">
                                            <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                                <div class="ribbon-label text-uppercase fw-bold bg-default">
                                                    Thông báo mới nhất
                                                    <span class="ribbon-inner bg-default"></span>
                                                </div>
                                            </div>
                                            <div class="card-body pt-2">
                                                <div class="scroll-notification">

                                                @foreach ($activities as $item)
                                              

                                                                                                        <div class="alert alert-{{ $item->status }}  d-flex align-items-center">
                                                        <div class="d-flex flex-column">
                                                            <div class="fs-7">{{ $item->name }} - {{ timeago($item->created_at) }}</div>
                                                            <p>{!! $item->content !!}</p>
                                                          

                                                        </div>
                                                    </div>

                                                    @endforeach
                                                                                                   
                                                                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-5">
                                        <div class="card card-flush p-0">
                                            <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                                <div class="ribbon-label text-uppercase fw-bold bg-default">
                                                    Báo Cáo Tài Sản
                                                    <span class="ribbon-inner bg-default"></span>
                                                </div>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="row">
                                                    <div class="col-md-6 mb-4">
                                                        <div class="d-flex flex-stack">
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-flex flex-center w-50px h-50px rounded-2 bg-light-info me-3">
                                                                    <i class="ki-duotone ki-wallet text-info fs-2x">
                                                                        <i class="path1"></i>
                                                                        <i class="path2"></i>
                                                                        <i class="path3"></i>
                                                                        <i class="path4"></i>
                                                                    </i>
                                                                </div>
                                                                <div class="d-flex flex-column">
                                                                    <div class="text-dark fs-7 fw-bold text-capitalize">Số dư hiện tại</div>
                                                                    <span class="text-muted fs-5 fw-bolder"><b class="text-danger"> {{ number_format(Auth::user()->balance) }}₫ </b></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-4">
                                                        <div class="d-flex flex-stack">
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-flex flex-center w-50px h-50px rounded-2 bg-light-danger me-3">
                                                                    <i class="ki-duotone ki-financial-schedule text-danger fs-2x">
                                                                        <i class="path1"></i>
                                                                        <i class="path2"></i>
                                                                        <i class="path3"></i>
                                                                        <i class="path4"></i>
                                                                    </i>
                                                                </div>
                                                                <div class="d-flex flex-column">
                                                                    <div class="text-dark fs-7 fw-bold text-capitalize">Tổng nạp tháng</div>
                                                                    <span class="text-muted fs-5 fw-bolder"><b class="text-danger"> {{ number_format(Auth::user()->total_recharge) }}₫ </b></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-4">
                                                        <div class="d-flex flex-stack">
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-flex flex-center w-50px h-50px rounded-2 bg-light-success me-3">
                                                                    <i class="ki-duotone ki-bank text-success fs-2x">
                                                                        <i class="path1"></i>
                                                                        <i class="path2"></i>
                                                                    </i>
                                                                </div>
                                                                <div class="d-flex flex-column">
                                                                    <div class="text-dark fs-7 fw-bold text-capitalize">Số Tiền Đã Nạp</div>
                                                                    <span class="text-muted fs-5 fw-bolder"><b class="text-danger"> {{ number_format(Auth::user()->total_recharge) }}₫ </b></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-4">
                                                        <div class="d-flex flex-stack">
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-flex flex-center w-50px h-50px rounded-2 bg-light-primary me-3">
                                                                    <i class="ki-duotone ki-educare text-primary fs-2x">
                                                                        <i class="path1"></i>
                                                                        <i class="path2"></i>
                                                                        <i class="path3"></i>
                                                                        <i class="path4"></i>
                                                                    </i>
                                                                </div>
                                                                <div class="d-flex flex-column">
                                                                    <div class="text-dark fs-7 fw-bold text-capitalize">Chiết Khấu {{ DataSite('card_discount') }}%</div>
                                                                    <span class="text-muted fs-5 fw-bolder"><b class="text-danger">{{ level(Auth::user()->level, false) }}</b></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-5">
                                        <div class="card card-flush p-0">
                                            <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                                <div class="ribbon-label text-uppercase fw-bold bg-default">
                                                    Thống Kê Giao Dịch
                                                    <span class="ribbon-inner bg-default"></span>
                                                </div>
                                            </div>
                                            <div class="card-body pt-0">
                                                <canvas id="myChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-4 mb-5">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex flex-wrap flex-sm-nowrap">
                                                    <div class="me-5">
                                                        <div class="symbol symbol-90px symbol-lg-90px symbol-fixed position-relative">
                                                            <img src="https://ui-avatars.com/api/?background=random&name={{ Auth::user()->name }}" alt="image">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-self-center align-items-start flex-wrap">
                                                        <div class="d-flex flex-column">
                                                            <div class="d-flex align-items-center mb-2">
                                                                <a href="#" class="text-gray-800 fs-3 fw-bolder me-1">{{ Auth::user()->name }}</a>
                                                                <a href="#"><i class="ki-doutoon ki-verify fs-1 text-primary"></i></a>
                                                            </div>
                                                            <div class="text-default mb-2">
                                                                <i class="ki-outline ki-wallet fs-3 me-1"></i> <b class="fs-4"> {{ number_format(Auth::user()->balance) }}₫ </b>
                                                            </div>
                                                            <span class="badge badge-lg badge-square w-150px badge-light-danger text-danger">
                                                                <b>{{ level(Auth::user()->level, false) }}</b>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu menu-column fw-bolder text-gray-700" data-kt-menu="true">
                                                    <div class="separator my-5"></div>
                                                    <div class="menu-item">
                                                        <a class="menu-link" href="{{ route('profile') }}">
                                                            <span class="menu-icon">
                                                                <i class="fas fa-shield"></i>
                                                            </span>
                                                            <span class="menu-title text-gray-700">Thông Tin Tài Khoản</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a class="menu-link" href="{{ route('recharge.transfer') }}">
                                                            <span class="menu-icon">
                                                                <i class="fas fa-wallet"></i>
                                                            </span>
                                                            <span class="menu-title text-gray-700">Nạp Tiền Tài Khoản</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a class="menu-link" href="{{ route('user.history') }}">
                                                            <span class="menu-icon">
                                                                <i class="fas fa-chart-bar"></i>
                                                            </span>
                                                            <span class="menu-title text-gray-700">Biến Động Số Dư</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a class="menu-link" href="{{ route('user.donhang') }}">
                                                            <span class="menu-icon">
                                                                <i class="fas fa-history"></i>
                                                            </span>
                                                            <span class="menu-title text-gray-700">Lịch Sử Mua Hàng</span>
                                                        </a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 mb-5">
                                        <div class="scroll h-1000px">
                                            @if (  DataSite('content')  !='')


                                                                                        <div class="card card-flush mb-3">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-40px symbol-md-40px me-3">
                                                        <img alt="TSN" src="https://ui-avatars.com/api/?background=random&name={!!DataSite('nameadmin')!!}">
                                                            </div>
                                                        <div class="d-flex flex-column">
                                                            <div class="fw-bolder d-flex align-items-center fs-5">
                                                            {!!DataSite('nameadmin')!!}&nbsp<i class="fas fa-thumbtack text-danger"></i>
                                                            </div>
                                                            <span class="fw-semibold text-muted text-hover-primary fs-7">
                                                            {!!DataSite('domain')!!}
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="content mt-3">
                                                        <p>{!!DataSite('content')!!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                                             
                                            @endif



                                        @foreach ($notification as $item)


                                                                                        <div class="card card-flush mb-3">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-40px symbol-md-40px me-3">
                                                        <img alt="Logo" src="https://i.imgur.com/lpocbi7.jpg">
                                                            </div>
                                                        <div class="d-flex flex-column">
                                                            <div class="fw-bolder d-flex align-items-center fs-5">
                                                            {{ $item->name }}
                                                            </div>
                                                            <span class="fw-semibold text-muted text-hover-primary fs-7">
                                                            {{ timeago($item->created_at) }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="content mt-3">
                                                        <p>{!! $item->content !!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                                             
                                            @endforeach


                                                                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bs-example-modal-md" class="modal fade" tabindex="-1" aria-labelledby="bs-example-modal-md"
    style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-top" role="document">
                                <div class="modal-content">
                                    <div class="modal-header py-3">
                                        <h3 class="modal-title">
                                        THÔNG BÁO
                                        </h3>
                                    </div>
                                    <div class="modal-body">
                                    <h3 class="text-center">   {!! DataSite('notice') !!}</h3>
                                    </div>
            <div class="modal-footer">
                <button type="button" id="close-hourly" class="btn btn-success" data-bs-dismiss="modal" fdprocessedid="ceop60p">
                    Tắt 1 tiếng
                </button>
                                            <button type="button" class="btn btn-default" data-bs-dismiss="modal">Đóng thông báo</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



    <!-- /.modal-dialog -->
</div>
@endsection
@section('script')
<script disable-devtool-auto src='https://cdn.jsdelivr.net/npm/disable-devtool'></script>
    <script>
@if(Auth::check())
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Thống kê ngày <?=date('Y-m-d', time())?>"],
            datasets: [{
                    label: 'Số dư',
                    data: ["{{ Auth::user()->balance }}"],
                    borderWidth: 1,
                    barPercentage: 0.4,
                },
                {
                    label: 'Tổng tiêu',
                    data: ["{{ Auth::user()->total_deduct }}"],
                    borderWidth: 1,
                    barPercentage: 0.4,
                },
                {
                    label: 'Tổng nạp',
                    data: ["{{ Auth::user()->total_recharge }}"],
                    borderWidth: 1,
                    barPercentage: 0.4,
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        stepSize: 1,
                    }
                }]
            }
        }
    });
        @endif
</script>
<script>
     window.onload = function() {
    var modalLastClosed1 = localStorage.getItem('modalLastClosed');
    var delayTime =  5000 * 1000; 
    if (!modalLastClosed1 || Date.now() - modalLastClosed1 > delayTime) {
        $('#bs-example-modal-md').modal('show');
    }
};

$('#close-hourly').on('click', function() {
    localStorage.setItem('modalLastClosed', Date.now());
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
@endsection