{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'inquiry/index', 'data' => []])

@section('title', __('staff/titles.inquiry'))

@section('plugin_css')
    <link href="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.3') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<!--Begin::Card-->



<div class="card card-custom gutter-b">

<!-- <loading 
    loader="bars"
    :active.sync="isLoading" 
    :can-cancel="false" 
    :is-full-page="fullPage">
</loading>  -->

    <div class="card-body">
        asdasdasd
    </div>
</div>
<!--End::Card-->

@endsection

@section('plugin_script')
    <script src="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.3') }}"></script>
@endsection