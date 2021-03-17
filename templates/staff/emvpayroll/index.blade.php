{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'emvpayroll/index', 'data' => []]) 

@section('title', __('staff/titles.reference-emv_payroll'))

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
                <h3 class="card-label">{{ __('staff/titles.reference-emv_payroll') }}</h3>
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
                            <th style="width: 1000px; ">{{ __('staff/tables.period') }}</th>
                            <th>{{ __('staff/tables.year') }}</th>
                            <th>{{ __('staff/tables.payroll_type') }}</th>
                            <th>{{ __('staff/tables.region') }}</th>
                            <th>{{ __('staff/tables.province') }}</th>
                            <th>{{ __('staff/tables.municipality') }}</th>
                            <th>{{ __('staff/tables.barangay') }}</th>
                            <th>{{ __('staff/tables.address_psgc') }}</th>
                            <th>{{ __('staff/tables.lastname') }}</th>
                            <th>{{ __('staff/tables.firstname') }}</th>
                            <th>{{ __('staff/tables.middlename') }}</th>
                            <th>{{ __('staff/tables.hh_id') }}</th>
                            <th>{{ __('staff/tables.hh_set') }}</th>
                            <th>{{ __('staff/tables.mop') }}</th>
                            <th>{{ __('staff/tables.card') }}</th>
                            <th>{{ __('staff/tables.payroll_date') }}</th>
                            <th>{{ __('staff/tables.educ_dc_elem') }}</th>
                            <th>{{ __('staff/tables.educ_jr_hs') }}</th>
                            <th>{{ __('staff/tables.educ_sr_hs') }}</th>
                            <th>{{ __('staff/tables.educ_total_hs') }}</th>
                            <th>{{ __('staff/tables.total_educ') }}</th>
                            <th>{{ __('staff/tables.health') }}</th>
                            <th>{{ __('staff/tables.rice') }}</th>
                            <th>{{ __('staff/tables.total_amount') }}</th>
                            <th>{{ __('staff/tables.set') }}</th>
                            <th>{{ __('staff/tables.set_group') }}</th>
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