<!--
                          ,
   ,-.       _,---._ __  / \
  /  )    .-'       `./ /   \
 (  (   ,'            `/    /|
  \  `-"             \'\   / |
   `.              ,  \ \ /  |
    /`.          ,'-`----Y   |
   (            ;        |   '
   |  ,-.    ,-'         |  /
   |  | (   |            | /
   )  |  \  `.___________|/
   `--'   `--'

© Bản quyền © TrumSubNgon.Vn | Hệ thống dịch vụ mạng xã hội số 1 Việt Nam
Author: Nguyễn Tấn Tài
Owner: NTT DEV
Message from owner: Đừng fake web bố
-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >

<head>
    <!--  Title -->
    <title>@yield('title')</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="{{ DataSite('description') }}" />
    <meta name="keywords" content="{{ DataSite('keyword') }}" />
    <meta name="title" content="{{ DataSite('title') }}" />
    <meta property="og:image" content="{{ DataSite('image_seo') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if (Auth::check())
        <meta name="api-token" content="{{ Auth::user()->api_token }}" />
    @endif
  

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
    {!! DataSite('script_header') !!}
</head>

 
<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default" >
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">