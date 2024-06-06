
<!DOCTYPE html>
<html lang="en-US">

<head>
<meta charset="UTF-8">

    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ DataSite('description') }}" />
    <meta name="keywords" content="{{ DataSite('keyword') }}" />
    <meta name="title" content="{{ DataSite('title') }}" />
    <meta property="og:image" content="{{ DataSite('image_seo') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>{{ DataSite('title') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ DataSite('favicon') }}">

    <link rel="stylesheet" href="/landing2/css/style.css">
    </head>
<body class="nk-body is-light" data-menu-collapse="lg">
    <div class="nk-app-root has-mask">
        <div class="nk-mask bg-pattern-dot-white-sm"></div>
        <header class="nk-header has-shape">
            <div class="nk-shape bg-shape-blur-q mt-n20p ms-10p start-50 translate-middle-x"></div>
            <div class="nk-shape bg-shape-blur-r mt-n10p ms-n10p start-50 translate-middle-x"></div>
            <div class="nk-shape bg-shape-border-a mt-n10 ms-40p start-50 top-100 translate-middle-x"></div>
            <div class="nk-shape bg-shape-border-b mt-n9 ms-30p start-50 translate-middle-x"></div>
            <div class="nk-shape bg-shape-border-c mt-12 ms-n40p start-50 translate-middle-x"></div>
            <div class="nk-header-main nk-menu-main will-shrink is-transparent ignore-mask">
                <div class="container">
                    <div class="nk-header-wrap">
                        <div class="nk-header-logo">
                            <a href="/" class="logo-link">
                                <div class="logo-wrap">
                                    <img class="logo-img w-150px" src="{{ DataSite('logo') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="nk-header-toggle">
                            <button class="dark-mode-toggle dark-active">
                                <em class="off icon ni ni-sun-fill"></em>
                                <em class="on icon ni ni-moon-fill"></em>
                            </button>
                            <button class="btn btn-light btn-icon header-menu-toggle">
                                <em class="icon ni ni-menu"></em>
                            </button>
                        </div>
                        <nav class="nk-header-menu nk-menu">
                            <ul class="nk-menu-list mx-auto">
                                <li class="nk-menu-item">
                                    <a href="/home" class="nk-menu-link">
                                        <span class="nk-menu-text">Trang Chủ</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item has-dropdown">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-text">Dịch Vụ</span>
                                    </a>
                                    <div class="nk-menu-dropdown nk-menu-mega">
                                        <div class="nk-menu-mega-wrap">
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a class="nk-menu-link" href="/home">Dịch Vụ Facebook</a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a class="nk-menu-link" href="/home">Dịch Vụ TikTok</a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a class="nk-menu-link" href="/home">Dịch Vụ Instagram</a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a class="nk-menu-link" href="/home">Dịch Vụ Twitter</a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a class="nk-menu-link" href="/home">Dịch Vụ Khác</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ DataSite('zalo') }}" class="nk-menu-link">
                                        <span class="nk-menu-text">Hỗ Trợ</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="nk-hero pb-xl-4">
                <div class="container">
                    <div class="row g-gs align-items-center justify-content-center justify-content-xl-between flex-xl-row-reverse text-center text-xl-start">
                        <div class="col-lg-6">
                            <div class="nk-hero-gfx me-xxl-n7">
                                <img class="w-100 rounded-3" src="/landing2/images/7178409.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="nk-hero-content">
                                <h5 class="fw-normal fst-italic mb-2">Xin chào các đối tác!</h5>
                                <h1 class="title mb-2">
                                    Hệ Thống Tương Tác <span class="text-gradient-info">Mạng Xã Hội.</span>
                                </h1>
                                <p class="lead">Trang web của chúng tôi cung cấp giải pháp SMM giá rẻ và hiệu quả, giúp bạn cải thiện tốt hơn việc quản lý và phát triển mạng xã hội của mình. Với các công cụ và dịch vụ được cung cấp, bạn có thể dễ dàng tăng lượng người theo dõi, lượt thích và lượt xem cho tài khoản của mình một cách hiệu quả.</p>
                                <ul class="btn-list btn-list-inline py-3 gy-3">
                                    <li>
                                        <a href="/auth/login" class="btn btn-primary btn-lg">
                                            <em class="icon ni ni-users-fill"></em>
                                            <span>Đăng Nhập</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/auth/register" class="btn btn-light btn-lg">
                                            <span>Đăng Ký</span>
                                            <em class="icon ni ni-arrow-long-right"></em>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="nk-pages">
            <section class="section section-lg section-bottom-0">
                <div class="container">
                    <div class="section-content">
                        <div class="row justify-content-center text-center g-gs">
                            <div class="col-xxl-10">
                                <!--<ul class="d-flex flex-wrap justify-content-center has-gap gy-3">
                                    <li class="px-3 px-xl-5">
                                        <img class="h-4rem visible-on-light-mode" src="/landing2/images/pattern/facebook.svg" alt="">
                                    </li>
                                    <li class="px-3 px-xl-5">
                                        <img class="h-4rem visible-on-light-mode" src="/landing2/images/pattern/tiktok.svg" alt="">
                                    </li>
                                    <li class="px-3 px-xl-5">
                                        <img class="h-4rem visible-on-light-mode" src="/landing2/images/pattern/instagram.svg" alt="">
                                    </li>
                                    <li class="px-3 px-xl-5">
                                        <img class="h-4rem visible-on-light-mode" src="/landing2/images/pattern/twitter.svg" alt="">
                                    </li>
                                    <li class="px-3 px-xl-5">
                                        <img class="h-4rem visible-on-light-mode" src="/landing2/images/pattern/youtube.svg" alt="">
                                    </li>
                                    <li class="px-3 px-xl-5">
                                        <img class="h-4rem visible-on-light-mode" src="/landing2/images/pattern/telegram.svg" alt="">
                                    </li>
                                    <li class="px-3 px-xl-5">
                                        <img class="h-4rem visible-on-light-mode" src="/landing2/images/pattern/google.svg" alt="">
                                    </li>
                                </ul>-->
                                <p class="fs-4 pt-3">Nhiều loại dịch vụ với sự hỗ trợ tương tác nhanh chóng.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section section-lg section-bottom-0 has-shape">
                <div class="nk-shape bg-shape-border-d mt-n8 mt-lg-n9 start-50 translate-middle-x"></div>
                <div class="container">
                    <div class="section-head">
                        <div class="row justify-content-center text-center">
                            <div class="col-lg-12 col-xl-12">
                                <h2 class="title">Tại sao bạn nên sử dụng dịch vụ {{ DataSite('namesite') }}?</h2>
                                <p class="lead">{{ DataSite('namesite') }} gần đây đã được một trong những bảng SMM tốt nhất và nhanh nhất thế giới tin cậy. Chúng tôi cung cấp Hỗ trợ 24/7, Dịch vụ SMM chất lượng tốt nhất, Tùy chọn thanh toán an toàn, Tăng trưởng tự nhiên và Dịch vụ 100% chính hãng, an toàn và bảo mật. {{ DataSite('namesite') }} giúp bạn cải thiện sự hiện diện trên mạng xã hội của mình.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-content">
                        <div class="row g-gs">
                            <div class="col-lg-4">
                                <div class="card bg-gradient-light border-0 h-100">
                                    <div class="card-body p-2 d-flex">
                                        <div class="feature feature-inline align-items-center">
                                            <div class="feature-text me-auto">
                                                <h4 class="title">Phương Thức Thanh Toán</h4>
                                                <p>Phương thức thanh toán đa dạng, duyệt hồ sơ nạp tiền nhanh chóng chỉ trong 30s.</p>
                                            </div>
                                            <div class="feature-decoration flex-shrink-0 ms-4 me-n3">
                                                <img src="/landing2/images/1-light.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card bg-gradient-light border-0 h-100">
                                    <div class="card-body p-2 d-flex">
                                        <div class="feature feature-inline align-items-center">
                                            <div class="feature-text me-auto">
                                                <h4 class="title">Dịch Vụ Chất Lượng</h4>
                                                <p>Người theo dõi, lượt thích và lượt xem SMM nhanh nhất và rẻ nhất hiện nay.</p>
                                            </div>
                                            <div class="feature-decoration flex-shrink-0 ms-4 me-n3">
                                                <img src="/landing2/images/2-light.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card bg-gradient-light border-0 h-100">
                                    <div class="card-body p-2 d-flex">
                                        <div class="feature feature-inline align-items-center">
                                            <div class="feature-text me-auto">
                                                <h4 class="title">Tốc Độ Xử Lý</h4>
                                                <p>Đơn đặt hàng khách hàng được chúng tôi xử lý cực kỳ nhanh chóng.</p>
                                            </div>
                                            <div class="feature-decoration flex-shrink-0 ms-4 me-n3">
                                                <img src="/landing2/images/3-light.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section section-lg section-bottom-0">
                <div class="container">
                    <div class="section-head">
                        <div class="row justify-content-center text-center">
                            <div class="col-lg-9 col-xl-7 col-xxl-8">
                                <h2 class="title h1">Bảng Giá Ưu Đãi Phù Hợp Với Tài Chính Người Dùng.</h2>
                            </div>
                        </div>
                    </div>
                    <div class="section-content">
                        <div class="row g-gs justify-content-center">
                            <div class="col-lg-4">
                                <div class="pricing shadow-none">
                                    <div class="pricing-body p-5 bg-gradient-light d-md-flex d-lg-block h-100">
                                        <div class="position-relative w-md-50 w-lg-100 pe-md-5 pe-lg-0 d-md-flex d-lg-block flex-column align-items-start">
                                            <div class="badge bg-primary rounded-pill position-absolute position-md-static position-lg-absolute  top-0 end-0 mb-3 px-2">Most Popular</div>
                                            <div class="fs-6 mb-2">Gói cao cấp</div>
                                            <h5 class="mb-3">Nhà Phân Phối</h5>
                                            <h3 class="h2 mb-4 mt-auto">
                                                 {{ number_format(DataSite('distributor')) }} </b> <span class="fs-3"> ₫                                             </h3>
                                            <a href="/home" class="btn btn-lg btn-block btn-primary rounded-1">
                                                <span>Xem Thêm</span>
                                                <em class="icon ni ni-arrow-long-right"></em>
                                            </a>
                                        </div>
                                        <ul class="list list-sap-border gx-0 gy-3 pt-5 pt-md-0 pt-lg-5 w-md-50 w-lg-100">
                                            <li>
                                                <em class="icon ni ni-check text-primary"></em>
                                                <span>Tạo trang web của riêng bạn</span>
                                            </li>
                                            <li>
                                                <em class="icon ni ni-check text-primary"></em>
                                                <span>Nhóm hỗ trợ 24/7 có sẵn.</span>
                                            </li>
                                            <li>
                                                <em class="icon ni ni-check text-primary"></em>
                                                <span>Chiết khấu dịch vụ hấp dẫn.</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 order-lg-first">
                                <div class="pricing shadow-none">
                                    <div class="pricing-body p-5 bg-gradient-light">
                                        <div class="position-relative">
                                            <div class="fs-6 mb-2">Gói cơ bản</div>
                                            <h5 class="mb-3">Cộng Tác Viên</h5>
                                            <h3 class="h2 mb-4"> {{ number_format(DataSite('collaborator')) }} </b> <span class="fs-3"> ₫ </h3>
                                            <a href="/home" class="btn btn-lg btn-block bg-dark bg-opacity-30 text-white hover-bg-primary rounded-1">
                                                <span>Xem Thêm</span>
                                                <em class="icon ni ni-arrow-long-right"></em>
                                            </a>
                                        </div>
                                        <ul class="list list-sap-border gx-0 gy-3 pt-5">
                                            <li>
                                                <em class="icon ni ni-check text-primary"></em>
                                                <span>Tạo trang web của riêng bạn</span>
                                            </li>
                                            <li>
                                                <em class="icon ni ni-check text-primary"></em>
                                                <span>Nhóm hỗ trợ 24/7 có sẵn.</span>
                                            </li>
                                            <li>
                                                <em class="icon ni ni-check text-primary"></em>
                                                <span>Chiết khấu dịch vụ hấp dẫn.</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing shadow-none">
                                    <div class="pricing-body p-5 bg-gradient-light">
                                        <div class="position-relative">
                                            <div class="fs-6 mb-2">Gói nâng cao</div>
                                            <h5 class="mb-3">Đại Lý</h5>
                                            <h3 class="h2 mb-4">
                                                 {{ number_format(DataSite('agency')) }} </b> <span class="fs-3"> ₫                                             </h3>
                                            <a href="/home" class="btn btn-lg btn-block bg-dark bg-opacity-30 text-white hover-bg-primary rounded-1">
                                                <span>Xem Thêm</span>
                                                <em class="icon ni ni-arrow-long-right"></em>
                                            </a>
                                        </div>
                                        <ul class="list list-sap-border gx-0 gy-3 pt-5">
                                            <li>
                                                <em class="icon ni ni-check text-primary"></em>
                                                <span>Tạo trang web của riêng bạn</span>
                                            </li>
                                            <li>
                                                <em class="icon ni ni-check text-primary"></em>
                                                <span>Nhóm hỗ trợ 24/7 có sẵn.</span>
                                            </li>
                                            <li>
                                                <em class="icon ni ni-check text-primary"></em>
                                                <span>Chiết khấu dịch vụ hấp dẫn.</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="nk-footer pt-7">
            <div class="section section-bottom-0">
                <div class="container">
                    <hr class="border-opacity-25 border-dark m-0">
                    <div class="py-5">
                        <div class="row">
                            <div class="col-md">
                                <p class="fw-bold text-dark">
                                    © 2024 {{ DataSite('namesite') }} Design by <a href="#" class="text"> {{ DataSite('nameadmin') }}.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="/landing2/js/bundle.js"></script>
        <script src="/landing2/js/scripts.js"></script>
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

    </body>
</html>
