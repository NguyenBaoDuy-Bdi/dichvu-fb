@extends('Layout.App')

@section('title', 'Chính Sách & Điều Khoản')

@section('content')
        <div class="app-wrapper" id="kt_app_wrapper">
            <div id="kt_app_toolbar_container" class="app-container container-fluid">
                

                        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="card card-flush">
                    <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                        QUY ĐỊNH CHUNG
                            <span class="ribbon-inner bg-default"></span>
                        </div>
                    </div>
                    <div class="card-body pt-2">
                                        <p>Khi bạn sử dụng các dịch vụ trên website {{ DataSite('namesite') }} có nghĩa là bạn đã đọc và đồng ý với các Quy định, Điều kiện,
	Điều khoản dưới đây</p>

<p><strong>QUY ĐỊNH VỀ XU</strong></p>

<ul>
	<li>Để có xu, người dùng có thể donate (<a href="{{ route('recharge.transfer') }}">Nạp xu</a>)&nbsp;để nhận số
		lượng xu tương đương giá trị đã donate.</li>
	<li><span style="color:#e74c3c">Hình thức donate để lấy xu là hoàn toàn tự nguyện, ko phải là dịch vụ trao đổi mua
			bán.</span></li>
	<li>Khi donate người dùng sẽ nhận được xu và số lượng xu này ko thể quy đổi ngược lại.</li>
</ul>

<p><strong>QUY ĐỊNH VỀ DỊCH VỤ</strong></p>

<ul>
	<li>Người dùng có thể dùng xu đã donate để trao đổi các dịch vụ seeding có trên website {{ DataSite('namesite') }}.</li>
	<li>Mỗi dịch vụ có các quy định khác nhau, các bạn có thể xem chi tiết điều khoản&nbsp;từng dịch vụ trước khi sử
		dụng.</li>
	<li>Các quy định về dịch vụ có thể thay đổi theo thời gian để phù hợp với quy định pháp luật&nbsp;và được cập nhật
		trên website.</li>
</ul>

<p><strong>ĐỐI VỚI BÊN DONATE XU</strong></p>

<ul>
	<li><span style="color:#e74c3c">Không seeding các nội dung vi phạm pháp luật Việt Nam, nếu cố tình vi phạm&nbsp;sẽ
			bị khóa tài khoản trên website {{ DataSite('namesite') }} và&nbsp;phải chịu hoàn toàn trách nhiệm trước pháp luật.</span>
	</li>
	<li>Nếu các dịch vụ trên website {{ DataSite('namesite') }} hoạt động không đúng với mô tả, vui lòng liên hệ với chúng tôi để được
		hỗ trợ giải quyết.</li>
</ul>

<p><strong>ĐỐI VỚI BÊN NHẬN DONATE XU</strong></p>

<ul>
	<li>Chúng tôi có trách nhiệm hoàn thành các nội dung seeding được yêu cầu.</li>
	<li>Tiếp nhận xử lý các lỗi do người dùng báo cáo.</li>
	<li>
		<p><span style="color:#e74c3c">Từ chối hỗ trợ các uid có nội dung seeding vi phạm quy định của website và
				không&nbsp;thực hiện theo hướng dẫn.</span></p>
	</li>
</ul>

<p><strong>QUY ĐỊNH, CHÍNH SÁCH BẢO MẬT</strong></p>

<ul>
	<li>Chúng tôi thu thập tất cả các thông tin người dùng như: Họ tên, số điện thoại, email, IP, uid và nội dung
		seeding cho mục đích chăm sóc khách hàng và xử lý các hành vi vi phạm nếu có.</li>
	<li>Chúng tôi KHÔNG thu thập hay lưu trữ các thông tin như: Tài khoản ngân hàng, MOMO....</li>
	<li>Mọi thông tin người dùng hoàn toàn&nbsp;được bảo mật.</li>
</ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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