{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'orders/show', 'data' => ['details_id' => (isset($model)) ? json_encode($model->id) : json_encode(null) ]])
@section('title',__('staff/titles.orders_view'))

@section('content')

    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-icon">                    
                    <span class="card-icon">
                        <i class="fas fa-shopping-basket"></i>
                    </span>
                    <h3 class="card-label">{{ __('staff/titles.orders_view') }}</h3>
                </h3>
            </div>
        </div>
        <div class="card-body">   

            <input type="hidden" name="order_details_id" id="order_details_id" value="{{ $model->id }}">

            
            <!-- Order Details -->

            <div class="row" style="padding:20px;">
                <div class="col-md-12 col-sm-12">

                    <h4 class="card-label">{{ __('staff/forms.orders_details') }}</h4>
                    <hr></hr>

                    <div class="row" style="padding:20px;">
                        <div class="col-md-4">

                            <div class="form-group">
                                <label>{{ __('staff/forms.orders_details_code') }} </label>
                                <p>{{ isset($model) ? $model->order_code : '' }}</p>
                            </div>

                            <div class="form-group">
                                <label>{{ __('staff/forms.orders_details_created') }} </label>
                                <p>{{ isset($model) ?  date_format(date_create($model->created_at),"M d, Y") : '' }}</p>
                            </div>

                            <div class="form-group">
                                <label>{{ __('staff/forms.orders_details_updated') }} </label>
                                <p>{{ isset($model) ? date_format(date_create($model->updated_at),"M d, Y") : '' }}</p>
                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="form-group">
                                <label>{{ __('staff/forms.orders_total_amount_paid') }} </label>
                                <p>{{ isset($model) ? $model->total_amount_paid : '' }}</p>
                            </div>

                            <div class="form-group">
                                <label>{{ __('staff/forms.orders_doctors_discount_amount') }} </label>
                                <p>{{ isset($model) ? $model->doctors_discount_amount : '' }}</p>
                            </div>

                            <div class="form-group">
                                <label>{{ __('staff/forms.orders_payment_type') }} </label>
                                <p>{{ isset($model) ? ucfirst($model->payment_type) : '' }}</p>
                            </div>

                        </div>
                    </div>                    

                </div>
            </div>

            <!-- END Order Details -->

            <!-- Patient Info -->

            <div class="row" style="padding:20px;">
                <div class="col-md-12 col-sm-12">

                    <h4 class="card-label">{{ __('staff/forms.patients_infomation') }}</h4>
                    <hr></hr>

                    <div class="row" style="padding:20px;">
                        <div class="col-md-3">

                            <div class="form-group">
                                <label>{{ __('staff/forms.patients_firstname') }} </label>
                                <p>{{ isset($model) ? $model->firstname : '' }}</p>
                            </div>                            

                        </div>

                        <div class="col-md-3">

                            <div class="form-group">
                                <label>{{ __('staff/forms.patients_middlename') }} </label>
                                <p>{{ isset($model) ? $model->middlename : '' }}</p>
                            </div>                            

                        </div>

                        <div class="col-md-3">

                            <div class="form-group">
                                <label>{{ __('staff/forms.patients_lastname') }} </label>
                                <p>{{ isset($model) ? $model->lastname : '' }}</p>
                            </div>                            

                        </div>

                        <div class="col-md-3">

                            <div class="form-group">
                                <label>{{ __('staff/forms.patients_extension_name') }} </label>
                                <p>{{ isset($model) ? $model->extension_name : '' }}</p>
                            </div>                            

                        </div>

                        
                    </div>     

                    <div class="row" style="padding:20px;">
                        <div class="col-md-2">

                            <div class="form-group">
                                <label>{{ __('staff/forms.patients_birthdate') }} </label>
                                <p>{{ isset($model) ? date_format(date_create($model->birthdate),"M d, Y") : '' }}</p>
                            </div>                            

                        </div>

                        <div class="col-md-2">

                            <div class="form-group">
                                <label>{{ __('staff/forms.patients_sex') }} </label>
                                <p>{{ isset($model) ? $model->sex : '' }}</p>
                            </div>                            

                        </div>

                        <div class="col-md-2">

                            <div class="form-group">
                                <label>{{ __('staff/forms.patients_civil_status') }} </label>
                                <p>{{ isset($model) ? $model->civil_status : '' }}</p>
                            </div>                            

                        </div>

                        <div class="col-md-3">

                            <div class="form-group">
                                <label>{{ __('staff/forms.patients_email') }} </label>
                                <p>{{ isset($model) ? $model->email : '' }}</p>
                            </div>                            

                        </div>

                        <div class="col-md-3">

                            <div class="form-group">
                                <label>{{ __('staff/forms.patients_contact_number') }} </label>
                                <p>{{ isset($model) ? $model->contact_number : '' }}</p>
                            </div>                            

                        </div>  
                    </div>                         

                    <div class="row" style="padding:20px;">                        

                        <div class="col-md-3">

                            <div class="form-group">
                                <label>{{ __('staff/forms.patients_address_municipality') }} </label>
                                <p>{{ isset($model) ? $model->address_municipality : '' }}</p>
                            </div>                            

                        </div>    

                        <div class="col-md-3">

                            <div class="form-group">
                                <label>{{ __('staff/forms.patients_address_province') }} </label>
                                <p>{{ isset($model) ? $model->address_province : '' }}</p>
                            </div>                            

                        </div>   

                        <div class="col-md-3">

                            <div class="form-group">
                                <label>{{ __('staff/forms.patients_address_zipcode') }} </label>
                                <p>{{ isset($model) ? $model->address_zipcode : '' }}</p>
                            </div>                            

                        </div>    
                    </div>      

                    <div class="row" style="padding:20px;">                        

                        <div class="col-md-3">

                            <div class="form-group">
                                <label>{{ __('staff/forms.patients_address_line1') }} </label>
                                <p>{{ isset($model) ? $model->address_line1 : '' }}</p>
                            </div>                            

                        </div>        
                    </div>      

                </div>
            </div>

            <!-- END Patient Info -->

            <!-- Ordered Items -->

            <div class="row" style="padding:20px;">
                <div class="col-md-12 col-sm-12">
                    <h4 class="card-label">{{ __('staff/forms.orders_ordered_items') }}</h4>
                    <hr></hr>

                    <div class="row" style="padding:20px;">                        

                        <div class="col-md-12">

                            <div class="form-group">
                                
                            <table id="ordered_items" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>{{ __('staff/tables.stocks_description') }}</th>
                                        <th>{{ __('staff/tables.stocks_brand') }}</th>
                                        <th>{{ __('staff/tables.stocks_code') }}</th>
                                        <th>{{ __('staff/tables.stocks_color') }}</th>
                                        <th>{{ __('staff/tables.stocks_size') }}</th>
                                        <th>{{ __('staff/tables.orders_srp') }}</th>
                                        <th>{{ __('staff/tables.stocks_promo') }}</th>
                                    </tr>
                                </thead>
                            </table>

                            </div>                            

                        </div>        
                    </div> 
                </div>
            </div>

            <!-- END Ordered Items -->
                       
        </div>
        <div class="card-footer">
            <div class="kt-form__actions">
                <button type="button"
                        onclick="window.location.href='{{ route('staff.orders.index') }}'"
                        class="btn btn-secondary">{{ __('staff/buttons.cancel') }}
                </button>
            </div>
        </div>
    </div>
    <!--end::Card-->
@endsection

@section('plugin_css')
    <link href="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.3') }}" rel="stylesheet" type="text/css" />
    <style>
        .form-group label {
            font-weight: 700 !important;
        }
        th {
            font-weight: 700 !important;
        }
    </style>
@endsection

@section('plugin_script')
    <script src="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.3') }}"></script>
@endsection
