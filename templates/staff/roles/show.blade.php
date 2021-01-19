{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'roles/crud', 'data' => []])

@section('title', __('staff/titles.roles_view'))

@section('content')
    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon">
                    <i class="fas fa-user-tag"></i>
                </span>
                <h3 class="card-label">{{ __('staff/titles.roles_view') }}</h3>
            </div>
            <div class="card-toolbar">
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <h5 class="card-label">{{ __('staff/forms.roles_details')  }}</h5>
            </div>          
            <div class="form-group">
                <label>{{ __('staff/forms.roles_name') }}</label>
                <br><strong>{{ $role->name ?? '' }}</strong>
            </div>
            <div class="form-group">
                <label>{{ __('staff/forms.roles_manage_permissions') }}</label>
                <br/>
                @if(!empty($rolePermissions))
                    @foreach($rolePermissions as $permission)                        
                        {{ $permission->name }}<br />                        
                    @endforeach
                @endif
            </div>
        </div>
        <div class="card-footer align-items-center">
            <div class="kt-form__actions">
                <a href="{{ route('staff.roles.index') }}" title="Back" class="btn btn-secondary">{{ __('staff/buttons.cancel') }}</a>
            </div>
        </div>
    </div>
    <!--end::Card-->
@endsection
