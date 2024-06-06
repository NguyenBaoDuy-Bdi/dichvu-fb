@extends('Admin.Layout.App')
@section('title', 'Thêm dịch vụ mới')
@section('content')
<div class="app-wrapper" id="kt_app_wrapper">
            <div id="kt_app_toolbar_container" class="app-container container-fluid">
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card">
            <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                        Thêm dịch vụ mới
                                            <span class="ribbon-inner bg-default"></span>
                                        </div>
                                    </div>
                <div class="card-body">
                    
                    <div class="mb-3">
                        <form action="{{ route('admin.service.new.post') }}" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <select name="social" id="" class="form-select border border-info">
                                    @foreach ($social as $item)
                                        <option value="{{ $item->slug }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                <label><i class="fas fa-star me-2 fs-4 text-info"></i><span
                                        class="border-start border-info ps-3">Dịch vụ Social</span></label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control border border-info" name="service"
                                    value="{{ old('service') }}" placeholder="Name">
                                <label><i class="fas fa-star me-2 fs-4 text-info"></i><span
                                        class="border-start border-info ps-3">Tên dịch vụ</span></label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control border border-info" name="path_service"
                                    value="{{ old('path_service') }}" placeholder="Name">
                                <label><i class="fas fa-star me-2 fs-4 text-info"></i><span
                                        class="border-start border-info ps-3">Đường dẫn dịch vụ
                                        (like-facebook)</span></label>
                            </div>
                            <div class="form-floating mb-3">
                                <select name="status" id="" class="form-select border border-info">
                                    <option value="show">Hoạt động</option>
                                    <option value="hide">Không hoạt động</option>
                                </select>
                                <label><i class="fas fa-star me-2 fs-4 text-info"></i><span
                                        class="border-start border-info ps-3">Trạng thái</span></label>
                            </div>
                            <div class="form-floating mb-3">
                                <select name="category" id="" class="form-select border border-info">
                                    <option value="default">Mặc định</option>
                                    <option value="reaction">Hiện cảm xúc</option>
                                      <option value="viplike">Vip like-cảm xúc</option>
                                      <option value="viplike-kcx">Vip like-không cảm xúc</option>
                                    <option value="reaction-speed">Hiện cảm xúc và tốc độ</option>
                                    <option value="comment">Hiện bình luận</option>
                                    <option value="comment-quantity">Hiện bình luận và số lượng</option>
                                    <option value="minutes">Hiện số phút</option>
                                    <option value="time">Hiện thời gian</option>
                                    <option value="proxy">Dành riêng cho mua proxy</option>
                                    <option value="bot">Dành riêng cho bot tương tác</option>
                                </select>
                                <label><i class="fas fa-star me-2 fs-4 text-info"></i><span
                                        class="border-start border-info ps-3">Thể loại</span></label>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary col-12">Thêm dịch vụ mới</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <div class="card">
            <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                        Danh sách các dịch vụ
                                            <span class="ribbon-inner bg-default"></span>
                                        </div>
                                    </div>
                <div class="card-body">
       
                    <div class="mb-3">
                        <div class="table-responsive">
                            <table id="list-service"
                                class="table border table-striped table-bordered display text-nowrap dataTable responsive w-100">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên dịch vụ</th>
                                        <th>Social</th>
                                        <th>Path</th>
                                        <th>Thể loại</th>
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
@endsection
@section('script')
    <script>
        createDataTable('#list-service', '{{ route('admin.list', 'list-service') }}', [{
            data: 'id'
        }, {
            data: 'name'
        }, {
            data: 'social'
        }, {
            data: 'slug'
        }, {
            data: 'category'
        }, {
            data: 'status',
            render: function(data){
                if(data == 'show'){
                    return '<span class="badge badge-success">Hoạt động</span>'
                }else{
                    return '<span class="badge badge-danger">Không hoạt động</span>'
                }
            }
        }, {
            data: null,
            render: function(data){
                return `<a href="{{ route('admin.service.edit', 'id') }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                        <a href="{{ route('admin.service.delete', 'id') }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>`.replace(/id/g, data.id)
            }
        }])
    </script>
@endsection
