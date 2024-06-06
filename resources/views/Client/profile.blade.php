@extends('Layout.App')
@section('title', 'Thông tin cá nhân')

@section('content')
<div class="app-wrapper" id="kt_app_wrapper">
            <div id="kt_app_toolbar_container" class="app-container container-fluid">
<div class="row">
<div class="col-md-8 mb-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap flex-sm-nowrap">
                                            <div class="me-7 mb-4">
                                                <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                                    <img src="https://ui-avatars.com/api/?background=random&amp;name={{ Auth::user()->name }}" alt="image">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                                    <div class="d-flex flex-column">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{ Auth::user()->name }}</a>
                                                            <a href="#"><i class="ki-duotone ki-verify fs-1 text-primary"><span class="path1"></span><span class="path2"></span></i></a>
                                                        </div>
                                                        <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                                <i class="ki-duotone ki-geolocation fs-4 me-1"><span class="path1"></span><span class="path2"></span></i> {{ getadr() }}
                                                            </a>
                                                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                                            @php
     
    $getbr = getBrowser()['platform'];
@endphp
                                                                <i class="ki-duotone ki-monitor-mobile fs-4 me-1"><span class="path1"></span><span class="path2"></span></i> {{ $getbr }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                                                                    </div>
                                                <div class="d-flex flex-wrap flex-stack">
                                                    <div class="d-flex flex-column flex-grow-1">
                                                        <div class="d-flex flex-wrap">
                                                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value=" 0 " data-kt-countup-prefix=" ₫ " data-kt-initialized="1"> ₫ {{ number_format(Auth::user()->balance) }}</div>
                                                                <div class="fw-bold fs-6 text-gray-400">Số Dư Hiện Tại</div>
                                                            </div>
                                                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value=" 0 " data-kt-countup-prefix=" ₫ " data-kt-initialized="1"> ₫ {{ number_format(Auth::user()->total_recharge) }}</div>
                                                                <div class="fw-bold fs-6 text-gray-400">Số Dư Đã Nạp</div>
                                                            </div>
                                                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value=" 0 " data-kt-countup-prefix=" ₫ " data-kt-initialized="1"> ₫ {{ number_format(Auth::user()->total_deduct) }}</div>
                                                                <div class="fw-bold fs-6 text-gray-400">Số Dư Đã Dùng</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="separator my-5"></div>
                                        <h4 class="fw-bolder mb-7">
                                            <span class="d-inline-block position-relative ms-2">
                                                <span class="d-inline-block">
                                                    Thông Tin Tài Khoản
                                                </span>
                                                <span class="d-inline-block position-absolute h-2px bottom-0 end-0 start-0 bg-default translate rounded"></span>
                                            </span>
                                        </h4>
                                        <div class="row mb-7">
                                            <label class="col-lg-4 fw-bold text-muted">Họ Và Tên</label>
                                            <div class="col-lg-8">
                                                <span class="fw-bolder fs-6 text-gray-800">{{ Auth::user()->name }}</span>
                                            </div>
                                        </div>
                                        <div class="row mb-7">
                                            <label class="col-lg-4 fw-bold text-muted">Địa Chỉ Email</label>
                                            <div class="col-lg-8">
                                                <span class="fw-bolder fs-6 text-gray-800">{{ Auth::user()->email }}</span>
                                            </div>
                                        </div>
                                        <div class="row mb-7">
                                            <label class="col-lg-4 fw-bold text-muted">Tên Tài Khoản</label>
                                            <div class="col-lg-8">
                                                <span class="fw-bolder fs-6 text-gray-800">{{ Auth::user()->username }}</span>
                                            </div>
                                        </div>
                                        <div class="row mb-7">
                                            <label class="col-lg-4 fw-bold text-muted">Cấp Độ</label>
                                            <div class="col-lg-8">
                                                <span class="fw-bolder fs-6 text-gray-800">{{ level(Auth::user()->level, false) }}</span>
                                            </div>
                                        </div>
                                        <!-- <div class="row mb-7">
                                            <label class="col-lg-4 fw-bold text-muted">Chiết Khấu</label>
                                            <div class="col-lg-8">
                                                <span class="fw-bolder fs-6 text-gray-800">0%</span>
                                            </div>
                                        </div> -->
                                        <div class="row mb-7">
                                            <label class="col-lg-4 fw-bold text-muted">Thời Gian Tham Gia</label>
                                            <div class="col-lg-8">
                                                <span class="fw-bolder fs-6 text-gray-800">{{ Auth::user()->created_at }}</span>
                                            </div>
                                        </div>
                                        <div class="row mb-7">
                                            <label class="col-lg-4 fw-bold text-muted">Api Token</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control"
                                                        id="api_token" onclick="coppy('api_token')"
                                                        value="{{ Auth::user()->api_token }}" readonly>
                                            </div>
                                        </div>
                                                                                <div class="row mb-7">
                                            <div class="col-lg-12 d-grid">
                                                <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#cauhinhtele">
                                                    <i class="ki-duotone ki-check-square fs-3">
                                                        <i class="path1"></i>
                                                        <i class="path2"></i>
                                                    </i>
                                                    Cấu hình telegram
                                                </button>
                                            </div>
                                        </div>
                                                                                <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                                            <i class="ki-duotone ki-information fs-2tx text-warning align-self-center me-4">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                            <div class="d-flex flex-stack flex-grow-1">
                                                <div class=" fw-semibold">
                                                    <h4 class="text-gray-900 fw-bold">Cảnh Báo Tài Khoản!</h4>
                                                    <div class="fs-6 text-gray-700">Hãy Liên Kết Tài Khoản Để Nhận Được Các Lịch Sử Của Bạn Về Telegram.</div>
                                                </div>
                                            </div>
                                        </div>
                                                                            </div>
                                </div>
                            </div>
                            <div class="modal fade" tabindex="-1" id="cauhinhtele">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title">Cấu Hình Telegram</h3>
                                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                        </div>
                                    </div>
                                    <form action="{{ route('update-profile', 'update-telegram') }}" method="POST"
                                        request="ptl">
                                        <div class="modal-body">
                                          <div class="form-group mb-3 row">
                                              <label for="" class="form-label col-md-3">Trạng thái Telegram</label>
                                              <div class="col-md-9">
                                                  @if (Auth::user()->telegram_verified == 'yes')
                                                      <span>
                                                          <i class="fas fa-check-circle	 text-success fs-5"></i>
                                                          Đã liên kết
                                                      </span>
                                                      <div class="mt-3">
                                                          <b class="text-primary">Nhận thông báo từ telegram</b>
                                                          <div class="form-check">
                                                              @php
                                                                  if (Auth::user()->telegram_notice == 'on') {
                                                                      $checked = 'checked';
                                                                  } else {
                                                                      $checked = '';
                                                                  }
                                                              @endphp
                                                              <input type="checkbox" class="form-check-input"
                                                                  name="isNotice" {{ $checked }}
                                                                  id="notice-tele">
                                                              <label class="form-check-label" for="notice-tele">Nhận thông
                                                                  báo</label>
                                                          </div>
                                                      </div>
                                                  @else
                                                      <span>
                                                          <i class="fas fa-window-close  rounded-pill text-danger fs-5"></i>
                                                          Chưa liên kết <b class="text-primary">(Liên kết telegram nhận ngay
                                                              {{ number_format(DataSite('balance_telegram')) }} vnđ)</b>
                                                          <p>Nhấn vào <a href="{{ DataSite('telegram_bot') }}" target="_blank">Đây</a> để
                                                              liên kết</p>
                                                      </span>
                                                  @endif
                                              </div>
                                          </div>
                                                                </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Đóng</button>
                                            <button type="submit" class="btn btn-sm btn-default">Xác Nhận</button>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                            <div class="col-md-4 mb-5">
                                <div class="card card-flush">
                                    <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                            Thay Đổi Mật Khẩu
                                            <span class="ribbon-inner bg-default"></span>
                                        </div>
                                    </div>
                                    <div class="card-body pt-2">
                                        <form action="{{ route('update-profile', 'change-password') }}" method="POST"
                                        request="ptl">
                                            <div class="fv-row mb-5">
                                                <label class="form-label">Mật khẩu cũ</label>
                                                <input type="password" class="form-control form-control-solid" name="old_password" value="" placeholder="Mật khẩu cũ...">
                                            </div>
                                            <div class="fv-row mb-5">
                                                <label class="form-label">Mật khẩu mới</label>
                                                <input type="password" class="form-control form-control-solid" name="new_password" value="" placeholder="Mật khẩu mới...">
                                            </div>
                                            <div class="fv-row mb-5">
                                                <label class="form-label">Xác nhận mật khẩu</label>
                                                <input type="password" class="form-control form-control-solid" name="confirm_password" value="" placeholder="Xác nhận mật khẩu mới...">
                                            </div>
                                            <div class="d-grid gap-2">
                                                <button type="submit" class="btn btn-default me-4"><i class="fa fa-lock"></i> Thay đổi ngay</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12 mb-5">
                                <div class="card card-flush">
                                    <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                            Lịch Sử Tài Khoản
                                            <span class="ribbon-inner bg-default"></span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                        <div class="table-responsive dt-responsive">
                           
                                <table id="ttTable"
                                    class="table table-striped    table-bordered nowrap">
                                    <thead class="text-start text-dark-400 fw-bolder fs-7 text-uppercase">
                                        <tr>
                                            <th>STT</th>
                                            <th>Nội Dung</th>
                                            <th>Thời gian</th>
                                        </tr>
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
<script disable-devtool-auto src='https://cdn.jsdelivr.net/npm/disable-devtool'></script>
    <script>
        createDataTable('#ttTable', '{{ route('user.list.action', 'history-login') }}', [{
                data: 'id',
            },
            {
                data: 'dangnhap',
            },
            {
                data: 'created_at',
                 render: function(data) {
        var formattedDate = moment(data).format('YYYY-MM-DD HH:mm:ss');
        return formattedDate;
    }
                
            },
        ])
    </script>
    <script>
    function animateNumber(finalNumber, duration = 5000000, startNumber = 0, callback) {
      let currentNumber = startNumber
      const interval = window.setInterval(updateNumber, 1)
      function updateNumber() {
        if (currentNumber >= finalNumber) {
          clearInterval(interval)
        } else {
          let inc = Math.ceil(finalNumber / (duration / 1))
          if (currentNumber + inc > finalNumber) {
            currentNumber = finalNumber
            clearInterval(interval)
          } else {
            currentNumber += inc
          }
          callback(currentNumber)
        }
      }
    }
    
    document.addEventListener('DOMContentLoaded', function () {
      animateNumber({{ number_format(Auth::user()->balance) }}, 5000000, 0, function (number) {
        const formattedNumber = number.toLocaleString()
        document.getElementById('transaction-count').innerText = formattedNumber
      })
      
      animateNumber({{ number_format(Auth::user()->total_recharge) }}, 5000000, 0, function (number) {
        const formattedNumber = number.toLocaleString()
        document.getElementById('city-count').innerText = formattedNumber
      })
      
      animateNumber({{ number_format(Auth::user()->total_deduct) }}, 5000000, 0, function (number) {
        const formattedNumber = number.toLocaleString()
        document.getElementById('customer-count').innerText = formattedNumber
      })
    })
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
@endsection
