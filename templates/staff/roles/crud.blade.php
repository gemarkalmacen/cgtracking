{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'roles/crud', 'data' => [] ])

@section('title', isset($model) ? __('staff/titles.users_edit') : __('staff/titles.users_create'))

@section('content')
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon">
                    <i class="fas fa-user-tag"></i>
                </span>
                <h3 class="card-label">{{ isset($model) ? __('staff/titles.roles_edit') : __('staff/titles.roles_create')  }}</h3>
            </div>
            <div class="card-toolbar">
            </div>
        </div>
        <div class="card-body">
            <form action="{!! isset($model) ? route('staff.roles.update', $model->id) : route('staff.roles.store') !!}" method="POST" enctype="multipart/form-data" class="frm" novalidate="novalidate" autocomplete="off">
                {!! @csrf_field() !!}

                @if( isset($model) )
                {!! @method_field('PUT') !!}
                @endif

                @include ('staff.roles.partials.form')
            </form>
        </div>
    </div>
@endsection

@section('plugin_css')   
@endsection

@section('plugin_script')
    <script src="{{ asset('staff/assets/js/pages/crud/forms/widgets/select2.js') }}"></script>    
@endsection
