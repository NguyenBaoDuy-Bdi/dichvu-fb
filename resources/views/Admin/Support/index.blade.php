@extends('Admin.Layout.App')
@section('title', 'Quản lý hỗ trợ')

@section('content')
<div class="app-wrapper" id="kt_app_wrapper">
            <div id="kt_app_toolbar_container" class="app-container container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                        Quản Lí Hỗ Trợ
                                            <span class="ribbon-inner bg-default"></span>
                                        </div>
                                    </div>
                <div class="card-body">
                <div class="table-responsive">
                    <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="basic-datatable_length"><label>Show <select
                                            name="basic-datatable_length" aria-controls="basic-datatable"
                                            class="form-select form-select-sm select2 select2-hidden-accessible"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        </span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="basic-datatable_filter" class="dataTables_filter"><label><input type="search"
                                            class="form-control form-control-sm " placeholder="Search..."
                                            aria-controls="basic-datatable"></label></div>
                            </div>
                        </div>
                    </div>
                    <table class="table mg-b-0 text-md-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nội dung</th>
                                <th>Phản hồi</th>
                                <th>Trạng thái</th>
                                <th>Thời gian</th>
                                 <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list as $row)
                            <tr>
                                <th scope="row">{{ $row->id }}</th>
                                <td>{{ $row->text }}</td>
                                    <td>{{ $row->reply }}</td>
                                 <td>{!! statusSupport($row->status) !!}</td>
                                <td>{{ $row->created_at }}</td>
                                <td><a href="{{ route('admin.support.edit', ['id' => $row->id]) }}"
                                class="btn btn-sm btn-primary">Sửa</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="basic-datatable_paginate">
                    <ul class="pagination">
                        <li class="paginate_button page-item previous" id="basic-datatable_previous"><a href="#"
                                aria-controls="basic-datatable" data-dt-idx="0" tabindex="0"
                                class="page-link">Trước</a></li>
                        <li class="paginate_button page-item active"><a href="#" aria-controls="basic-datatable"
                                data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                        <li class="paginate_button page-item next disabled" id="basic-datatable_next"><a href="#"
                                aria-controls="basic-datatable" data-dt-idx="7" tabindex="0" class="page-link">Sau</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                <div class="ribbon-label text-uppercase fw-bold bg-default">Danh Sách Xử Lí</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="basic-datatable_length"><label>Show <select
                                            name="basic-datatable_length" aria-controls="basic-datatable"
                                            class="form-select form-select-sm select2 select2-hidden-accessible"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        </span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="basic-datatable_filter" class="dataTables_filter"><label><input type="search"
                                            class="form-control form-control-sm " placeholder="Search..."
                                            aria-controls="basic-datatable"></label></div>
                            </div>
                        </div>
                    </div>
                    <table class="table mg-b-0 text-md-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nội dung</th>
                                <th>Phản hồi</th>
                                <th>Trạng thái</th>
                                <th>Thời gian</th>
                                 <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list1 as $row)
                            <tr>
                                <th scope="row">{{ $row->id }}</th>
                                <td>{{ $row->text }}</td>
                                    <td>{{ $row->reply }}</td>
                                 <td>{!! statusSupport($row->status) !!}</td>
                                <td>{{ $row->created_at }}</td>
                                <td><a href="/admin/support/{{$row->id}}/delete" 
                                class="btn btn-sm btn-danger">Xóa</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="basic-datatable_paginate">
                    <ul class="pagination">
                        <li class="paginate_button page-item previous" id="basic-datatable_previous"><a href="#"
                                aria-controls="basic-datatable" data-dt-idx="0" tabindex="0"
                                class="page-link">Trước</a></li>
                        <li class="paginate_button page-item active"><a href="#" aria-controls="basic-datatable"
                                data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                        <li class="paginate_button page-item next disabled" id="basic-datatable_next"><a href="#"
                                aria-controls="basic-datatable" data-dt-idx="7" tabindex="0" class="page-link">Sau</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('script')
<script></script>
@endsection