{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'users/crud', 'data' => ['user_role'=> isset($model) ? (count($model->getRoleNames()) != 0) ? $model->getRoleNames()[0] : '' : '' ] ])

@section('title', isset($model) ? __('staff/titles.users_edit') : __('staff/titles.users_create'))

@section('content')
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon">
                    <i class="fas fa-user-tie"></i>
                </span>
                <h3 class="card-label">{{ isset($model) ? __('staff/titles.users_edit') : __('staff/titles.users_create')  }}</h3>
            </div>
            <div class="card-toolbar">
            </div>
        </div>
        <div class="card-body">
            <form action="{!! isset($model) ? route('staff.users.update', $model->id) : route('staff.users.store') !!}" method="POST" enctype="multipart/form-data" class="frm" novalidate="novalidate">
                {!! @csrf_field() !!}

                @if( isset($model) )
                {!! @method_field('PUT') !!}
                @endif

                @include ('staff.users.partials.form')
            </form>
        </div>
    </div>
@endsection

@section('plugin_css')
    <link href="{{ asset('staff/assets/js/pages/crud/intl-tel-input/css/intlTelInput.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('staff/assets/js/pages/crud/intl-tel-input/css/isValidNumber.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .iti {
          width: 100% !important;
        }
    </style>
@endsection

@section('plugin_script')
    <script src="{{ asset('staff/assets/js/pages/crud/forms/widgets/select2.js') }}"></script>
    <script src="{{ asset('staff/assets/js/pages/crud/intl-tel-input/js/intlTelInput.js') }}"></script>
@endsection
