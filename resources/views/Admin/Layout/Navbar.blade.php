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
                        <img alt="NGUYENTANTAI" src="{{ DataSite('logo') }}" class="w-150px d-none d-lg-inline app-sidebar-logo-default"/>
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
                    
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link py-3" href="{{ route('admin.dashboard') }}">
                                        <span class="menu-icon">
                                            <i class="fa-solid fa-house-chimney"></i>
                                        </span>
                                        <span class="menu-title">Trang admin</span>
                                    </a>
                                </div>
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-gear fs-3">
                                            <i class="path1"></i>
                                            <i class="path2"></i>
                                        </i>
                                    </span>
                                    <span class="menu-title">Cấu hình</span>
                                    <span class="menu-arrow d-lg-none"></span>
                                </span>
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown w-lg-250px" style="">
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('admin.website.config') }}">
                                            <span class="menu-icon">
                                            <i class="fa-solid fa-file"></i>
                                            </span>
                                            <span class="menu-title">Cấu hình website</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('admin.config.telegram') }}">
                                            <span class="menu-icon">
                                            <i class="fa-brands fa-telegram"></i>
                                            </span>
                                            <span class="menu-title">Cấu hình telegram</span>
                                        </a>
                                    </div>
                               
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('admin.website.theme') }}">
                                            <span class="menu-icon">
                                            <i class="fa-solid fa-display"></i>
                                            </span>
                                            <span class="menu-title">Cấu hình giao diện</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('admin.website.partner') }}">
                                            <span class="menu-icon">
                                            <i class="fa-regular fa-handshake"></i>
                                            </span>
                                            <span class="menu-title">Cấu hình đối tác</span>
                                        </a>
                                    </div>
                                     
                                </div>
                            </div>
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-message-edit fs-3">
                                            <i class="path1"></i>
                                            <i class="path2"></i>
                                        </i>
                                    </span>
                                    <span class="menu-title">Quản lí thông báo</span>
                                    <span class="menu-arrow d-lg-none"></span>
                                </span>
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown w-lg-250px" style="">
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('admin.notification') }}">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-message-text-2 fs-3">
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
                                            <span class="menu-title">Quản lí thông báo</span>
                                        </a>
                                    </div>
                               
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('admin.activity') }}">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-calendar-add fs-3">
                                                    <i class="path1"></i>
                                                    <i class="path2"></i>
                                                </i>
                                            </span>
                                            <span class="menu-title">Quản lí hoạt động</span>
                                        </a>
                                    </div>
            
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('admin.activitysystem') }}">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-notification-on fs-3">
                                                    <i class="path1"></i>
                                                    <i class="path2"></i>
                                                </i>
                                            </span>
                                            <span class="menu-title">Quản lí thông báo hệ thống</span>
                                        </a>
                                    </div>
                                    
                                 
                                </div>
                            </div>
                                

                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="fas fa-credit-card-alt fs-3">
                                         
                                        </i>
                                    </span>
                                    <span class="menu-title">Cấu hình nạp tiền</span>
                                    <span class="menu-arrow d-lg-none"></span>
                                </span>
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown w-lg-250px" style="">
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('admin.recharge.config') }}">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-bank fs-3">
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
                                            <span class="menu-title">Cấu hình auto</span>
                                        </a>
                                    </div>
                               
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('admin.recharge.add') }}">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-fingerprint-scanning fs-3">
                                                    <i class="path1"></i>
                                                    <i class="path2"></i>
                                                </i>
                                            </span> 
                                            <span class="menu-title">Thêm tài khoản ngân hàng (Không auto)</span>
                                        </a>
                                    </div>
                                    
                                 
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
                                    <span class="menu-title">Quản lí thành viên</span>
                                    <span class="menu-arrow d-lg-none"></span>
                                </span>
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown w-lg-250px" style="">
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('admin.user.list') }}">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-people fs-3">
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
                                            <span class="menu-title">Danh sách thành viên</span>
                                        </a>
                                    </div>
                               
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('admin.user.balance') }}">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-user-edit fs-3">
                                                    <i class="path1"></i>
                                                    <i class="path2"></i>
                                                </i>
                                            </span>
                                            <span class="menu-title">Cộng/Trừ tiên</span>
                                        </a>
                                    </div>
                                     
                                </div>
                            </div>
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                    <i class="fas fa-chart-bar"></i>
                                    </span>
                                    <span class="menu-title">Quản lí dịch vụ</span>
                                    <span class="menu-arrow d-lg-none"></span>
                                </span>
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown w-lg-250px" style="">
                                @if (getDomain() == env('PARENT_SITE'))
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('admin.service.new.social') }}">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-burger-menu-6 fs-3">
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
                                            <span class="menu-title">Thêm dịch vụ MXH</span>
                                        </a>
                                    </div>
                                  
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('admin.service.new') }}">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-key-square fs-3">
                                                    <i class="path1"></i>
                                                    <i class="path2"></i>
                                                </i>
                                            </span>
                                            <span class="menu-title">Thêm dịch vụ</span>
                                        </a>
                                    </div>
                                    @endif
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('admin.server.list') }}">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-purchase fs-3">
                                                    <i class="path1"></i>
                                                    <i class="path2"></i>
                                                    <i class="path3"></i>
                                                     <i class="path4"></i>
                                                     <i class="path5"></i>
                                                     <i class="path6"></i>
                                                </i>
                                            </span>
                                            <span class="menu-title">Thêm máy chủ dịch vụ</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('admin.server.price') }}">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-abstract-4 fs-3">
                                                    <i class="path1"></i>
                                                    <i class="path2"></i>
                                                    <i class="path3"></i>
                                                     <i class="path4"></i>
                                                     <i class="path5"></i>
                                                     <i class="path6"></i>
                                                </i>
                                            </span>
                                            <span class="menu-title">Chỉnh giá máy chủ</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                    <i class="fa-solid fa-filter"></i>
                                    </span>
                                    <span class="menu-title">Lịch sử dữ liệu</span>
                                    <span class="menu-arrow d-lg-none"></span>
                                </span>
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown w-lg-250px" style="">
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('admin.history.user') }}">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-faceid fs-3">
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
                                            <span class="menu-title">Lịch sử người dùng</span>
                                        </a>
                                    </div>
                               
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('admin.history.order') }}">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-cheque">
                                                    <i class="path1"></i>
                                                    <i class="path2"></i>
                                                    <i class="path3"></i>
                                                    <i class="path4"></i>
                                                    <i class="path5"></i>
                                                    <i class="path6"></i>
                                                    <i class="path7"></i>
                                                </i>
                                            </span>
                                            <span class="menu-title">Lịch sử đặt đơn</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('admin.history.recharge') }}">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-chart-line fs-3">
                                                    <i class="path1"></i>
                                                    <i class="path2"></i>
                                                    <i class="path3"></i>
                                                     <i class="path4"></i>
                                                     <i class="path5"></i>
                                                     <i class="path6"></i>
                                                </i>
                                            </span>
                                            <span class="menu-title">Lịch sử nạp tiền</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('admin.history.card') }}">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-wallet fs-3">
                                                    <i class="path1"></i>
                                                    <i class="path2"></i>
                                                    <i class="path3"></i>
                                                     <i class="path4"></i>
                                                     <i class="path5"></i>
                                                     <i class="path6"></i>
                                                </i>
                                            </span>
                                            <span class="menu-title">Lịch sử nạp thẻ cào</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('admin.history.login') }}">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-security-user fs-3">
                                                    <i class="path1"></i>
                                                    <i class="path2"></i>
                                                    <i class="path3"></i>
                                                     <i class="path4"></i>
                                                     <i class="path5"></i>
                                                     <i class="path6"></i>
                                                </i>
                                            </span>
                                            <span class="menu-title">Lịch sử đăng nhập</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        
                         
                        <div class="menu-item">
                                <a class="menu-link" href="{{ route('admin.website-child.list') }}">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-disconnect fs-3">
                                            <i class="path1"></i>
                                            <i class="path2"></i>
                                            <i class="path3"></i>
                                            <i class="path4"></i>
                                            <i class="path5"></i>
                                        </i>
                                    </span>
                                    <span class="menu-title">Quản lí website con</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="{{ route('admin.support') }}">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-support-24 fs-3">
                                            <i class="path1"></i>
                                            <i class="path2"></i>
                                            <i class="path3"></i>
                                            <i class="path4"></i>
                                            <i class="path5"></i>
                                        </i>
                                    </span>
                                    <span class="menu-title">Xử lí hỗ trợ</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="{{ route('admin.newsannouncement') }}">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-text-italic fs-3">
                                            <i class="path1"></i>
                                            <i class="path2"></i>
                                            <i class="path3"></i>
                                            <i class="path4"></i>
                                            <i class="path5"></i>
                                        </i>
                                    </span>
                                    <span class="menu-title">Thêm tin tức</span>
                                </a>
                            </div>
                        
                           
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
                   
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications" style="z-index: 107; position: fixed; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(606.4px, 60px, 0px);" data-popper-placement="bottom">
                                    <div class="d-flex flex-column rounded-top" style="background-color: var(--drake-primary)">
                                        <h3 class="text-white fw-bolder py-5 px-8 mb-0">
                                            Thông Báo Hệ Thống
                                        </h3>
                                    </div>
                                    <div class="scroll-y mh-325px my-3 px-8">
                                
                                   
                                                                              
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
                            <a class="menu-link" href="{{ route('home') }}">
                                <span class="menu-icon">
                                    <i class="fas fa-arrow-rotate-left"></i>
                                </span>
                                <span class="menu-title">Quay Lại Trang Chủ</span>
                            </a>
                        </div>
                        <div class="separator my-2"></div>
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