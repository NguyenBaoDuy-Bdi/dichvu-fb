@extends('Admin.Layout.App')
@section('title', 'Danh sách thành viên')
@section('content')
<div class="app-wrapper" id="kt_app_wrapper">
            <div id="kt_app_toolbar_container" class="app-container container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                        Tất Cả Thành Viên Website
                                            <span class="ribbon-inner bg-default"></span>
                                        </div>
                                    </div>
                <div class="card-body">
<div class="row">
        <div class="col-md-3 mb-3">
            <div class="card shadow">
                <div class="d-flex align-items-center bg-white rounded p-3">
                    <div class="d-flex flex-stack">
                        <div class="d-flex align-items-center gap-2">
                            <div class="p-4 bg-primary rounded-2">
                                <i class="fa fa-users text-info fs-7"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="text-dark fs-5 fw-bold">Tổng thành viên</div>
                                <span class="text-muted fw-normal"><b
                                        class="text-danger">{{ number_format($total_user) }}</b> thành
                                    viên</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card shadow"> 
                <div class="d-flex align-items-center bg-white rounded p-3">
                    <div class="d-flex flex-stack">
                        <div class="d-flex align-items-center gap-2">
                            <div class="p-4 bg-primary rounded-2">
                                <i class="fa fa-users text-info fs-7"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="text-dark fs-5 fw-bold">Tổng cộng tác viên</div>
                                <span class="text-muted fw-normal"><b
                                        class="text-danger">{{ number_format($total_ctv) }}</b> thành
                                    viên</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card shadow">
                <div class="d-flex align-items-center bg-white rounded p-3">
                    <div class="d-flex flex-stack">
                        <div class="d-flex align-items-center gap-2">
                            <div class="p-4 bg-primary rounded-2">
                                <i class="fa fa-users text-info fs-7"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="text-dark fs-5 fw-bold">Tổng đại lý</div>
                                <span class="text-muted fw-normal"><b
                                        class="text-danger">{{ number_format($total_daily) }}</b> thành
                                    viên</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card shadow">
                <div class="d-flex align-items-center bg-white rounded p-3">
                    <div class="d-flex flex-stack">
                        <div class="d-flex align-items-center gap-2">
                            <div class="p-4 bg-primary rounded-2">
                                <i class="fa fa-users text-info fs-7"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="text-dark fs-5 fw-bold">Tổng nhà phân phối</div>
                                <span class="text-muted fw-normal"><b
                                        class="text-danger">{{ number_format($total_npp) }}</b> thành
                                    viên</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card shadow">
                <div class="d-flex align-items-center bg-white rounded p-3">
                    <div class="d-flex flex-stack">
                        <div class="d-flex align-items-center gap-2">
                            <div class="p-4 bg-primary rounded-2">
                                <i class="fa fa-users text-info fs-7"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="text-dark fs-5 fw-bold">Tổng số quản trị viên</div>
                                <span class="text-muted fw-normal"><b
                                        class="text-danger">{{ number_format($total_qtv) }}</b> admin</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

    <div class="row">
        <div class="col-md-12"> 
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Danh sách thành viên</h4>
                    <div class="mb-3">
                        <div class="table-responsive">
                            <div id="" class="dataTables_wrapper">
                                <table id="testds"
                                    class="table border table-striped table-bordered display text-nowrap dataTable responsive w-100"
                                    aria-describedby="file_export_info">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Họ tên</th>
                                            <th>Email</th>
                                            <th>Tài khoản</th>
                                            <th>Số dư</th>
                                            <th>Tổng nạp</th>
                                            <th>Cấp bậc</th>
                                            <th>IP</th>
                                            <th>Đăng nhập gần đây</th>
                                            <th>Trạng thái</th>
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
    </div>
@endsection
@section('script')
    <script>
        createDataTable('#testds', '{{ route('admin.list', 'list-user') }}', [{
                data: 'id'
            },
            {
                data: 'name'
            },
            {
                data: 'email'
            },
            {
                data: 'username'
            },
            {
                data: 'balance',
                render: function(row, type, index){
                    return `<span class="badge badge-success bg-success badge-pill">${formatNumber(row)}</span>`
                }
            }, {
                data: 'total_recharge',
                render: function(row, type, index){
                    return `<span class="badge badge-primary bg-primary badge-pill">${formatNumber(row)}</span>`
                }
            }, {
                data: 'level'
            }, {
                data: 'ip'
            }, {
                data: 'last_login'
            }, {
                data: 'status',
                render: function(row, type, index){
                    if(row == 'active'){
                        return `<span class="badge badge-success bg-success">Hoạt động</span>`
                    }else{
                        return `<span class="badge badge-danger bg-danger">Khóa</span>`
                    }
                }
            }, {
                data: null,
                render: function(row, type, index){
                    return `<a href="/admin/user/edit/${row.id}" class="btn btn-sm btn-primary">Sửa</a>
                            <a href="javascript:;" onclick="deleteUser('${row.id}')" class="btn btn-sm btn-danger">Xóa</a>`
                }
            }
        ])

        function deleteUser(id){
            Swal.fire({
                title: 'Bạn có chắc chắn muốn xóa?',
                text: "Bạn sẽ không thể khôi phục lại dữ liệu!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#dc3545',
                confirmButtonText: 'Xóa',
                cancelButtonText: 'Hủy'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `/admin/user/delete/${id}`,
                        type: 'POST',
                        dataType: 'json',
                        success: function(res){
                            if(res.status == 'success'){
                                Swal.fire(
                                    'Đã xóa!',
                                    'Xóa thành công.',
                                    'success'
                                )
                                $('#testds').DataTable().ajax.reload();
                            }else{
                                Swal.fire(
                                    'Xóa thất bại!',
                                    'Xóa thất bại.',
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
