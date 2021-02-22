{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'users/crud', 'data' => []])

@section('title', __('staff/titles.users_view'))

@section('content')
    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon">
                    <i class="fas fa-user-tie"></i>
                </span>
                <h3 class="card-label">{{ __('staff/titles.users_view') }}</h3>
            </div>
            <div class="card-toolbar">
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <h5 class="card-label">{{ __('staff/forms.users_details')  }}</h5>
            </div>
            <div class="form-group">
                <label>{{ __('staff/forms.users_status') }}</label>
                <br>
                <span class="label label-inline label-rounded label-{{ $user->details->is_active == 1 ? 'success' : 'danger' }}">
                    {{ __('staff/forms.users_is_active_'.($user->details->is_active ? '1' : '0')) }}
                </span>
            </div>
            <div class="form-group">
                <label>{{ __('staff/forms.users_first_name') }}</label>
                <br>
                {{ $user->details->first_name ?? '' }}
            </div>

            <div class="form-group">
                <label>{{ __('staff/forms.users_last_name') }}</label>
                <br>
                {{ $user->details->last_name ?? '' }}
            </div>

            <div class="form-group">
                <label>{{ __('staff/forms.users_mobile') }}</label>
                <br>
                {{ $user->details->mobile ?? '' }}
            </div>

            <div class="form-group">
                <label>{{ __('staff/forms.users_address') }}</label>
                <br>
                {{ $user->details->address ?? '' }}
            </div>

            <div class="form-group">
                <label>{{ __('staff/forms.users_email') }}</label>
                <br>
                {{ $user->email ?? '' }}
            </div>

            <div class="form-group">
                <label>{{ __('staff/forms.users_role') }}</label>
                @foreach($user->roles as $roles)
                    <br>{{ $roles->name ?? '' }}
                @endforeach
            </div>            
        </div>
        <div class="card-footer align-items-center">
            <div class="kt-form__actions">
                <a href="{{ route('staff.users.index') }}" title="Back" class="btn btn-secondary">{{ __('staff/buttons.cancel') }}</a>
            </div>
        </div>
    </div>
    <!--end::Card-->
@endsection
