@extends('Admin.Layout.App')
@section('title', 'Quản lí tin tức mới')
@section('content')
<div class="app-wrapper" id="kt_app_wrapper">
            <div id="kt_app_toolbar_container" class="app-container container-fluid">
    <div class="col-md-12">
        <div class="card mb-3">
                        <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                        Thêm tin tức mới
                                            <span class="ribbon-inner bg-default"></span>
                                        </div>
                                    </div>
            <div class="card-body">
               
                <form action="{{ route('admin.newsannouncement.post') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control border border-info" name="name" placeholder="Name">
                        <label><i class="fa fa-star me-2 fs-4 text-info"></i><span
                                class="border-start border-info ps-3">Tên người tạo</span></label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control border border-info" name="content" placeholder="Name">
                        <label><i class="fa fa-star me-2 fs-4 text-info"></i><span
                                class="border-start border-info ps-3">Nội dung tin tức</span></label>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary col-12">Thêm tin tức mới</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card mb-3">
                        <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                        Lịch sử tin tức
                                            <span class="ribbon-inner bg-default"></span>
                                        </div>
                                    </div>
            <div class="card-body">
               
                <div class="table-responsive">
                    <table id="history" class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên người gửi</th>
                                <th>Nội dung</th>
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
@endsection
@section('script')
    <script>
        createDataTable('#history', '{{ route('admin.list', 'history-newsannouncement') }}', [{
                data: 'id'
            },
            {
                data: 'name'
            },
            {
                data: 'content'
            },
            {
                data: 'created_at'
            },
            {
                data: null,
                render: function(data) {
                    return `
                        <a href="javascript:;" class="btn btn-danger btn-sm" onclick="deleteNewsannouncement(${data.id})">
                            <i class="ti ti-trash"></i>
                        </a>
                    `
                }
            },
        ])

        function deleteNewsannouncement(id) {
            Swal.fire({
                title: 'Bạn có chắc chắn muốn xóa tin tức này?',
                text: "Bạn sẽ không thể khôi phục lại tin tức này!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `{{ route('admin.newsannouncement.delete', 'id') }}`.replace('id', id),
                        type: 'DELETE',
                        dataType: 'json',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function() {
                            Swal.fire(
                                'Đã xóa!',
                                'Tin tức đã được xóa thành công.',
                                'success'
                            )
                            $('#history').DataTable().ajax.reload()
                        }
                    })
                }
            })
        }
    </script>
@endsection
