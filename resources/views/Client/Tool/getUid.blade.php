@extends('Layout.App')
@section('title', 'Get UID')

@section('content')
<div class="app-wrapper" id="kt_app_wrapper">
            <div id="kt_app_toolbar_container" class="app-container container-fluid">
    <div class="row">
        <div class="col-md-12">
        <div class="card card-flush">
            <div class="card-header ribbon ribbon-start ribbon-clip border-bottom-none min-h-50px">
                                        <div class="ribbon-label text-uppercase fw-bold bg-default">
                                        Get UID Facebook
                                            <span class="ribbon-inner bg-default"></span>
                                        </div>
                                    </div>
                <div class="card-body">
                    <form action="{{ route('tool.uid.post', 'get-uid') }}" method="POST">
                        @csrf
                        <div class="col-md-12 mb-3">
                            <input type="text" class="form-control mb-3" placeholder="Nh廕計 link Facebook" name="link" id="link" value="{{ session('link') }}">
                         
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary col-12" id="getUID">Get UID</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script disable-devtool-auto src='https://cdn.jsdelivr.net/npm/disable-devtool'></script>
@endsection