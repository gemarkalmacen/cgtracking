{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'overpayment/index', 'data' => []]) 

@section('title', __('staff/titles.reference-over_payment'))

@section('plugin_css')
    <link href="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.3') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon">
                    <i class="fas fa-layer-group"></i>
                </span>
                <h3 class="card-label">{{ __('staff/titles.reference-over_payment') }}</h3>
            </div>            
            <div class="card-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            <datatable
                v-if="config"
                :options="config.options"
                :url="config.url"
                :notifications="config.notifications"

                style="width: 100%"
            >
                <template>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th style="width: 1000px; ">{{ __('staff/tables.over_payment_row_no') }}</th>
                            <th>{{ __('staff/tables.over_payment_run_date') }}</th>
                            <th>{{ __('staff/tables.over_payment_lbp_account') }}</th>
                            <th>{{ __('staff/tables.over_payment_hh_id') }}</th>
                            <th>{{ __('staff/tables.over_payment_lastname') }}</th>
                            <th>{{ __('staff/tables.over_payment_firstname') }}</th>
                            <th>{{ __('staff/tables.over_payment_extension') }}</th>
                            <th>{{ __('staff/tables.over_payment_middlename') }}</th>
                            <th>{{ __('staff/tables.over_payment_filename') }}</th>
                            <th>{{ __('staff/tables.over_payment_ftp_request_filename') }}</th>
                            <th>{{ __('staff/tables.over_payment_Date_claimed') }}</th>
                            <th>{{ __('staff/tables.over_payment_account_status') }}</th>
                            <th>{{ __('staff/tables.over_payment_account_balance') }}</th>
                            <th>{{ __('staff/tables.over_payment_date_acted_by_lbp') }}</th>
                            <th>{{ __('staff/tables.over_payment_ref_no') }}</th>
                            <th>{{ __('staff/tables.over_payment_account_status_remarks') }}</th>
                            <th>{{ __('staff/tables.over_payment_mc_no') }}</th>
                            <th>{{ __('staff/tables.over_payment_ref_matching') }}</th>
                            <th>{{ __('staff/tables.over_payment_matching_status') }}</th>
                            <th>{{ __('staff/tables.over_payment_distribution_status') }}</th>
                            <th>{{ __('staff/tables.over_payment_region') }}</th>
                            <th>{{ __('staff/tables.over_payment_status') }}</th>
                            <th>{{ __('staff/tables.over_payment_mop') }}</th>
                            <th>{{ __('staff/tables.over_payment_account_number_(db)') }}</th>
                            <th>{{ __('staff/tables.over_payment_old_account') }}</th>
                            <th>{{ __('staff/tables.over_payment_hh_status') }}</th>
                            <th>{{ __('staff/tables.over_payment_bal') }}</th>
                            <th>{{ __('staff/tables.over_payment_co_remarks') }}</th>                                                   
                        </tr>
                    </thead>
                </template>
            </datatable>
            <!--end: Datatable-->
        </div>
    </div>
    <!--end::Card-->
@endsection

@section('plugin_script')
    <script src="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.3') }}"></script>
@endsection