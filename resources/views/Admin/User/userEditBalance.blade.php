@extends('Admin.Layout.App')
@section('title', 'Thay đổi số dư của thành viên')
@section('content')
<div class="app-wrapper" id="kt_app_wrapper">
            <div id="kt_app_toolbar_container" class="app-container container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                        Chỉnh sửa số dư thành viên
                                            <span class="ribbon-inner bg-default"></span>
                                        </div>
                                    </div>
                <div class="card-body">
             
                    <div class="mb-3">
                        <form action="{{ route('admin.user.balance.post') }}" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control border border-info" name="username" placeholder="Name">
                                <label><i class="fa fa-star me-2 fs-4 text-info"></i><span
                                        class="border-start border-info ps-3">Tài khoản</span></label>
                            </div>
                            <div class="form-floating mb-3">
                                <select name="action" id="" class="form-select border border-info">
                                    <option value="plus">Cộng</option>
                                    <option value="minus">Trừ</option>
                                </select>
                                <label><i class="fa fa-star me-2 fs-4 text-info"></i><span
                                        class="border-start border-info ps-3">Thao tác</span></label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control border border-info" name="balance" placeholder="Name">
                                <label><i class="fa fa-star me-2 fs-4 text-info"></i><span
                                        class="border-start border-info ps-3">Số tiền</span></label>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary col-12">
                                    Thay đổi
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
