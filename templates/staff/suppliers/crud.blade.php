{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'suppliers/crud', 'data' => []])

@section('title', isset($model) ? __('staff/titles.suppliers_edit') : __('staff/titles.suppliers_create'))

@section('content')
<div class="card card-custom">
    <div class="card-header">
        <div class="card-title">
            <span class="card-icon">
                <i class="fas fa-caravan"></i>
            </span>
            <h3 class="card-label">{{ isset($model) ? __('staff/titles.suppliers_edit') : __('staff/titles.suppliers_create')  }}</h3>
        </div>
        <div class="card-toolbar">
        </div>
    </div>
    <div class="card-body">
        <form action="{!! isset($model) ? route('staff.suppliers.update', $model->id) : route('staff.suppliers.store') !!}" method="POST" enctype="multipart/form-data" class="frm" novalidate="novalidate">
            {!! @csrf_field() !!}
            @if( isset($model) )
                {!! @method_field('PUT') !!}
            @endif
            @include ('staff.suppliers.partials.form')
        </form>
    </div>
</div>    
@endsection
