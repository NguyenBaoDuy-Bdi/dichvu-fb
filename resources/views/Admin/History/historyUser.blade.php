@extends('Admin.Layout.App')
@section('title', 'Lịch sử người dùng')
@section('content')
<div class="app-wrapper" id="kt_app_wrapper">
            <div id="kt_app_toolbar_container" class="app-container container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                        Nhật kí hoạt động
                                            <span class="ribbon-inner bg-default"></span>
                                        </div>
                                    </div>
                <div class="card-body">
             
                    <div class="mb-3">
                        <div class="table-responsive">
                            <div id="" class="dataTables_wrapper">
                                <table id="history"
                                    class="table border table-striped table-bordered display text-nowrap dataTable responsive w-100"
                                    aria-describedby="file_export_info">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tài khoản</th>
                                            <th>Loại</th>
                                            <th>Số tiền</th>
                                            <th>Số dư trước</th>
                                            <th>Số dư thay đổi</th>
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
    </div>
    <div class="col-md-12 mb-3">
            <div class="card">
            <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                        Lịch sử đơn
                                            <span class="ribbon-inner bg-default"></span>
                                        </div>
                                    </div>
                <div class="card-body">
                 
                    <div class="table-responsive">
                        <div id="" class="dataTables_wrapper w-100 overflow-x-auto overflow-y-hidden">
                            <table id="lichsudon"
                                class="table border table-striped table-bordered display text-nowrap dataTable responsive w-100"
                                aria-describedby="file_export_info">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                         <th>Mã đơn</th>
                                        <th>Tài khoản</th>
                                        <th>Dịch vụ</th>
                                        <th>Máy chủ</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                        <th>Tổng tiền</th>
                                        <th>Đơn hàng</th>
                                        <th>Bắt đầu</th>
                                        <th>Đã tăng</th>
                                        
                                     
                                        <th>Trạng thái</th>
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
        createDataTable('#history', '{{ route('admin.list', 'history-user') }}', [{
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
                data: 'data',
                render: function(data){
                    return `<span class="text-danger">`+formatNumber(data)+`</span>`
                }
            },
            {
                data: 'old_data',
                render: function(data){
                    return `<span class="text-primary">`+formatNumber(data)+`</span>`
                }
            },
            {
                data: 'new_data',
                render: function(data){
                    return `<span class="text-success">`+formatNumber(data)+`</span>`
                }
            },
            {
                data: 'description',
            },
            {
                data: 'created_at',
            },
        ])
    </script>
    <script>
        createDataTable('#lichsudon', '{{ route('admin.list', 'list-order') }}', [{
            data: 'id'
        }, 
         {
            data: 'order_code',
            render: function(data, type, row) {
                return `<b class="text-danger">${data}</span>`
            }
            },
            
            
            {
            data: 'username'
        }, 
        
            
        {
            data: 'service_name',
            render: function(data, type, row) {
                return `<span class="badge badge-pill badge badge-primary">${data}</span>`
            }
        }, {
            data: 'server_service',
            render: function(data, type, row) {
                return `<span class="badge badge-pill badge badge-warning">${data}</span>`
            }
        }, {
            data: 'price',
            render: function(data, type, row) {
                return `<b class="text-primary">${data}</b>`
            }
        }, {
            data: 'quantity',
            render: function(data, type, row) {
                return `<b class="text-info">${formatNumber(data)}</b>`
            }
        }, {
            data: 'total_payment',
            render: function(data, type, row) {
                return `<b class="text-success">${formatNumber(data)}</b>`
            }
        }, {
            data: 'order_link'
        }, {
            data: 'start',
            render: function(data, type, row) {
                return `<b class="text-seconadry">${formatNumber(data)}</b>`
            }
        }, {
            data: 'buff',
            render: function(data, type, row) {
                return `<b class="text-success">${formatNumber(data)}</b>`
            }
        },  {
            data: 'status_order'
        }, {
            data: 'note'
        }, {
            data: 'created_at'
        }
        ])
    </script>
@endsection
