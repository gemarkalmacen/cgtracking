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
                            <th style="width: 1000px; ">{{ __('staff/tables.emv_database_province') }}</th>
                            <th>{{ __('staff/tables.emv_database_municipality') }}</th>
                            <th>{{ __('staff/tables.emv_database_barangay') }}</th>
                            <th>{{ __('staff/tables.emv_database_hh_id') }}</th>
                            <th>{{ __('staff/tables.emv_database_lbp_account') }}</th>
                            <th>{{ __('staff/tables.emv_database_run_date') }}</th>
                            <th>{{ __('staff/tables.emv_database_firstname') }}</th>
                            <th>{{ __('staff/tables.emv_database_middlename') }}</th>
                            <th>{{ __('staff/tables.emv_database_lastname') }}</th>
                            <th>{{ __('staff/tables.emv_database_acct_description') }}</th>
                            <th>{{ __('staff/tables.emv_database_cct_type') }}</th>
                            <th>{{ __('staff/tables.emv_database_lbp_servicing_branch') }}</th>
                            <th>{{ __('staff/tables.emv_database_distribution_status') }}</th>
                            <th>{{ __('staff/tables.emv_database_date_claimed') }}</th>
                            <th>{{ __('staff/tables.emv_database_reason_why_unclaimed') }}</th>
                            <th>{{ __('staff/tables.emv_database_recommended_action') }}</th>
                            <th>{{ __('staff/tables.emv_database_action_taken') }}</th>
                            <th>{{ __('staff/tables.emv_database_date_acted') }}</th>
                            <th>{{ __('staff/tables.emv_database_agreed_distribution_date') }}</th>
                            <th>{{ __('staff/tables.emv_database_batch') }}</th>
                            <th>{{ __('staff/tables.emv_database_entry_id') }}</th>
                            <th>{{ __('staff/tables.emv_database_embossed_name') }}</th>
                            <th>{{ __('staff/tables.emv_database_emv_acct_discre') }}</th>
                            <th>{{ __('staff/tables.emv_database_hh_status') }}</th>
                            <th>{{ __('staff/tables.emv_database_hh_set') }}</th>
                                                   
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