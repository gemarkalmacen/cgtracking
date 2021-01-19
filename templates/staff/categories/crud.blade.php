{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'categories/crud', 'data' => []])

@section('title', isset($model) ? __('staff/titles.categories_edit') : __('staff/titles.categories_create'))

@section('content')
<div class="card card-custom">
    <div class="card-header">
        <div class="card-title">
            <span class="card-icon">
                <i class="fas fa-layer-group"></i>
            </span>
            <h3 class="card-label">{{ isset($model) ? __('staff/titles.categories_edit') : __('staff/titles.categories_create')  }}</h3>
        </div>
        <div class="card-toolbar">
        </div>
    </div>
    <div class="card-body">
        <form action="{!! isset($model) ? route('staff.categories.update', $model->id) : route('staff.categories.store') !!}" method="POST" enctype="multipart/form-data" class="frm" novalidate="novalidate">
            {!! @csrf_field() !!}
            @if( isset($model) )
                {!! @method_field('PUT') !!}
            @endif
            @include ('staff.categories.partials.form')
        </form>
    </div>
</div>    
@endsection
