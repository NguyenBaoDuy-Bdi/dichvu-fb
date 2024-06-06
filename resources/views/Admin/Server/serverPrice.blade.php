@extends('Admin.Layout.App')
@section('title', 'Chỉnh sửa dịch vụ máy chủ')
@section('content')
<div class="app-wrapper" id="kt_app_wrapper">
            <div id="kt_app_toolbar_container" class="app-container container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body iconfont text-start">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-3">
                            Thông Tin API
                        </h4>
                    </div>
                    <form submit-ajax="true" method="post" action="https://trumsubngon.vn">
                        <input type="hidden" name="_token" value="">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for class="form-label">Nguồn</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="trumsubngon.vn" readonly>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
    @foreach ($social as $serversocial)
    <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                        Chỉnh sửa giá {{$serversocial->name}}
                                            <span class="ribbon-inner bg-default"></span>
                                        </div>
                                    </div>
                            <div class="card-body">

                            @foreach ($service as $servic1e)
                            @if ($servic1e->service_social == $serversocial->slug)
                             <h4 class="text-uppercase fw-bold badge badge-danger">{{$servic1e->name}}</h4>
                             <form action="{{ route('admin.server.price.post') }}" method="POST"  request="ptl">
                    @csrf

@foreach ($server as $serverItem)
@if ($serverItem->service_id == $servic1e->id) 
@if ($serverItem->title != '')
<input type="hidden" name="servers[{{ $loop->index }}][id]" value="{{ $serverItem->id }}">
<!-- <input type="hidden" name="serversid[{{ $loop->index }}][id]" value="{{ $serverItem->service_id }}"> -->
<div class="row">
    <div class="col-md-2">
        <div class="form-floating mb-3">
            <input type="text" class="form-control border border-info" name="id"
                value="{{ $serverItem->id }}" placeholder="Name"  disabled="">
            <label><i class="fa fa-star me-2 fs-4 text-info"></i><span
                    class="border-start border-info ps-3">ID Máy chủ</span></label>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-floating mb-3">
            <select  name="servers[{{ $loop->index }}][server_service]" id="" class="form-select border border-info">
                <option value="{{ $serverItem->server }}">Máy chủ: {{ $serverItem->server }}</option>
            </select>
            <label><i class="fa fa-star me-2 fs-4 text-info"></i><span
                    class="border-start border-info ps-3">Máy chủ </span></label>
        </div>
    </div>
    <div class="col-md-8">
        <div class="form-floating mb-3">
            <input type="text" class="form-control border border-info" name="servers[{{ $loop->index }}][title]" value="{{ $serverItem->title }}" placeholder="Namedfd" disabled="">
            <label><i class="fa fa-star me-2 fs-4 text-info"></i><span
                    class="border-start border-info ps-3">Tên máy chủ </span></label>
        </div>
    </div>
</div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control border border-info"   name="servers[{{ $loop->index }}][price]" value="{{ $serverItem->price }}" placeholder="Name">
                                    <label><i class="fa fa-star me-2 fs-4 text-info"></i><span
                                            class="border-start border-info ps-3">Giá Thành viên</span></label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control border border-info"
                                          name="servers[{{ $loop->index }}][price_collaborator]" value="{{ $serverItem->price_collaborator }}" 
                                        placeholder="Name">
                                    <label><i class="fa fa-star me-2 fs-4 text-info"></i><span
                                            class="border-start border-info ps-3">Giá Cộng tác viên</span></label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control border border-info"  name="servers[{{ $loop->index }}][price_agency]" value="{{ $serverItem->price_agency }}" placeholder="Name">
                                    <label><i class="fa fa-star me-2 fs-4 text-info"></i><span
                                            class="border-start border-info ps-3">Giá Đại lý</span></label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating mb-3">
                                <input type="text" class="form-control border border-info" name="servers[{{ $loop->index }}][price_distributor]" value="{{ $serverItem->price_distributor }}"   placeholder="Price Distributor">

                                    <label><i class="fa fa-star me-2 fs-4 text-info"></i><span
                                            class="border-start border-info ps-3">Giá Nhà phân phối</span></label>
                                </div>
                            </div>
                        </div>
               
                        <div class="form-floating mb-3">
                            <select class="form-control border border-info"  name="servers[{{ $loop->index }}][status]" placeholder="Name">
                                <option value="Active" @if ($serverItem->status == 'Active') selected @endif>Hoạt động
                                </option>
                                <option value="InActive" @if ($serverItem->status == 'InActive') selected @endif>
                                    Không hoạt động</option>
                            </select>
                            <label><i class="fa fa-star me-2 fs-4 text-info"></i><span
                                    class="border-start border-info ps-3">Trạng thái</span></label>
                        </div>
                        @unless($loop->last)
                <hr style="border-top: 2px solid #ff0000;">
            @endunless
             @endif
            @endif
                        @endforeach
                        <div class="form-floating mb-3">
<button type="submit" class="btn btn-primary col-12">Chỉnh giá dịch vụ [{{$servic1e->id}}]</button>
</div>
</form>
@endif
@endforeach

</div>  @endforeach
                </div>
         
        </div>
    </div>
@endsection
