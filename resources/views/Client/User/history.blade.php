@extends('Layout.App')
@section('title', 'Biển động số dư')
@section('content')
<div class="app-wrapper" id="kt_app_wrapper">
            <div id="kt_app_toolbar_container" class="app-container container-fluid">
    <div class="row">
        <div class="col-md-12">
        <div class="card card-flush">
            <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                        Biển động số dư
                                            <span class="ribbon-inner bg-default"></span>
                                        </div>
                                    </div>
                <div class="card-body">
                        <div class="table-responsive dt-responsive">
                           
                                <table id="history"
                                    class="table table-striped    table-bordered nowrap">
                                    <thead class="text-start text-dark-400 fw-bolder fs-7 text-uppercase">
                                        <tr>
                                            <th>STT</th>
                                            <th>Tài khoản</th>
                                            <th>Loại</th>
                                           
                                            <th>Số dư trước</th>
                                             <th>Số tiền thay đổi</th>
                                            <th>Số dư hiện tại</th>
                                            <th>Ghi chú</th>
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
    <script>
        createDataTable('#history', '{{ route('user.list.action', 'history-user') }}', [{
                data: 'id',
            },
            {
                data: 'username',
            },
            {
                data: 'action',
                render: function(data){
                    return `<span class="badge badge-primary">`+data+`</span>`
                }
            },
         
            {
                data: 'old_data',
                render: function(data){
                    return `<span class="badge badge-danger">`+formatNumber(parseInt(data))+`</span>`
                }
            },
               {
                data: 'data',
                render: function(data){
                    return `<span class="badge badge-warning">`+formatNumber(data)+`</span>`
                }
            },
            {
                data: 'new_data',
                render: function(data){
                    return `<span class="badge badge-success">`+formatNumber(parseInt(data))+`</span>`
                }
            },
            {
                data: 'description',
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
