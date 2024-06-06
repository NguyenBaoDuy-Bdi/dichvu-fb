@extends('Layout.App')
@section('title', 'Bảng giá dịch vụ')

@section('content')
<div class="app-wrapper" id="kt_app_wrapper">
            <div id="kt_app_toolbar_container" class="app-container container-fluid">
                <div class="row">
                            <div class="col-md-12 mb-5">
                                <div class="card">
                                    <div class="card-body">
                                        <a data-bs-toggle="collapse" href="#collapseLevel" role="button" aria-expanded="true" aria-controls="collapseLevel" class="alert bg-danger w-100 d-flex text-danger mb-2"> Cấp Bậc Thành Viên</a>
                                        <div id="collapseLevel" class="collapse">
                                             <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="d-flex h-100 align-items-center">
                                                                <div class="w-100 d-flex flex-column flex-center">
                                                                    <div class="mb-7 text-center">
                                                                        <div class="card-avatar">
                                                                            <img src="/trumsubngon/congtacvien.png" alt="">
                                                                            <h2 class="text-uppercase">Cộng tác viên</h2>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <b class="fs-3x fw-bolder text-danger"> {{ number_format(DataSite('collaborator')) }} </b> <span class="fs-3"> ₫ </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <ul>
                                                                <li>Giảm giá dịch vụ, tạo website riêng, giao diện riêng.</li>
                                                                <li>Có ưu đãi dịch vụ.</li>
                                                            </ul>
                                                            <div class="d-grid">
                                                                <a href="{{ route('recharge.transfer') }}" class="btn btn-active btn-info">Cộng Tác Viên</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="d-flex h-100 align-items-center">
                                                                <div class="w-100 d-flex flex-column flex-center">
                                                                    <div class="mb-7 text-center">
                                                                        <div class="card-avatar">
                                                                            <img src="/trumsubngon/daily.png" alt="">
                                                                            <h2 class="text-uppercase">Đại lý</h2>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <b class="fs-3x fw-bolder text-danger"> {{ number_format(DataSite('agency')) }} </b> <span class="fs-3"> ₫ </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <ul>
                                                                <li>Giảm giá dịch vụ, tạo website riêng, hỗ trợ riêng, giao diện riêng.</li>
                                                                <li>Có ưu đãi dịch vụ.</li>
                                                            </ul>
                                                            <div class="d-grid">
                                                                 <a href="{{ route('recharge.transfer') }}" class="btn btn-active btn-danger">Đại Lý</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="d-flex h-100 align-items-center">
                                                                <div class="w-100 d-flex flex-column flex-center">
                                                                    <div class="mb-7 text-center">
                                                                        <div class="card-avatar">
                                                                            <img src="/trumsubngon/nhaphanphoi.png" alt="">
                                                                            <h2 class="text-uppercase">Nhà phân phối</h2>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <b class="fs-3x fw-bolder text-danger"> {{ number_format(DataSite('distributor')) }} </b> <span class="fs-3"> ₫ </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <ul>
                                                                <li>Giảm giá dịch vụ, tạo website riêng, hỗ trợ riêng, giao diện riêng.</li>
                                                                <li>Có ưu đãi dịch vụ.</li>
                                                            </ul>
                                                            <div class="d-grid">
                                                                <a href="{{ route('recharge.transfer') }}" class="btn btn-active btn-primary">Nhà Phân Phối</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a data-bs-toggle="collapse" href="#collapsePrice" role="button" aria-expanded="true" aria-controls="collapsePrice" class="alert bg-success w-100 d-flex text-success"> Bảng Giá Dịch Vụ</a>
                                        <div id="collapsePrice" class="collapse">
                                            <div class="pt-0 p-4">
  @foreach ($services as $item)

        <h5 class="table-toggle collapsed" data-bs-toggle="collapse" data-bs-target="#collapse_{{ $item->id }}" aria-expanded="false">{{ $item->name }} - {{ ucfirst($item->service_social) }}</h5>
        <div id="collapse_{{ $item->id }}" class="collapse" style="">
                                                    <div class="table-responsive">
                                                        <table class="table align-middle border rounded table-row-dashed gs-5">
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase">
                                                                    <th>Thông tin</th>
                                                                    <th>Ghi chú</th>
                                                                    <th>Thành Viên</th>
                                                                    <th>Cộng tác viên</th>
                                                                    <th>Đại lý</th>
                                                                    <th>Nhà phân phối</th>
                                                                    <th>Trạng thái</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            @inject('server', '\App\Models\ServerService')
                                            @foreach ($server->getServerByService($item->id) as $server)
                                                                                                                                <tr>
                                                                    <td>
                                                                        <p>Tiêu Đề: {{ $server->title }}</p>
                                                                        <p>Máy Chủ: {{ $server->server }}</p>
                                                                        
                                                                    </td>
                                                                    <td><p>{{ $server->description }}</p></td>
                                                                    <td><span class="badge badge-success"> {{ $server->price }}₫ </span></td>
                                                                    <td><span class="badge badge-danger"> {{ $server->price_collaborator }}₫ </span></td>
                                                                    <td><span class="badge badge-warning"> {{ $server->price_agency }}₫ </span></td>
                                                                    <td><span class="badge badge-primary">**</span></td>
                                                                    <td>{!! statusService($server->status) !!}</td>
                                                                </tr>
                                                                @endforeach
                                                                                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>


                                                @endforeach
</div>
</div>

@endsection
@section('script')
<script disable-devtool-auto src='https://cdn.jsdelivr.net/npm/disable-devtool'></script>
    <script>
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