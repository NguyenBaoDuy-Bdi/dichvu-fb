<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}">
            <div class="app-container container-fluid d-flex align-items-stretch justify-content-between " id="kt_app_header_container">
                <div class="d-flex align-items-center d-lg-none ms-n3 me-2" title="Show sidebar menu">
                    <div class="btn btn-icon btn-color-gray-600 btn-active-color-primary w-40px h-40px" id="kt_app_header_menu_toggle">
                        <i class="ki-duotone ki-text-align-center">
                                <i class="path1"></i>
                                <i class="path2"></i>
                                <i class="path3"></i>
                                <i class="path4"></i>
                            </i>
                    </div>
                </div>
                <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
                    <a href="/home">
                        <img alt="NGUYEN TAN TAI" src="{{DataSite('logo') }}" class="w-150px d-none d-lg-inline app-sidebar-logo-default"/>
                    </a>
                </div>
                <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
                    <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}" >
                        <div class="menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 my-5 -lg-0 align-items-stretch fw-bolder px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true" >
                        <!--begin:Menu item-->

                        <!--end:Menu item-->
                        <!--begin:Menu item-->

                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                            data-kt-menu-placement="bottom-start"
                            class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-element-equal fs-3">
                                        <i class="path1"></i>
                                        <i class="path2"></i>
                                        <i class="path3"></i>
                                        <i class="path4"></i>
                                        <i class="path5"></i>
                                    </i>
                                </span>
                                <span class="menu-title">Hệ Thống</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">

                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link py-3" href="{{ route('home') }}">
                                        <span class="menu-icon">
                                            <i class="fas fa-home"></i>
                                        </span>
                                        <span class="menu-title">Trang chủ</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link py-3" href="{{ route('profile') }}">
                                        <span class="menu-icon">
                                            <i class="fas fa-shield"></i>
                                        </span>
                                        <span class="menu-title">Tài khoản cá nhân</span>
                                    </a>
                                </div>
                                
                                    <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link py-3" href="{{ route('recharge.transfer') }}">
                                        <span class="menu-icon">
                                            <i class="fas fa-wallet"></i>
                                        </span>
                                        <span class="menu-title">Nạp tiền tài khoản</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link py-3" href="{{ route('user.history') }}">
                                        <span class="menu-icon">
                                            <i class="fas fa-chart-bar"></i>
                                        </span>
                                        <span class="menu-title">Biến động số dư</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link py-3" href="{{ route('user.donhang') }}">
                                        <span class="menu-icon">
                                            <i class="fas fa-history"></i>
                                        </span>
                                        <span class="menu-title">Lịch sử mua hàng</span>
                                    </a>
                                </div>
                        
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link py-3" href="{{ route('service.price') }}">
                                        <span class="menu-icon">
                                            <i class="fas fa-tags"></i>
                                        </span>
                                        <span class="menu-title">Bảng Giá & Cấp Bậc</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2 ">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-triangle fs-3">
                                            <i class="path1"></i>
                                            <i class="path2"></i>
                                            <i class="path3"></i>
                                        </i>
                                    </span>
                                    <span class="menu-title">Dịch Vụ</span>
                                    <span class="menu-arrow d-lg-none"></span>
                                </span>
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown w-lg-250px ">
                                    
                                    
                                    
                                     
                                    
                                    
                                    
                                    
                                    
                                    
                                @inject('service_social', 'App\Models\ServiceSocial')
                                    @inject('service', 'App\Models\Service')

                                    @foreach ($service_social->where('domain', env('PARENT_SITE'))->where('status',
                                    'show')->get() as $item)
                                    
                                  <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                            <img src="{{ $item->image }}" width="20">
                                            </span>
                                            <span class="menu-title">{{ $item->name }}</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                    
                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg w-lg-275px" >
                                        @foreach ($service->where('domain', env('PARENT_SITE'))->where('status',
                                            'show')->where('service_social', $item->slug)->get() as $sv)                          <div class="menu-item">
                                                <a class="menu-link" href="{{ route('service.view', ['social' => $item->slug, 'service' => $sv->slug]) }}">
                                                    <span class="menu-icon">
                                                        @if ($sv->slug == 'proxy')
                                                            <i class="ki-duotone ki-diamonds fs-3"><i class="path1"></i><i class="path2"></i></i>
                                                        @endif
                                                        @if ($sv->slug == 'bot-tuong-tac')
                                                            <i class="ki-duotone ki-emoji-happy fs-3"><i class="path1"></i><i class="path2"></i><i class="path3"></i><i class="path4"></i></i>
                                                        @endif
                                                        @if ($sv->slug == 'buff-follow')
                                                            <i class="fa fa-heart"></i>
                                                        @endif
                                                        @if ($sv->slug == 'buff-subscribe')
                                                            <i class="fa fa-heart"></i>
                                                        @endif
                                                        @if ($sv->slug == 'like-post')
                                                            <i class="fa fa-thumbs-up"></i>
                                                        @endif
                                                        @if ($sv->slug == 'buff-like')
                                                            <i class="fa fa-thumbs-up"></i>
                                                        @endif
                                                        @if ($sv->slug == 'like-page')
                                                            <i class="fa fa-thumbs-up"></i>
                                                        @endif
                                                        @if ($sv->slug == 'like-comment')
                                                            <i class="fa fa-thumbs-up"></i>
                                                        @endif
                                                        @if ($sv->slug == 'eyes-live')
                                                            <i class="fa fa-eye"></i>
                                                        @endif
                                                        @if ($sv->slug == 'view-video')
                                                            <i class="fa fa-eye"></i>
                                                        @endif
                                                        @if ($sv->slug == 'buff-view')
                                                            <i class="fa fa-eye"></i>
                                                        @endif
                                                        @if ($sv->slug == 'view-story')
                                                            <i class="fa fa-eye"></i>
                                                        @endif
                                                        @if ($sv->slug == 'buff-comment')
                                                            <i class="fa fa-comments"></i>
                                                        @endif
                                                        @if ($sv->slug == 'review-page')
                                                            <i class="fa fa-star"></i>
                                                        @endif
                                                        @if ($sv->slug == 'action-story')
                                                            <i class="fa fa-heart"></i>
                                                        @endif
                                                        @if ($sv->slug == 'review')
                                                            <i class="fa fa-star"></i>
                                                        @endif
                                                        @if ($sv->slug == 'vip-like')
                                                            <i class="fa fa-thumbs-up"></i>
                                                        @endif
                                                        @if ($sv->slug == 'save-video')
                                                            <i class="fa fa-heart"></i>
                                                        @endif
                                                        @if ($sv->slug == 'like-share')
                                                            <i class="fa fa-thumbs-up"></i>
                                                        @endif
                                                        @if ($sv->slug == 'member-group')
                                                            <i class="fa fa-users"></i>
                                                        @endif
                                                        @if ($sv->slug == 'buff-member')
                                                            <i class="fa fa-users"></i>
                                                        @endif
                                                        @if ($sv->slug == 'checkin')
                                                            <i class="fa fa-check-circle"></i>
                                                        @endif
                                                        @if ($sv->slug == 'buff-share')
                                                            <i class="fa fa-share"></i>
                                                        @endif
                                                        @if ($sv->slug == 'retweet')
                                                            <i class="fa fa-retweet"></i>
                                                        @endif
                                                        @if ($sv->slug == 'view-4k')
                                                            <i class="fa fa-hourglass-start"></i>
                                                        @endif
                                                        @if ($sv->slug == 'review-maps')
                                                            <i class="fa fa-search-location"></i>
                                                        @endif
                                                        @if ($sv->slug == 'pins')
                                                            <i class="fa fa-map-pin"></i>
                                                        @endif
                                                        @if ($sv->slug == 'traffic')
                                                            <i class="fa fa-globe-asia"></i>
                                                        @endif
                                                    </span>
                                                    <span class="menu-title">{{ $sv->name }}</span>
                                                </a>
                                            </div>
                                            @endforeach
                                                                                    </div>
                                    </div>
                           
                        
                                    
                                    
                        @endforeach
                                </div>
                            </div>
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-diamonds fs-3">
                                            <i class="path1"></i>
                                            <i class="path2"></i>
                                        </i>
                                    </span>
                                    <span class="menu-title">Tiện Ích</span>
                                    <span class="menu-arrow d-lg-none"></span>
                                </span>
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown w-lg-250px" style="">
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('tool.uid') }}">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-scan-barcode fs-3">
                                                    <i class="path1"></i>
                                                    <i class="path2"></i>
                                                    <i class="path3"></i>
                                                    <i class="path4"></i>
                                                    <i class="path5"></i>
                                                    <i class="path6"></i>
                                                    <i class="path7"></i>
                                                    <i class="path8"></i>
                                                </i>
                                            </span>
                                            <span class="menu-title">Get UID Facebook</span>
                                        </a>
                                    </div>
                               
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('tool.2fa') }}">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-key-square fs-3">
                                                    <i class="path1"></i>
                                                    <i class="path2"></i>
                                                </i>
                                            </span>
                                            <span class="menu-title">TwoFA Facebook</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('tool.domain') }}">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-share fs-3">
                                                    <i class="path1"></i>
                                                    <i class="path2"></i>
                                                    <i class="path3"></i>
                                                     <i class="path4"></i>
                                                     <i class="path5"></i>
                                                     <i class="path6"></i>
                                                </i>
                                            </span>
                                            <span class="menu-title">Whois Tên Miền</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <div class="menu-item">
                                <a class="menu-link" href="{{ route('create.website') }}">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-disconnect fs-3">
                                            <i class="path1"></i>
                                            <i class="path2"></i>
                                            <i class="path3"></i>
                                            <i class="path4"></i>
                                            <i class="path5"></i>
                                        </i>
                                    </span>
                                    <span class="menu-title">Tạo Website</span>
                                </a>
                                </div>
                            <div class="menu-item">
                                <a class="menu-link" href="{{ route('support') }}">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-support-24 fs-3">
                                            <i class="path1"></i>
                                            <i class="path2"></i>
                                            <i class="path3"></i>
                                        </i>
                                    </span>
                                    <span class="menu-title">Hỗ Trợ</span>
                                </a>
                            </div>
                        
                        <div class="menu-item">
                                <a class="menu-link" href="{{ route('document') }}">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-document fs-3">
                                            <i class="path1"></i>
                                            <i class="path2"></i>
                                        </i>
                                    </span>
                                    <span class="menu-title">Tài Liệu API</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="{{ route('dieukhoan') }}">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-question fs-3">
                                            <i class="path1"></i>
                                            <i class="path2"></i>
                                            <i class="path3"></i>
                                        </i>
                                    </span>
                                    <span class="menu-title">Chính Sách</span>
                                </a>
                            </div>
                            @if (Auth::user()->position == 'admin')
                            <div class="menu-item">
                                <a class="menu-link" href="{{ route('admin.dashboard') }}">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-setting fs-3">
                                            <i class="path1"></i>
                                            <i class="path2"></i>
                                        </i>
                                    </span>
                                    <span class="menu-title">ADMIN QUẢN TRỊ</span>
                                </a>
                            </div>
                            @endif
                        <!--end:Menu item-->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Menu wrapper-->
            </div>
            <!--end::Logo and search-->
            <!--begin::Navbar-->
            <div class="app-navbar flex-shrink-0">
                <!--begin::Notifications-->
                <div class="app-navbar-item">
                    <!--begin::Menu- wrapper-->
                    <div class="btn btn-icon btn-icon-gray-600 btn-active-color-primary"
                        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                        data-kt-menu-placement="bottom">
                        <i class="ki-solid ki-notification-on fs-1"></i>
                    </div>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications" style="z-index: 107; position: fixed; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(606.4px, 60px, 0px);" data-popper-placement="bottom">
                                    <div class="d-flex flex-column rounded-top" style="background-color: var(--drake-primary)">
                                        <h3 class="text-white fw-bolder py-5 px-8 mb-0">
                                            Thông Báo Hệ Thống
                                        </h3>
                                    </div>
                                    <div class="scroll-y mh-325px my-3 px-8">
                                     @foreach ($activitiessystem as $item)
                                                                                <div class="d-flex flex-stack py-4">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-35px me-4">
                                                    <span class="symbol-label bg-light-primary">
                                                        <i class="ki-duotone ki-like-tag fs-2 text-primary">
                                                            <i class="path1"></i>
                                                            <i class="path2"></i>
                                                        </i>
                                                    </span>
                                                </div>
                                                <div class="mb-0 me-2">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">{{ $item->name }}</a>
                                                    <div class="text-gray-400 fs-7"><p>{!! $item->content !!}</p></div>
                                                </div>
                                            </div>
                                            <span class="badge badge-primary fs-8">{{ timeago($item->created_at) }}</span>
                                        </div>
                                        @endforeach
                                                                            </div>
                                    <div class="py-3 text-center border-top">
                                        <button data-bs-target="#modalServices" data-bs-toggle="modal" href="javascript:void(0)" class="btn btn-color-gray-600 btn-active-color-primary">
                                            Xem Tất Cả
                                            <i class="ki-outline ki-arrow-right fs-5"></i>
                                        </button>
                                    </div>
                                </div>
                    <!--end::Menu-->
                    <!--end::Menu wrapper-->
                </div>
                <!--end::Notifications-->
                <!--begin::Chat-->
                 
                <!--end::Chat-->
                <!--begin::Balance-->
               
                <!--end::Balance-->
                <!--begin::User menu-->
                <div class="app-navbar-item ms-3 ms-lg-5" id="kt_header_user_menu_toggle">
                    <div class="btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 ps-2 pe-2 me-n2"
                        data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <div class="d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4">
                            <span class="text-dark opacity-75 fs-8 fw-semibold lh-1 mb-1">Xin chào</span>
                            <span class="text-dark fs-7 fw-bolder lh-1">{{ Auth::user()->username }}</span>
                        </div>
                        <div class="symbol symbol-25px symbol-md-35px">
                            <img src="{{ Auth::user()->avatar }}"
                                alt="image">
                        </div>
                    </div>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-bold py-4 fs-6 w-275px"
                        data-kt-menu="true" style="">
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <div class="symbol symbol-50px me-5">
                                    <img alt="image"
                                        src="{{ Auth::user()->avatar }}">
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">
                                        {{ Auth::user()->username }}
                                    </div>
                                    <span class="fw-semibold text-muted fs-7">
                                        Số dư: <b class="text-danger"> {{ number_format(Auth::user()->balance) }}₫ </b>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="separator my-2"></div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('profile') }}">
                                <span class="menu-icon">
                                    <i class="fas fa-shield"></i>
                                </span>
                                <span class="menu-title">Thông Tin Tài Khoản</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('recharge.transfer') }}">
                                <span class="menu-icon">
                                    <i class="fas fa-wallet"></i>
                                </span>
                                <span class="menu-title">Nạp Tiền Tài Khoản</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('user.history') }}">
                                <span class="menu-icon">
                                    <i class="fas fa-chart-bar"></i>
                                </span>
                                <span class="menu-title">Biến Động Số Dư</span>
                            </a>
                        </div>
                         <div class="menu-item">
                            <a class="menu-link" href="{{ route('user.donhang') }}">
                                <span class="menu-icon">
                                    <i class="fas fa-history"></i>
                                </span>
                                <span class="menu-title">Lịch sử đơn hàng</span>
                            </a>
                        </div>
                
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('logout') }}">
                                <span class="menu-icon">
                                    <i class="fas fa-sign-out-alt"></i>
                                </span>
                                <span class="menu-title">Đăng Xuất Tài Khoản</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end::User menu-->
                <!--begin::Header menu toggle-->
                <div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
                    <div class="btn btn-icon btn-color-gray-500 btn-active-color-primary w-35px h-35px"
                        id="kt_app_header_menu_toggle">
                        <i class="ki-solid ki-text-align-left fs-1"></i>
                    </div>
                </div>
                <!--end::Header menu toggle-->
            </div>
            <!--end::Navbar-->
        </div>
        <!--end::Header primary container-->
    
    <!--end::Header primary-->
    <!--begin::Header secondary-->
 
 
</div>
@yield('content')