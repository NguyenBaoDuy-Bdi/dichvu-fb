@extends('Admin.Layout.App')
@section('title', 'Quản lí website con')
@section('content')
<div class="app-wrapper" id="kt_app_wrapper">
            <div id="kt_app_toolbar_container" class="app-container container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                        Quản lí website
                                            <span class="ribbon-inner bg-default"></span>
                                        </div>
                                    </div>
                <div class="card-body">
 
                    <div class="table-responsive">
                        <div id="" class="dataTables_wrapper">
                            <table id="testds"
                                class="table border table-striped table-bordered display text-nowrap dataTable responsive w-100"
                                aria-describedby="file_export_info">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tài khoản</th>
                                        <th>Tên miền</th>
                                        <th>Trạng thái</th>
                                        <th>Thời gian tạo</th>
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
        createDataTable('#testds', '{{ route('admin.list', 'list-site') }}', [{
            data: 'id'
        }, {
            data: 'username'
        }, {
            data: 'domain_name',
            render: function(type, data, row) {
                return `<a href="https://${type}" target="_blank" class="btn btn-primary">${type}</a>`
            }
        }, {
            data: 'status',
            render: function(type, data, row) {
                if (type == 'Pending') {
                    return `<span class="badge badge-warning">Đang chờ duyệt</span>`
                }
                else if (type == 'Pending_Cloudflare') {
                    return `<span class="badge badge-warning">Vui lòng duyệt Cloudflare </span>`
                }
                else if (type == 'Active') {
                    return `<span class="badge badge-success">Đang hoạt động</span>`
                } else {
                    return `<span class="badge badge-danger">Không xác định</span>`
                }
            }
        }, {
            data: 'created_at'
        }, {
            data: null,
            render: function(type, data, row) {
                if (row.status == 'Pending') {
                    return `
                <a href="javascript:void(0)" onclick="activeDomain('${row.domain_name}')" class="btn btn-success">
                        <i class="fa fa-eye"></i> Duyệt
                        </a>
                        <a href="javascript:void(0)" onclick="deleteDomain('${row.domain_name}')" class="btn btn-danger">
                        <i class="fa fa-trash"></i> Xóa
                        </a>
                    `
                } else {
                    return `
                    <a href="javascript:void(0)" onclick="activeDomain('${row.domain_name}')" class="btn btn-success">
                        <i class="fa fa-eye"></i> Kiểm tra
                        </a>
                    <a href="javascript:void(0)" onclick="deleteDomain('${row.domain_name}')" class="btn btn-danger">
                        <i class="fa fa-trash"></i> Xóa
                        </a>
                    `
                }
            }
        }])
    </script>
 
    <script>
        function activeDomain(domain) {
            Swal.fire({
                title: 'Thông báo!',
                text: 'Bạn có chắc chắn muốn duyệt website này?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Duyệt',
                cancelButtonText: 'Hủy'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('admin.website-child.active.post') }}",
                        type: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            domain: domain
                        },
                        beforeSend: function() {
                            Swal.fire({
                                title: 'Đang duyệt website!',
                                html: 'Vui lòng chờ trong giây lát...',
                                
                     
                               
                                didOpen: () => {
                                    Swal.showLoading();
                                },
                                allowOutsideClick: false,
                                onBeforeOpen: () => {
                                    Swal.showLoading()
                                },
                            })
                        },
                        success: function(data) {
                            if (data.status == 'success') {
                                Swal.fire(
                                    'Đã duyệt!',
                                    'Duyệt cloudflare thành công.',
                                    'success'
                                )
                                $('#testds').DataTable().ajax.reload();
                            } else {
                                Swal.fire(
                                    'Lỗi!',
                                    data.message,
                                    'error'
                                )
                            }
                        }
                    })
                }
            })
        }

        function deleteDomain(domain) {
            Swal.fire({
                title: 'Bạn có chắc chắn muốn xóa website này?',
                text: "Bạn sẽ không thể khôi phục lại website này!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('admin.delete', 'delete-site') }}",
                        type: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            domain: domain
                        },
                        success: function(data) {
                            if (data.status == 'success') {
                                Swal.fire(
                                    'Đã xóa!',
                                    'Website đã được xóa.',
                                    'success'
                                )
                                $('#testds').DataTable().ajax.reload();
                            } else {
                                Swal.fire(
                                    'Lỗi!',
                                    data.message,
                                    'error'
                                )
                            }
                        }
                    })
                }
            })
        }
    </script>
@endsection
