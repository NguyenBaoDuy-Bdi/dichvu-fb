@extends('Layout.App')
@section('title', 'Whios Domain')

@section('content')
<div class="app-wrapper" id="kt_app_wrapper">
            <div id="kt_app_toolbar_container" class="app-container container-fluid">
    <div class="row">
        <div class="col-md-12">
        <div class="card card-flush">
            <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                        Check tên miền
                                            <span class="ribbon-inner bg-default"></span>
                                        </div>
                                    </div>
                <div class="card-body">
                    <form action="{{ route('tool.domain.post','whios-domain') }}" method="POST">
                        @csrf
                        <div class="col-md-12 mb-3">
                            <input type="text" class="form-control mb-3" placeholder="Vui lòng nhập tên miền" name="domaincheck" id="domaincheck" value="{{ session('domaincheck') }}">
                        
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary col-12" id="whois">Check miền</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if (session('status')==true)
    <div class="mt-5">
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="ribbon-title ribbon-primary">Thông tin chi tiết tên miền</h4>
                        <div class="mt-4">
                            <div class="row">
                                <div class="col-md-12">
                        <div class="card">
                                        
                                        <div class="col-md-12 col-sm-12">
                                            <div class="table-responsive ml-3">
                                            <table class="table table-striped">
                                                <colgroup>
                                                    <col width="28%">
                                                    <col width="72%">
                                                </colgroup>
                                                <tbody class="ml-3">
                                                    <tr>
                                                        <td>
                                                            Tên miền
                                                        </td>
                                                        <td>
                                                            <a class="ng-binding ml-2 ng-scope" href="https://{{ session('domaincheck') }}" target="_blank">{{ session('domaincheck') }}</a>
                                                            <div class="flex-item flex-auto">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Ngày đăng ký:
                                                        </td>
                                                        <td>
                                                            <span   class="ng-binding ml-2 ng-scope">{{ session('creationDate') }}</span>
                                                        </td>
                                                    </tr>
                    
                                                    <tr>
                                                        <td>
                                                            Ngày hết hạn:
                                                        </td>
                                                        <td>
                                                            <span class="ng-binding ml-2 ng-scope">{{ session('expirationDate') }}</span>
                                                        </td>
                                                    </tr>
                    
                                                   
                                                    <tr>
                                                        <td>
                                                             Trạng thái:
                                                        </td>
                                                        <td>
                                                            <div  class="ng-scope">
                                                                <div  class="ng-scope"><span class="ng-binding ml-2 ng-scope">{{ session('statusdomain') }}</span></div>                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Quản lý tại Nhà đăng ký:
                                                        </td>
                                                        <td>
                                                            <span  class="ng-binding ml-2 ng-scope">{{ session('registrar') }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Nameservers1:
                                                        </td>
                                                        <td>
                                                                <div  class="ng-scope"><span class="ng-binding ml-2 ng-scope">{{ session('nameServer1') }}</span></div><div  class="ng-scope"><span class="ng-binding ml-2 ng-scope"></span></div>                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Nameservers2:
                                                        </td>
                                                        <td>
                                                                <div  class="ng-scope"><span class="ng-binding ml-2 ng-scope">{{ session('nameServer2') }}</span></div><div  class="ng-scope"><span class="ng-binding ml-2 ng-scope"></span></div>                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
@endsection
@section('script')
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
@endsection