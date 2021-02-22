{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'granteelists/index', 'data' => []]) 

@section('title', __('staff/titles.reference-grantee_list'))

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
                <h3 class="card-label">{{ __('staff/titles.reference-grantee_list') }}</h3>
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
            >
                <template>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>{{ __('staff/tables.province') }}</th>
                            <th>{{ __('staff/tables.municipality') }}</th>
                            <th>{{ __('staff/tables.barangay') }}</th>
                            <th>{{ __('staff/tables.hh_id') }}</th>
                            <th>{{ __('staff/tables.entryid') }}</th>
                            <th>{{ __('staff/tables.lastname') }}</th>
                            <th>{{ __('staff/tables.firstname') }}</th>
                            <th>{{ __('staff/tables.middlename') }}</th>
                            <th>{{ __('staff/tables.extensionname') }}</th>
                            <th>{{ __('staff/tables.birthday') }}</th>
                            <th>{{ __('staff/tables.age') }}</th>
                            <th>{{ __('staff/tables.clientstatus') }}</th>
                            <th>{{ __('staff/tables.member_status') }}</th>
                            <th>{{ __('staff/tables.sex') }}</th>
                            <th>{{ __('staff/tables.relationship_to_hh_head') }}</th>
                            <th>{{ __('staff/tables.hh_set') }}</th>
                            <th>{{ __('staff/tables.group') }}</th>
                            <th>{{ __('staff/tables.mothers_maiden') }}</th>
                            <th>{{ __('staff/tables.lbp_account_number') }}</th>
                            <th>{{ __('staff/tables.mode_of_payment') }}</th>
                            <th></th>
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