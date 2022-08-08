{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'emvmonitoring/index', 'data' => []]) 

@section('title', __('staff/titles.tools-emv_monitoring'))

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
                <h3 class="card-label">{{ __('staff/titles.tools-emv_monitoring') }}</h3>
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
                            <th style="width: 1000px; ">{{ __('staff/tables.emv_monitoring_full_name') }}</th>
                            <th>{{ __('staff/tables.emv_monitoring_hh_id') }}</th>
                            <th>{{ __('staff/tables.emv_monitoring_client_status') }}</th>
                            <th>{{ __('staff/tables.emv_monitoring_address') }}</th>
                            <th>{{ __('staff/tables.emv_monitoring_sex') }}</th>
                            <th>{{ __('staff/tables.emv_monitoring_hh_set_group') }}</th>
                            <th>{{ __('staff/tables.emv_monitoring_lbp_account') }}</th>
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