@extends('Admin.Layout.App')
@section('title', 'Lịch sử nạp tiền')

@section('content')
<div class="app-wrapper" id="kt_app_wrapper">
            <div id="kt_app_toolbar_container" class="app-container container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                        Lịch sử nạp tiền
                                            <span class="ribbon-inner bg-default"></span>
                                        </div>
                                    </div>
                <div class="card-body">
            
                    <div class="table-responsive">
                        <div id="" class="dataTables_wrapper w-100 overflow-x-auto overflow-y-hidden">
                            <table id="testds"
                                class="table border table-striped table-bordered display text-nowrap dataTable responsive w-100"
                                aria-describedby="file_export_info">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tài khoản</th>
                                        <th>Loại</th>
                                        <th>Người chuyển</th>
                                        <th>Mã giao dịch</th>
                                        <th>Số tiền</th>
                                        <th>Khuyến mãi</th>
                                        <th>Thực nhận</th>
                                        <th>Note</th>
                                        <th>Thời gian</th>
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
    </div>    </div>
@endsection
@section('script')
    <script>
        createDataTable('#testds', '{{ route('admin.list', 'history-recharge') }}', [{
            data: 'id'
        }, {
            data: 'username'
        }, {
            data: 'type_bank',
        }, {
            data: 'name_bank'
        }, {
            data: 'tranid'
        }, {
            data: 'amount'
        }, {
            data: 'promotion'
        }, {
            data: 'real_amount'
        }, {
            data: 'note'
        }, {
            data: 'created_at'
        }])
    </script>
@endsection
