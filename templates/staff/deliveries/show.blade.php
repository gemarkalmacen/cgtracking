{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'deliveries/show', 'data' => ['stock_details_id' => (isset($model)) ? json_encode($model->id) : json_encode(null) ]])
@section('title',__('staff/titles.deliveries_view'))

@section('plugin_css')
    <link href="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.3') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-icon">                    
                    <span class="card-icon">
                        <i class="fas fa-layer-group"></i>
                    </span>
                    <h3 class="card-label">{{ __('staff/titles.deliveries_view') }}</h3> 
                </h3>
            </div>
        </div>
        <div class="card-body">   
            

            <!-- form -->

            <div class="row" style="padding:20px;">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <!-- Delivery details -->    
                    
                    <h5>{{ __('staff/forms.deliveries_details') }}</h5>
                    <hr></hr>

                    <div class="form-group">
                        <label>{{ __('staff/forms.deliveries_dr_no') }} </label>
                        <p>{{ isset($model) ? $model->dr_no : '' }}</p>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <label>{{ __('staff/forms.deliveries_dr_date') }} </label>
                            <p>{{ isset($model) ? date('Y-m-d', strtotime($model->dr_date)) : '' }}</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>{{ __('staff/forms.deliveries_si_no') }} </label>
                        <p>{{ isset($model) ? $model->si_no : '' }}</p>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <label>{{ __('staff/forms.deliveries_si_date') }} </label>
                            <p>{{ isset($model) ? date('Y-m-d', strtotime($model->si_date)) : '' }}</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>{{ __('staff/forms.deliveries_supplier') }} </label>
                        <p>{{ isset($model) ? $model->supplier->name : '' }}</p>
                    </div>

                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <!-- Agent -->

                    <h5>{{ __('staff/forms.deliveries_agent_details') }}</h5>
                    <hr></hr>

                    <div class="form-group">
                        <label>{{ __('staff/forms.deliveries_agent_fullname') }} </label>
                        <p>{{ isset($model) ? $model->agent_fullname : '' }}</p>
                    </div>

                    <div class="form-group">
                        <label>{{ __('staff/forms.deliveries_agent_contact_number') }} </label>
                        <p>{{ isset($model) ? $model->agent_contact_number : '' }}</p>
                    </div>

                    <div class="form-group">
                        <label>{{ __('staff/forms.deliveries_agent_address') }} </label>
                        <p>{{ isset($model) ? $model->agent_address : '' }}</p>
                    </div>

                </div>
            </div>

            <!-- end form -->

            <div class="row" style="padding:20px;">

                <div class="col-md-12">

                        <h5>{{ __('staff/forms.deliveries_stock_details') }}</h5>
                        <hr></hr>

                        <!-- stock details -->

                        <div class="row" id="div_stock_details_show" style="margin-top: 20px;">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <!--begin: Datatable-->
                                <table id="stocksTable" class="table table-checkable table-hover dataTable no-footer dtr-inline" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>{{ __('staff/tables.deliveries_category') }}</th>
                                            <th>{{ __('staff/tables.deliveries_sub_category') }}</th>
                                            <th>{{ __('staff/tables.deliveries_stock_code') }}</th>
                                            <th>{{ __('staff/tables.deliveries_brand_name') }}</th>
                                            <th>{{ __('staff/tables.deliveries_quantity') }}</th>
                                            <th>{{ __('staff/tables.deliveries_srp') }}</th>
                                            <th>{{ __('staff/tables.deliveries_is_active') }}</th>   
                                        </tr>
                                    </thead>
                                </table>
                                <!--end: Datatable-->
                            </div>
                        </div>

                        <!-- end stock details -->

                </div>

            </div>
            
                       
        </div>
        <div class="card-footer">
            <div class="kt-form__actions">
                <button type="button"
                        onclick="window.location.href='{{ route('staff.deliveries.index') }}'"
                        class="btn btn-secondary">{{ __('staff/buttons.cancel') }}
                </button>
            </div>
        </div>
    </div>
    <!--end::Card-->
@endsection

@section('plugin_script')
    <script src="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.3') }}"></script>
@endsection
