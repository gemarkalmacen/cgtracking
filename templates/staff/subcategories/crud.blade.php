{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'subcategories/crud', 'data' => []])

@section('title', isset($model) ? __('staff/titles.subcategories_edit') : __('staff/titles.subcategories_create'))

@section('content')
<div class="card card-custom">
    <div class="card-header">
        <div class="card-title">
            <span class="card-icon">
                <i class="fas fa-layer-group"></i>
            </span>
            <h3 class="card-label">{{ isset($model) ? __('staff/titles.subcategories_edit') : __('staff/titles.subcategories_create')  }}</h3>
        </div>
        <div class="card-toolbar">
        </div>
    </div>
    <div class="card-body">
        <form action="{!! isset($model) ? route('staff.subcategories.update', $model->id) : route('staff.subcategories.store') !!}" method="POST" enctype="multipart/form-data" class="frm" novalidate="novalidate">
            {!! @csrf_field() !!}
            @if( isset($model) )
                {!! @method_field('PUT') !!}
            @endif
            @include ('staff.subcategories.partials.form')
        </form>
    </div>
</div>    
@endsection
