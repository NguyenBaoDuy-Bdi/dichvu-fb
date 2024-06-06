@extends('Admin.Layout.App')
@section('title', 'Lịch sử đơn hàng')

@section('content')
<div class="app-wrapper" id="kt_app_wrapper">
            <div id="kt_app_toolbar_container" class="app-container container-fluid">
    <div class="row">
       
        <div class="col-md-12 mb-3 mb-3">
             <div class="alert alert-danger text-danger"><b>
                 @if (getDomain() != env('PARENT_SITE'))
                 Link cron check toàn bộ đơn hàng site con, cháu,...: https://{{getDomain()}}/cronJob/ordercon  ( Để trên 30 giây)
                 @else 
                 Link cron check toàn bộ đơn hàng site chính: https://{{getDomain()}}/cronJob/chaydvall  ( Để trên 30 giây)
                 @endif</b></div>
            <div class="card">
            <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                        Lịch sử tạo đơn
                                            <span class="ribbon-inner bg-default"></span>
                                        </div>
                                    </div>
                <div class="card-body">
      
                    <div class="table-responsive">
                        <div id="" class="dataTables_wrapper w-100 overflow-x-auto overflow-y-hidden">
                            <table id="testds"
                                class="table border table-striped table-bordered display text-nowrap dataTable responsive w-100"
                                aria-describedby="file_export_info">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                         <th>Mã đơn</th>
                                        <th>Tài khoản</th>
                                        <th>Thao tác</th>
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
        <div class="col-md-12 mb-3">
            <div class="card">
            <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                        Lịch sử đơn chờ xử lí
                                            <span class="ribbon-inner bg-default"></span>
                                        </div>
                                    </div>
                <div class="card-body">
                 
                    <div class="table-responsive">
                        <div id="" class="dataTables_wrapper w-100 overflow-x-auto overflow-y-hidden">
                            <table id="dontay"
                                class="table border table-striped table-bordered display text-nowrap dataTable responsive w-100"
                                aria-describedby="file_export_info">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Thao tác</th>
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
                                        <th>Thao tác</th>
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
        createDataTable('#testds', '{{ route('admin.list', 'list-order') }}', [{
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
            data: null,
            render: function(data, type, row) {
                return `<a href="{{ route('admin.order.edit', 'id') }}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('admin.order.delete', 'id') }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>`
                        .replace(/id/g, data.id)
            }
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
    @if (getDomain() == env('PARENT_SITE'))
        <script>
            createDataTable('#dontay', '{{ route('admin.list', 'order-tay') }}', [{
                    data: 'id'
                }, {
                    data: null,
                    render: function(data, type, row) {
                        return `
                <div class="btn-group">
                            <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Thao tác
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:;" onclick="activeOrder('${row.id}')">Duyệt đơn</a></li>
                                <li><a class="dropdown-item" href="javascript:;" onclick="cancelOrder('${row.id}')">Hủy đơn</a></li>
                            </ul>
                        </div>
                `
                    }
                },
                {
                    data: 'username'
                }, {
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
                }, {
                    data: null,
                    render: function(data, type, row) {
                        return ''
                    }
                }
            ])

            function activeOrder(id) {
                Swal.fire({
                    title: 'Bạn có chắc chắn muốn duyệt đơn này?',
                    showDenyButton: true,
                    showCancelButton: true,
                    confirmButtonText: `Duyệt`,
                    denyButtonText: `Huỷ`,
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '{{ route('admin.order.active.post') }}',
                            method: 'POST',
                            data: {
                                id: id,
                                _token: '{{ csrf_token() }}'
                            },
                            dataType: 'JSON',
                            success: function(data) {
                                if (data.status == 'success') {
                                    Swal.fire({
                                        icon: 'success',
                                        title: data.message,
                                    })
                                    $('#testds').DataTable().ajax.reload()
                                    $('#dontay').DataTable().ajax.reload()
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: data.message,
                                    })
                                }
                            }
                        })
                    }
                })
            }

            function cancelOrder(id) {
                Swal.fire({
                    title: 'Bạn có chắc chắn muốn hủy đơn này?',
                    showDenyButton: true,
                    showCancelButton: true,
                    confirmButtonText: `Hủy`,
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '{{ route('admin.order.cancel.post') }}',
                            method: 'POST',
                            data: {
                                id: id,
                                _token: '{{ csrf_token() }}'
                            },
                            dataType: 'JSON',
                            success: function(data) {
                                if (data.status == 'success') {
                                    Swal.fire({
                                        icon: 'success',
                                        title: data.message,
                                    })
                                    $('#testds').DataTable().ajax.reload()
                                    $('#dontay').DataTable().ajax.reload()
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: data.message,
                                    })
                                }
                            }
                        })
                    }
                })
            }
        </script>
    @endif
@endsection
