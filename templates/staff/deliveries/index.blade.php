{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'deliveries/index', 'data' => []]) 

@section('title', __('staff/titles.deliveries'))

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
                <h3 class="card-label">{{ __('staff/titles.deliveries') }}</h3>
            </div>            
            <div class="card-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                        <a href="{{ route('staff.deliveries.create') }}" class="btn btn-primary btn-elevate btn-icon-sm">
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
                            <th>{{ __('staff/tables.deliveries_date') }}</th>              
                            <th>{{ __('staff/tables.deliveries_supplier') }}</th>
                            <th>{{ __('staff/tables.deliveries_agent') }}</th>
                            <th>{{ __('staff/tables.deliveries_contact') }}</th>                            
                            <th>{{ __('staff/tables.deliveries_item') }}</th>
                            <th>{{ __('staff/tables.deliveries_amount') }}</th>                            
                            <th>{{ __('staff/tables.deliveries_user') }}</th>
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