<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >

<head>
    <!--  Title -->
    <title>Reset mật khẩu</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="{{ DataSite('description') }}" />
    <meta name="keywords" content="{{ DataSite('keyword') }}" />
    <meta name="title" content="{{ DataSite('title') }}" />
    <link rel="shortcut icon" type="image/png" href="{{ DataSite('favicon') }}" />
    <meta property="og:image" content="{{ DataSite('image_seo') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="" />
    <!--  Favicon -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="shortcut icon" type="image/png" href="{{ DataSite('favicon') }}" />
    <link href=" https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css" rel="stylesheet">
 
    <link href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-html5-2.3.6/r-2.4.1/datatables.min.css" rel="stylesheet" />

    @yield('css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link rel="stylesheet" href="/assets6/css/fonts.css">
    <link rel="stylesheet" href="/assets6/plugins/custom/datatables/datatables.bundle.css">
    <link rel="stylesheet" href="/assets5/plugins/global/plugins.bundle.css">
    <link rel="stylesheet" href="/assets6/css/style.bundle.css">
    <link rel="stylesheet" href="/assets/css/lamtilo.css?time={{ time() }}">
    <link href=" https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css" rel="stylesheet">
    
    {!! DataSite('script_header') !!}
</head>
<style>
    :root {
        --drake-primary: #7134eb;
    }
    .translate-wrapper {
        padding: 0 8px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-item-align: center;
        align-self: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        height: 44px;
        cursor: pointer;
        border-radius: 4px
    }

    #button_translate span {
        display: none
    }

    .translated-ltr body {
        top: 0!important
    }

    .VIpgJd-ZVi9od-l4eHX-hSRGPd {
        display:none;
    }

    .skiptranslate iframe {
        display: none!important
    }

    @media (max-width: 767px) {
        .goog-te-gadget {
            display:none !important;
        }
    }
    
    ::selection {
    color: var(--drake-primary);
    background: 0 0;
    }
</style>
</head>
<body id="kt_body" class="app-blank">
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <div class="d-flex flex-column flex-column-fluid flex-lg-row">
        <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0">
            <div class="d-flex flex-center flex-lg-start flex-column">
                <img alt="NGUYENTANTAI" src="{{ DataSite('logo') }}" class="w-225px" />
            </div>
        </div>
        <div class="d-flex flex-center w-lg-50 p-10">
            <div class="card w-md-550px">
                <div class="card-body">
                    <form class="form w-100 forAuth" action="{{ route('forgot.password.post') }}" method="post" redirect="{{ route('login') }}">
                        @csrf
                        <div class="text-center mb-4">
                            <h1 class="text-dark fw-bolder">Khôi Phục Mật Khẩu</h1>
                            <div class="text-muted fw-semibold fs-6">Xin Mời Bạn Điền Thông Tin Vào Bên Dưới.</div>
                        </div>
                        <div class="form-floating mb-5">
                            <input type="email" class="form-control" id="floatingInput" placeholder="Nhập địa chỉ email..." name="email" value="{{ old('email') }}" />
                            <label for="floatingInput">Địa Chỉ Email</label>
                        </div>
                        <div class="row mb-9">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-default">Khôi phục ngay</button>
                        </div>
                        <div class="separator separator-content border-secondary my-5"><span class="w-50px text-gray">hoặc</span></div>
                        <div class="d-grid">
                            <a href="{{ route('login') }}" class="btn btn-success">Về Trang Đăng Nhập</a>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
                            <!-- Page Footer -->
      

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/assets2/js/plugins/jquery.dataTables.min.js"></script>
    <script src="/assets2/js/plugins/dataTables.bootstrap5.min.js"></script>
 
 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.js"></script>    
   <script src="/assets2/js/plugins/apexcharts.min.js"></script>
    <script src="/assets2/js/pages/dashboard-default.js"></script>
    <!-- [Page Specific JS] end -->
    <!-- Required Js -->
    <script src="/assets2/js/plugins/popper.min.js"></script>
    <script src="/assets2/js/plugins/simplebar.min.js"></script>
    <script src="/assets2/js/plugins/bootstrap.min.js"></script>
 
    <script src="/assets2/js/fonts/custom-font.js"></script>
    <script src="/assets2/js/pcoded.js"></script>
    <script src="/assets2/js/config.js"></script>
    <script src="/assets2/js/plugins/feather.min.js"></script>
 
 <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.js"></script>
<script src="/assets/js/ptl1.js?time={{ time() }}"></script>
<script disable-devtool-auto src='https://cdn.jsdelivr.net/npm/disable-devtool'></script>
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

 


@if ($errors->any())
<script>
        swa1('{{ $errors->first() }}','error')
    </script>
                                   
                                @endif

                            
@if (session('success'))
    <script>
        swa1('{{ session('success') }}','success')
    </script>
@elseif (session('error'))
    <script>
          swa1('{{ session('error') }}','error')
    </script>
@endif
 
@yield('script')
</body>

</html>

