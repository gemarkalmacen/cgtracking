{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'categories/index', 'data' => []])
@section('title',__('staff/titles.categories_view'))

@section('content')

    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-icon">                    
                    <span class="card-icon">
                        <i class="fas fa-layer-group"></i>
                    </span>
                    <h3 class="card-label">{{ __('staff/titles.categories_view') }}</h3> 
                </h3>
            </div>
        </div>
        <div class="card-body">        
            <div class="form-group">
                <label>{{ __('staff/forms.categories_name') }} </label>
                <br>{{  $obj->name ?? ''  }}
            </div>            
        </div>
        <div class="card-footer">
            <div class="kt-form__actions">
                <button type="button"
                        onclick="window.location.href='{{ route('staff.categories.index') }}'"
                        class="btn btn-secondary">{{ __('staff/buttons.cancel') }}
                </button>
            </div>
        </div>
    </div>
    <!--end::Card-->
@endsection
