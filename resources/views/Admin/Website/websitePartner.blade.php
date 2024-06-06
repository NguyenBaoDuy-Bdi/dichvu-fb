@extends('Admin.Layout.App')
@section('title', 'Cấu hình đối tác')
@section('content')
<div class="app-wrapper" id="kt_app_wrapper">
            <div id="kt_app_toolbar_container" class="app-container container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                        Tuỳ chỉnh đối tác
                                            <span class="ribbon-inner bg-default"></span>
                                        </div>
                                    </div>
                <div class="card-body">
               
                    <div class="mb-3">
                        <form action="{{ route('admin.website.partner.post') }}" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control border border-info" name="partner1"
                                    value="{{ DataSite('partner1') }}" placeholder="Name">
                                <label><i class="fa fa-star me-2 fs-4 text-info"></i><span
                                        class="border-start border-info ps-3">Đối tác 1</span></label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control border border-info" name="partner2"
                                    value="{{ DataSite('partner2') }}" placeholder="Name">
                                <label><i class="fa fa-star me-2 fs-4 text-info"></i><span
                                        class="border-start border-info ps-3">Đối tác 2</span></label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control border border-info" name="partner3"
                                    value="{{ DataSite('partner3') }}" placeholder="Name">
                                <label><i class="fa fa-star me-2 fs-4 text-info"></i><span
                                        class="border-start border-info ps-3">Đối tác 3</span></label>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary col-12">Lưu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
