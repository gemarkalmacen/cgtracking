{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'emvdatabase/index', 'data' => []]) 

@section('title', __('staff/titles.reference-emv_database'))

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
                <h3 class="card-label">{{ __('staff/titles.reference-emv_database') }}</h3>
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
                            <th style="width: 1000px; ">{{ __('staff/tables.province') }}</th>
                            <th>{{ __('staff/tables.municipality') }}</th>
                            <th>{{ __('staff/tables.barangay') }}</th>
                            <th>{{ __('staff/tables.hh_id') }}</th>
                            <th>{{ __('staff/tables.lbp_account') }}</th>
                            <th>{{ __('staff/tables.run_date') }}</th>
                            <th>{{ __('staff/tables.firstname') }}</th>
                            <th>{{ __('staff/tables.middlename') }}</th>
                            <th>{{ __('staff/tables.lastname') }}</th>
                            <th>{{ __('staff/tables.acct_description') }}</th>
                            <th>{{ __('staff/tables.cct_type') }}</th>
                            <th>{{ __('staff/tables.lbp_servicing_branch') }}</th>
                            <th>{{ __('staff/tables.distribution_status') }}</th>
                            <th>{{ __('staff/tables.date_claimed') }}</th>
                            <th>{{ __('staff/tables.reason_why_unclaimed') }}</th>
                            <th>{{ __('staff/tables.recommended_action') }}</th>
                            <th>{{ __('staff/tables.action_taken') }}</th>
                            <th>{{ __('staff/tables.date_acted') }}</th>
                            <th>{{ __('staff/tables.agreed_distribution_date') }}</th>
                            <th>{{ __('staff/tables.batch') }}</th>
                            
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