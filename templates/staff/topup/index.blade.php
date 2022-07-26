{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'topup/index', 'data' => []]) 

@section('title', __('staff/titles.reference-topup'))

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
                <h3 class="card-label">{{ __('staff/titles.reference-topup') }}</h3>
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
                            <th>{{ __('staff/tables.top_up_account_number') }}</th>
                            <th>{{ __('staff/tables.top_up_account_name') }}</th>
                            <th>{{ __('staff/tables.top_up_amount') }}</th>
                            <th>{{ __('staff/tables.top_up_transaction_sequence') }}</th>
                            <th>{{ __('staff/tables.top_up_date') }}</th>
                            <th>{{ __('staff/tables.top_up_lcc_batch_no') }}</th>
                            <th>{{ __('staff/tables.top_up_cct_type') }}</th>
                            <th>{{ __('staff/tables.top_up_payroll_type') }}</th>
                            <th>{{ __('staff/tables.top_up_region') }}</th>
                            <th>{{ __('staff/tables.top_up_household_id') }}</th>
                            <th>{{ __('staff/tables.top_up_period_covered') }}</th>
                            <th>{{ __('staff/tables.top_up_lbp_status_report') }}</th>
                            <th>{{ __('staff/tables.top_up_lbp_reject_reason') }}</th>
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