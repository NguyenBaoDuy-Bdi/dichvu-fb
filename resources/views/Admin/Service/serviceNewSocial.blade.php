@extends('Admin.Layout.App')
@section('title', 'Social Media')

@section('content')
<div class="app-wrapper" id="kt_app_wrapper">
            <div id="kt_app_toolbar_container" class="app-container container-fluid">
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card">
                  <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                        Thêm dịch vụ Social mới
                                            <span class="ribbon-inner bg-default"></span>
                                        </div>
                                    </div>
                <div class="card-body">
                    
                    <form action="{{ route('admin.service.new.social.post') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control border border-primary" placeholder="Tên MXH"
                                value="{{ old('social_service') }}" name="social_service">
                            <label for="">
                                <i class="fa fa-user fs-4 text-primary"></i>
                                <span class="border-start border-primary ps-2">
                                    Tên dịch vụ MXH
                                </span>
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control border border-primary" placeholder="Tên MXH"
                                value="{{ old('social_path') }}" name="social_path">
                            <label for="">
                                <i class="fa fa-link fs-4 text-primary"></i>
                                <span class="border-start border-primary ps-2">
                                    Path Dịch vụ (VD: sg-facebook)
                                </span>
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control border border-primary" placeholder="Tên MXH"
                                value="{{ old('social_image') }}" name="social_image" >
                            <label for="">
                                <i class="fa fa-link fs-4 text-primary"></i>
                                <span class="border-start border-primary ps-2">
                                    Link Ảnh Dịch vụ
                                </span>
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <select name="social_status" id="" class="form-select border border-primary">
                                <option value="show">Hiển thị</option>
                                <option value="hide">Ẩn</option>
                            </select>
                            <label for="">
                                <i class="fa fa-link fs-4 text-primary"></i>
                                <span class="border-start border-primary ps-2">
                                    Trạng thái
                                </span>
                            </label>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary col-12">
                                Thêm dịch vụ MXH mới
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                  <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                        Danh sách dịch vụ
                                            <span class="ribbon-inner bg-default"></span>
                                        </div>
                                    </div>
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table id="list-social"
                            class="table border table-striped table-bordered display text-nowrap dataTable responsive w-100">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên dịch vụ</th>
                                    <th>Path</th>
                      
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
@endsection
@section('script')
    <script>
        createDataTable('#list-social', '{{ route('admin.list', 'list-social') }}', [{
                data: 'id'
            },
            {
                data: 'name'
            }, {
                data: 'slug'
            }, {
                data: 'status'
            },
            {
                data: null,
                render: function(data) {
                    return `<a href="{{ route('admin.service.social.edit', 'id') }}`.replace('id', data.id) +
                        `" class="btn btn-primary btn-sm">Sửa</a>
                            <button class="btn btn-danger btn-sm" onclick="deleteSocial(${data.id})">Xóa</button>`
                }
            }
        ])

        function deleteSocial(id) {
            Swal.fire({
                title: 'Bạn có chắc chắn muốn xóa dịch vụ này?',
                text: "Bạn sẽ không thể khôi phục lại dịch vụ này!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#dc3545',
                confirmButtonText: 'Xóa dịch vụ này!',
                cancelButtonText: 'Hủy'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '{{ route('admin.service.delete', 'id') }}'.replace('id', id),
                        type: 'DELETE',
                        data: {
                            id: id,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(data) {
                            if (data.status == 'success') {
                                Swal.fire(
                                    'Đã xóa!',
                                    'Dịch vụ đã được xóa thành công.',
                                    'success'
                                )
                                $('#list-social').DataTable().ajax.reload();
                            } else {
                                Swal.fire(
                                    'Xóa thất bại!',
                                    'Dịch vụ chưa được xóa.',
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
