{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'emvvalidations/index', 'data' => []]) 

@section('title', __('staff/titles.tools-emv_validations'))

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
                <h3 class="card-label">{{ __('staff/titles.tools-emv_validations') }}</h3>
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
                            <th>{{ __('staff/tables.emv_validations_first_name') }}</th>
                            <th>{{ __('staff/tables.emv_validations_last_name') }}</th>
                            <th>{{ __('staff/tables.emv_validations_middle_name') }}</th>
                            <th>{{ __('staff/tables.emv_validations_ext_name') }}</th>
                            <th>{{ __('staff/tables.emv_validations_hh_id') }}</th>
                            <th>{{ __('staff/tables.emv_validations_hh_status') }}</th>
                            <th>{{ __('staff/tables.emv_validations_province') }}</th>
                            <th>{{ __('staff/tables.emv_validations_municipality') }}</th>
                            <th>{{ __('staff/tables.emv_validations_barangay') }}</th>
                            <th>{{ __('staff/tables.emv_validations_sex') }}</th>
                            <th>{{ __('staff/tables.emv_validations_hh_set_group') }}</th>
                            <th>{{ __('staff/tables.emv_validations_nma_amount') }}</th>
                            <th>{{ __('staff/tables.emv_validations_grantee_card_number') }}</th>
                            <th>{{ __('staff/tables.emv_validations_grantee_distribution_status') }}</th>
                            <th>{{ __('staff/tables.emv_validations_grantee_card_release_date') }}</th>
                            <th>{{ __('staff/tables.emv_validations_other_card_number_1') }}</th>
                            <th>{{ __('staff/tables.emv_validations_other_card_distribution_status_1') }}</th>
                            <th>{{ __('staff/tables.emv_validations_other_card_release_date_1') }}</th>
                            <th>{{ __('staff/tables.emv_validations_other_card_number_2') }}</th>
                            <th>{{ __('staff/tables.emv_validations_other_card_distribution_status_2') }}</th>
                            <th>{{ __('staff/tables.emv_validations_other_card_release_date_2') }}</th>
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