@extends('Admin.Layout.App')
@section('title', 'Phản hồi hỗ trợ')

@section('content')
<div class="app-wrapper" id="kt_app_wrapper">
            <div id="kt_app_toolbar_container" class="app-container container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                        Xử Lí Hỗ Trợ
                                            <span class="ribbon-inner bg-default"></span>
                                             </div>
                                    </div>
      <form class="form-horizontal" action="{{ route('admin.support.feedback', ['id' => $list->id]) }}" method="post" request="lbd">
          @csrf
         <div class="form-group ">
            <div class="row row-sm">
               <div class="col-md-3"> <label class="form-label">Tên tài khoản</label> </div>
               <div class="col-md-9"> <input type="text" class="form-control" value="{{ $list->username }}" disabled> </div>
            </div>
         </div>
         <div class="form-group ">
            <div class="row row-sm">
               <div class="col-md-3"> <label class="form-label">Nội dung</label> </div>
               <div class="col-md-9"> <textarea class="form-control" rows="2" disabled>{{ $list->text }}</textarea> </div>
            </div>
         </div>
         <div class="form-group ">
            <div class="row row-sm">
               <div class="col-md-3"> <label class="form-label">Admin phản hồi</label> </div>
               <div class="col-md-9"> <textarea class="form-control" name="reply" rows="4" placeholder="Nhập nội dung phản hồi"></textarea> </div>
            </div>
         </div>
            <button class="btn btn-primary" type="submit">Phản hồi ngay</button>
      </form>
   </div>
</div>
    </div>
</div>
@endsection
@section('script')
<script></script>
@endsection