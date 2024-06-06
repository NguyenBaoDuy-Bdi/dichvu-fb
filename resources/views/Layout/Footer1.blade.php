 
</div>
</div>
</div>
 
</div>
</div>
</div>
   <footer class="footer">
<div id="kt_app_footer" class="app-footer bg-white d-flex flex-column flex-md-row align-items-center flex-center flex-md-stack py-4 py-lg-10">
    <div class="container-xxl">
        <div class="mb-3">
            <a href="javascript:void(0);">
                <img alt="" src="{{ DataSite('logo') }}" class="w-150px">
            </a>
        </div>
        <div class="row">
            <div class="col-lg-3 mt-3">
                <div class="text-dark order-2 order-md-1">
                    <h4 class="fw-bolder">Hệ Thống Tăng Tương Tác Mạng Xã Hội Nhanh Chóng - Uy Tín</h4>
                    <p class="fw-bold">{{ DataSite('namesite') }} chuyên cung cấp các dịch vụ tăng Like, Share, Comment,
                        Follow... cho các Mạng xã hội như Facebook, Instagram, Tikok, Youtube, Shopee giá rẻ và chất
                        lượng nhất</p>
                </div>
            </div>
            <div class="col-lg-3 mt-3">
                <span class="d-flex position-relative">
                    <span class="d-inline-block mb-2 fs-5 fw-bolder text-dark">
                        THÔNG TIN
                    </span>
                    <span class="d-inline-block position-absolute h-2px bottom-0 end-0 start-0 bg-secondary translate rounded"></span>
                </span>
                <div class="d-flex flex-column mt-3">
                    <ul>
                        <li class="mb-3">
                            <a class="text-dark text-hover-primary" href="{{ DataSite('zalo') }}">Zalo hỗ trợ</a>
                        </li>
                        <li class="mb-3">
                            <a class="text-dark text-hover-primary" href="{{ DataSite('telegram') }}">Telegram Hỗ trợ</a>
                        </li>
                        <li class="mb-3">
                            <a class="text-dark text-hover-primary" href="{{ DataSite('facebook') }}">Facebook hỗ trợ</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 mt-3">
                <span class="d-flex position-relative">
                    <span class="d-inline-block mb-2 fs-5 fw-bolder text-dark">
                        ĐỐI TÁC
                    </span>
                    <span class="d-inline-block position-absolute h-2px bottom-0 end-0 start-0 bg-secondary translate rounded"></span>
                </span>
                <div class="d-flex flex-column mt-3">
                    <ul>
                        <li class="mb-3">
                            <a class="text-dark text-hover-primary" href="https://{{ DataSite('partner1') }}">{{ DataSite('partner1') }}</a>
                        </li>
                        <li class="mb-3">
                            <a class="text-dark text-hover-primary" href="https://{{ DataSite('partner2') }}">{{ DataSite('partner2') }}</a>
                        </li>
                        <li class="mb-3">
                            <a class="text-dark text-hover-primary" href="https://{{ DataSite('partner3') }}">{{ DataSite('partner3') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 mt-3">
                <span class="d-flex position-relative">
                    <span class="d-inline-block mb-2 fs-5 fw-bolder text-dark">
                        LIÊN HỆ
                    </span>
                    <span
                        class="d-inline-block position-absolute h-2px bottom-0 end-0 start-0 bg-secondary translate rounded"></span>
                </span>
                <div class="d-flex flex-column mt-3">
                    <p class="mb-3 text-hover-primary">
                        <i class="fas fa-phone text-dark"></i> {{ DataSite('phone') }}
                    </p>
                    <p class="mb-3 text-hover-primary">
                        <i class="fas fa-envelope text-dark"></i> {{ DataSite('email') }}
                    </p>
                    <p>
                        <a href="{{ DataSite('facebook') }}" class="me-4 text-hover-primary">
                            <i class="fab fa-facebook-f text-dark"></i>
                        </a>
                        <a href="{{ DataSite('youtube') }}" class="px-4 text-hover-primary">
                            <i class="fab fa-youtube text-dark"></i>
                        </a>
                        <a href="{{ DataSite('telegram') }}" class="px-4 text-hover-primary">
                            <i class="fab fa-telegram text-dark"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-body">
    <div class="app-container container-xxl flex-column flex-md-row flex-md-stack gap-2 py-4 py-lg-6">
        <div class="row">
            <div class="col-6 d-flex align-items-center order-2 order-lg-1">
                <p class="fw-bold">© Bản quyền © {{ DataSite('namesite') }} | Hệ thống dịch vụ mạng xã hội số 1 Việt Nam</p>
            </div>
            <div class="col-6 d-flex align-items-center order-2 order-lg-1">
                <div class="nav-item dropdown">
                    <a class="nav-link pe-0" href="javascript:void(0);" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <button class="btn btn-dropdown btn-primary dropdown-toggle" type="button" id="dropdownLanguage"
                            data-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-globe"></i>
                            <span>Ngôn ngữ</span>
                        </button>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end py-0">
                        <div class="bg-white dark__bg-1000 rounded-2 py-2">
                            <a class="dropdown-item" onclick="doGTranslate('en|vi');" href="javascript:void(0);">
                                Tiếng Việt
                            </a>
                            <a class="dropdown-item" onclick="doGTranslate('vi|en');" href="javascript:void(0);">
                                English
                            </a>
                            <div id="google_translate_element2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</footer> 
 

<script>var hostUrl = "/assets5/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="/assets5/plugins/global/plugins.bundle.js"></script>
		<script src="/assets5/js/scripts.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.12/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="/assets5/plugins/custom/datatables/datatables.bundle.js"></script>
 <script src="/assets5/js/lamtilo.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/assets2/js/plugins/jquery.dataTables.min.js"></script>
    <script src="/assets2/js/plugins/dataTables.bootstrap5.min.js"></script>
 
 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.js"></script>    
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.12/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
 
 <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="/assets/js/ptl1.js?time={{ time() }}"></script>
<script>
    function googleTranslateElementInit2() {
        new google.translate.TranslateElement({ pageLanguage: 'vi', autoDisplay: false }, 'google_translate_element2');
    }
    if (!window.gt_translate_script) {
        window.gt_translate_script = document.createElement('script');
        gt_translate_script.src = 'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2';
        document.body.appendChild(gt_translate_script);
    }
</script>
<script>
    function GTranslateGetCurrentLang() {
        var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');
        return keyValue ? keyValue[2].split('/')[2] : null;
    }

    function GTranslateFireEvent(element, event) {
        try {
            if (document.createEventObject) {
                var evt = document.createEventObject();
                element.fireEvent('on' + event, evt)
            } else {
                var evt = document.createEvent('HTMLEvents');
                evt.initEvent(event, true, true);
                element.dispatchEvent(evt)
            }
        } catch (e) { }
    }

    function doGTranslate(lang_pair) {
        if (lang_pair.value) lang_pair = lang_pair.value;
        if (lang_pair == '') return;
        var lang = lang_pair.split('|')[1];
        if (GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0]) return;
        if (typeof ga == 'function') {
            ga('send', 'event', 'GTranslate', lang, location.hostname + location.pathname + location.search);
        }
        var teCombo;
        var sel = document.getElementsByTagName('select');
        for (var i = 0; i < sel.length; i++)
            if (sel[i].className.indexOf('goog-te-combo') != -1) {
                teCombo = sel[i];
                break;
            } if (document.getElementById('google_translate_element2') == null || document.getElementById('google_translate_element2').innerHTML.length == 0 || teCombo.length == 0 || teCombo.innerHTML.length == 0) {
                setTimeout(function () {
                    doGTranslate(lang_pair)
                }, 500)
            } else {
            teCombo.value = lang;
            GTranslateFireEvent(teCombo, 'change');
            GTranslateFireEvent(teCombo, 'change')
        }
    }
</script>

{!! DataSite('script_footer') !!}
@if (session('error'))
    <script>
          swa1('{{ session('error') }}','error')
    </script>
@endif
@if (session('success'))
    <script>
          swa1('{{ session('success') }}','success')
    </script>
@endif
@if (Auth::check())
    <script>
        callAjax('{{ route('user.action', 'level-user') }}', {
            _token: '{{ csrf_token() }}',
            user: '{{ Auth::user()->level }}'
        }).then(res => {
            if (res.status == 'success') {
             swa1(res.message,'success')
            }
        })
    </script>
@endif

@yield('script')



</body>

</html>
