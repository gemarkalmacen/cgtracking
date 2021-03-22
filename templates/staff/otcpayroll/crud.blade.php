{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'stocks/crud', 'data' => [ 'db_amount' => (isset($model)) ? json_decode($model->amount) : null, 'db_stock_products' => (isset($stock_products)) ?  json_encode($stock_products) : null ]])

@section('title', isset($model) ? __('staff/titles.stocks_edit') : __('staff/titles.stocks_create'))

@section('content')
<div class="card card-custom">
    <div class="card-header">
        <div class="card-title">
            <span class="card-icon">
                <i class="fas fa-layer-group"></i>
            </span>
            <h3 class="card-label">{{ isset($model) ? __('staff/titles.stocks_edit') : __('staff/titles.stocks_create')  }}</h3>
        </div>
        <div class="card-toolbar">
        </div>
    </div>
    <div class="card-body">
        <form id="stocksForm" action="{!! isset($model) ? route('staff.stocks.update', $model->id) : route('staff.stocks.store') !!}" method="POST" enctype="multipart/form-data" class="frm" novalidate="novalidate">
            {!! @csrf_field() !!}
            @if( isset($model) )
                {!! @method_field('PUT') !!}
            @endif
            @include ('staff.stocks.partials.form')
        </form>
    </div>
</div>
@endsection
