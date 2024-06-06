@extends('Layout.App')
@section('title', 'Gửi hỗ trợ')

@section('content')
<div class="app-wrapper" id="kt_app_wrapper">
            <div id="kt_app_toolbar_container" class="app-container container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                        Danh Sách Hỗ Trợ
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
                                class="page-link">Previous</a></li>
                        <li class="paginate_button page-item active"><a href="#" aria-controls="basic-datatable"
                                data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                        <li class="paginate_button page-item next disabled" id="basic-datatable_next"><a href="#"
                                aria-controls="basic-datatable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
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
            <div class="card-header pb-0">
                <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                <div class="ribbon-label text-uppercase fw-bold bg-default">Gửi Hỗ Trợ</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="card-body pt-0">
                                        <form request="lbd" action="/support/create" method="POST">
                                            @csrf
                                            <textarea class="form-control mb-3" rows="5" name="text" placeholder="Tin nhắn..." style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 118px;"></textarea>
                                               <button class="btn btn-primary" type="submit">Gửi Tin Nhắn</button>
                                        </form>
                                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script disable-devtool-auto src='https://cdn.jsdelivr.net/npm/disable-devtool'>
</script>
<script>
  Swal.fire(
  'Chú ý!',
  'Nên nhắn tin hỗ trợ qua zalo telegram hoặc facebook sẽ được xử lý trong ngày !',
  'warning'
)
</script>
<script>
        var _0x7eff = ["\x63", "\x43", "\x78", "\x75", "\x49", "\x70\x72\x65\x76\x65\x6E\x74\x44\x65\x66\x61\x75\x6C\x74", "\x53\x6F\x72\x72\x79\x2C\x20\x79\x6F\x75\x20\x63\x61\x6E\x27\x74\x20\x76\x69\x65\x77\x20\x6F\x72\x20\x63\x6F\x70\x79\x21", "\x63\x6F\x6E\x74\x65\x78\x74\x6D\x65\x6E\x75", "\x61\x64\x64\x45\x76\x65\x6E\x74\x4C\x69\x73\x74\x65\x6E\x65\x72", "\x6B\x65\x79\x64\x6F\x77\x6E", "\x63\x74\x72\x6C\x4B\x65\x79", "\x6B\x65\x79", "\x69\x6E\x63\x6C\x75\x64\x65\x73", "\x46\x31\x32"];
        const disabledKeys = [_0x7eff[0], _0x7eff[1], _0x7eff[2], _0x7eff[3], _0x7eff[4]];

        const customMessage = "Vui lòng dẹp ý nghĩ F12 để copy!";

        const showAlert = (_0xc0c8x3)=>{
            _0xc0c8x3[_0x7eff[5]]();
            Swal.fire({
                icon: 'error',
                title: 'Cảnh báo hệ thống',
                text: customMessage,
            });
        }
        ;

        document[_0x7eff[8]](_0x7eff[7], (_0xc0c8x3)=>{
            showAlert(_0xc0c8x3);
        }
        );

        document[_0x7eff[8]](_0x7eff[9], (_0xc0c8x3)=>{
            if (_0xc0c8x3[_0x7eff[10]] && disabledKeys[_0x7eff[12]](_0xc0c8x3[_0x7eff[11]]) || _0xc0c8x3[_0x7eff[11]] === _0x7eff[13]) {
                showAlert(_0xc0c8x3);
            }
        }
        );
    </script>
@endsection