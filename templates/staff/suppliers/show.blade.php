{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'suppliers/index', 'data' => []])
@section('title',__('staff/titles.suppliers_view'))

@section('content')

    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-icon">                    
                    <span class="card-icon">
                        <i class="fas fa-caravan"></i>
                    </span>
                    <h3 class="card-label">{{ __('staff/titles.suppliers_view') }}</h3> 
                </h3>
            </div>
        </div>
        <div class="card-body">        
            <div class="form-group">
                <label>{{ __('staff/forms.suppliers_code') }} </label>
                <br>{{  $obj->code ?? ''  }}
            </div>
            <div class="form-group">
                <label>{{ __('staff/forms.suppliers_name') }} </label>
                <br>{{  $obj->name ?? ''  }}
            </div>            
            <div class="form-group">
                <label>{{ __('staff/forms.suppliers_email') }} </label>
                <br>{{  $obj->email ?? ''  }}
            </div>
            <div class="form-group">
                <label>{{ __('staff/forms.suppliers_contact') }} </label>
                <br>{{  $obj->contact_number ?? ''  }}
            </div>
            <div class="form-group">
                <label>{{ __('staff/forms.suppliers_address') }} </label>
                <br>{{  $obj->address ?? ''  }}
            </div>
            <div class="form-group">
                <label>{{ __('staff/forms.suppliers_tin') }} </label>
                <br>{{  $obj->tin ?? ''  }}
            </div>
        </div>
        <div class="card-footer">
            <div class="kt-form__actions">
                <button type="button"
                        onclick="window.location.href='{{ route('staff.suppliers.index') }}'"
                        class="btn btn-secondary">{{ __('staff/buttons.cancel') }}
                </button>
            </div>
        </div>
    </div>
    <!--end::Card-->
@endsection
