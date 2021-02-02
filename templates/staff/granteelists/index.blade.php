{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'stocks/index', 'data' => []]) 

@section('title', __('staff/titles.stocks'))

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
                <h3 class="card-label">{{ __('staff/titles.stocks') }}</h3>
            </div>            
            <div class="card-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                        <a href="{{ route('staff.stocks.create') }}" class="btn btn-primary btn-elevate btn-icon-sm">
                            <i class="la la-plus"></i>
                            {{  __('staff/buttons.new_delivery') }}
                        </a>
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
                            <th>{{ __('staff/tables.stocks_category') }}</th>
                            <th>{{ __('staff/tables.stocks_subcategory') }}</th>
                            <th>{{ __('staff/tables.stocks_code') }}</th>
                            <th>{{ __('staff/tables.stocks_brand') }}</th>
                            <th>{{ __('staff/tables.stocks_qty') }}</th>
                            <th>{{ __('staff/tables.stocks_srp') }}</th>
                            <th>{{ __('staff/tables.stocks_is_active') }}</th>
                            <th>{{ __('staff/tables.actions') }}</th>                            
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