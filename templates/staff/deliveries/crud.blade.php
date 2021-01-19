{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'deliveries/crud', 'data' => ['stock_details_id' => (isset($model)) ? json_encode($model->id) : json_encode(null) ]])

@section('title', isset($model) ? __('staff/titles.deliveries_edit') : __('staff/titles.deliveries_create'))

@section('plugin_css')
    <link href="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.3') }}" rel="stylesheet" type="text/css" />

    <style>
        .select2-container{
            width:100% !important;
        }
    </style>

@endsection

@section('content')
<div class="card card-custom">
    <div class="card-header">
        <div class="card-title">
            <span class="card-icon">
                <i class="fas fa-layer-group"></i>
            </span>
            <h3 class="card-label">{{ isset($model) ? __('staff/titles.deliveries_edit') : __('staff/titles.deliveries_create')  }}</h3>
        </div>
        <div class="card-toolbar">
        </div>
    </div>
    <div class="card-body">
        <form id="deliveriesForm" action="{!! isset($model) ? route('staff.deliveries.update', $model->id) : route('staff.deliveries.store') !!}" method="POST" enctype="multipart/form-data" class="frm" novalidate="novalidate">
            {!! @csrf_field() !!}
            @if( isset($model) )
                {!! @method_field('PUT') !!}
            @endif
            @include ('staff.deliveries.partials.form')
        </form>
    </div>
</div>
@endsection

@section('plugin_script')
    <script src="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.3') }}"></script>
    <script>
        function viewStockFunc(id){
            $('#selectedRowIdView').val(id);
            $("#selectedRowIdView").trigger("change");
        }

        function editStockFunc(id){
            $('#selectedRowIdEdit').val(id);
            $("#selectedRowIdEdit").trigger("change");
        }

        function deleteStockFunc(id){
            $('#selectedRowIdDelete').val(id);
            $("#selectedRowIdDelete").trigger("change");
        }
    </script>
@endsection
