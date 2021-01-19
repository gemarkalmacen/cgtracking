{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'stock-products/crud', 'data' => [ 'db_stock_details' => (isset($stock_details)) ? json_encode($stock_details) : null, 'db_has_expiration' => (isset($model)) ?  json_encode($model->has_expiration) : null ]])

@section('title', isset($model) ? __('staff/titles.stock_products_edit') : __('staff/titles.stock_products_create'))

@section('content')
<div class="card card-custom">
    <div class="card-header">
        <div class="card-title">
            <span class="card-icon">
                <i class="fas fa-layer-group"></i>
            </span>
            <h3 class="card-label">{{ isset($model) ? __('staff/titles.stock_products_edit') : __('staff/titles.stock_products_create')  }}</h3>
        </div>
        <div class="card-toolbar">
        </div>
    </div>
    <div class="card-body">
        <form id="stockProductsForm" action="{!! isset($model) ? route('staff.stock-products.update', $model->id) : route('staff.stock-products.store') !!}" method="POST" enctype="multipart/form-data" class="frm" novalidate="novalidate">
            {!! @csrf_field() !!}
            @if( isset($model) )
                {!! @method_field('PUT') !!}
            @endif
            @include ('staff.stock-products.partials.form')
        </form>
    </div>
</div>
@endsection
