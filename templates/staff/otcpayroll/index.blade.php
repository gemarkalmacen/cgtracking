{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'otcpayroll/index', 'data' => []]) 

@section('title', __('staff/titles.reference-otc_payroll'))

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
                <h3 class="card-label">{{ __('staff/titles.reference-otc_payroll') }}</h3>
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
                            <th style="width: 1000px; ">{{ __('staff/tables.otc_payroll_period') }}</th>
                            <th>{{ __('staff/tables.otc_payroll_year') }}</th>
                            <th>{{ __('staff/tables.otc_payroll_payroll_type') }}</th>
                            <th>{{ __('staff/tables.otc_payroll_region') }}</th>
                            <th>{{ __('staff/tables.otc_payroll_province') }}</th>
                            <th>{{ __('staff/tables.otc_payroll_municipality') }}</th>
                            <th>{{ __('staff/tables.otc_payroll_barangay') }}</th>
                            <th>{{ __('staff/tables.otc_payroll_address_psgc') }}</th>
                            <th>{{ __('staff/tables.otc_payroll_lastname') }}</th>
                            <th>{{ __('staff/tables.otc_payroll_firstname') }}</th>
                            <th>{{ __('staff/tables.otc_payroll_middlename') }}</th>
                            <th>{{ __('staff/tables.otc_payroll_household_id') }}</th>
                            <th>{{ __('staff/tables.otc_payroll_hhset') }}</th>
                            <th>{{ __('staff/tables.otc_payroll_mop') }}</th>
                            <th>{{ __('staff/tables.otc_payroll_card') }}</th>
                            <th>{{ __('staff/tables.otc_payroll_payroll_date') }}</th>
                            <th>{{ __('staff/tables.otc_payroll_educ_dc_elem') }}</th>
                            <th>{{ __('staff/tables.otc_payroll_educ_jr_hs') }}</th>
                            <th>{{ __('staff/tables.otc_payroll_educ_sr_hs') }}</th>
                            <th>{{ __('staff/tables.otc_payroll_educ_total_hs') }}</th>
                            <th>{{ __('staff/tables.otc_payroll_total_educ') }}</th>
                            <th>{{ __('staff/tables.otc_payroll_health') }}</th>
                            <th>{{ __('staff/tables.otc_payroll_rice') }}</th>
                            <th>{{ __('staff/tables.otc_payroll_total_amount') }}</th>
                            <th>{{ __('staff/tables.otc_payroll_set') }}</th>
                            <th>{{ __('staff/tables.otc_payroll_set_group') }}</th>
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