{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'archivedgranteelists/index', 'data' => []]) 

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
                <h3 class="card-label">{{ __('staff/titles.archived-grantee_list') }}</h3>
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
                            <th>{{ __('staff/tables.archive_grantee_lists_id') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_region') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_province') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_municipality') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_barangay') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_purok') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_address') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_hh_id') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_entryid') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_lastname') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_firstname') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_middlename') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_extensionname') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_birthday') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_age') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_clientstatus') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_member_status') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_registrationstatus') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_sex') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_relationship_to_hh_head') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_ipaffiliation') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_hh_set') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_group') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_mothers_maiden') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_date_of_enumeration') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_lbp_account_number') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_mode_of_payment') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_date_tagged_hhstatus') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_tagged_by') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_date_registered') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_created_at') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_updated_at') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_upload_history_id') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_archive_date') }}</th>
                            <th>{{ __('staff/tables.archive_grantee_lists_user_id') }}</th>
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