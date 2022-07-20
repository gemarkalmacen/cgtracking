{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'nonemv/index', 'data' => []]) 

@section('title', __('staff/titles.reference-nonemv'))

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
                <h3 class="card-label">{{ __('staff/titles.reference-nonemv') }}</h3>
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
                            <th>{{ __('staff/tables.non_emv_id') }}</th>
                            <th>{{ __('staff/tables.non_emv_row_id') }}</th>
                            <th>{{ __('staff/tables.non_emv_card_number') }}</th>
                            <th>{{ __('staff/tables.non_emv_last_name') }}</th>
                            <th>{{ __('staff/tables.non_emv_first_name') }}</th>
                            <th>{{ __('staff/tables.non_emv_middle_name') }}</th>
                            <th>{{ __('staff/tables.non_emv_naa_address') }}</th>
                            <th>{{ __('staff/tables.non_emv_cif_permanent_address') }}</th>
                            <th>{{ __('staff/tables.non_emv_cif_present_address') }}</th>
                            <th>{{ __('staff/tables.non_emv_nationality_cif_tel_no') }}</th>
                            <th>{{ __('staff/tables.non_emv_entry_number') }}</th>
                            <th>{{ __('staff/tables.non_emv_card_status') }}</th>
                            <th>{{ __('staff/tables.non_emv_birthday') }}</th>
                            <th>{{ __('staff/tables.non_emv_balance_as_of') }}</th>
                            <th>{{ __('staff/tables.non_emv_account_balance') }}</th>
                            <th>{{ __('staff/tables.non_emv_hh_id') }}</th>
                            <th>{{ __('staff/tables.non_emv_region') }}</th>
                            <th>{{ __('staff/tables.non_emv_province') }}</th>
                            <th>{{ __('staff/tables.non_emv_municipality') }}</th>
                            <th>{{ __('staff/tables.non_emv_barangay') }}</th>
                            <th>{{ __('staff/tables.non_emv_hh_first_name') }}</th>
                            <th>{{ __('staff/tables.non_emv_hh_middle_name') }}</th>
                            <th>{{ __('staff/tables.non_emv_hh_last_name') }}</th>
                            <th>{{ __('staff/tables.non_emv_hh_ext_name') }}</th>
                            <th>{{ __('staff/tables.non_emv_hh_birthdate') }}</th>
                            <th>{{ __('staff/tables.non_emv_entry_id') }}</th>
                            <th>{{ __('staff/tables.non_emv_mothers_maiden_name') }}</th>
                            <th>{{ __('staff/tables.non_emv_client_status') }}</th>
                            <th>{{ __('staff/tables.non_emv_payment_mode') }}</th>
                            <th>{{ __('staff/tables.non_emv_hh_set') }}</th>
                            <th>{{ __('staff/tables.non_emv_set_group') }}</th>
                            <th>{{ __('staff/tables.non_emv_hh_card_number') }}</th>
                            <th>{{ __('staff/tables.non_emv_kyc_remarks') }}</th>
                            <th>{{ __('staff/tables.non_emv_account_number_remarks') }}</th>
                            <th>{{ __('staff/tables.non_emv_age_bracket') }}</th>
                            <th>{{ __('staff/tables.non_emv_amount_bracket') }}</th>
                            <th>{{ __('staff/tables.non_emv_nma_remarks') }}</th>
                            <th>{{ __('staff/tables.non_emv_nma_remarks_reason') }}</th>
                            <th>{{ __('staff/tables.non_emv_nma_recommended_action') }}</th>
                            <th>{{ __('staff/tables.non_emv_upload_history_id') }}</th>
                            <th>{{ __('staff/tables.non_emv_created_at') }}</th>
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