{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'orders/index', 'data' => []]) 

@section('title', __('staff/titles.orders'))

@section('plugin_css')
    <link href="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.3') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon">
                    <i class="fas fa-shopping-basket"></i>
                </span>
                <h3 class="card-label">{{ __('staff/titles.orders') }}</h3>
            </div>            
            <div class="card-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                        <a href="{{ route('staff.orders.create') }}" class="btn btn-primary btn-elevate btn-icon-sm">
                            <i class="la la-plus"></i>
                            {{  __('staff/buttons.new_orders') }}
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
                            <th>{{ __('staff/tables.order_details_code') }}</th>
                            <th>{{ __('staff/tables.patients_lastname') }}</th>
                            <th>{{ __('staff/tables.patients_firstname') }}</th>
                            <th>{{ __('staff/tables.patients_middlename') }}</th>
                            <th>{{ __('staff/tables.extension_name') }}</th>
                            <th>{{ __('staff/tables.order_details_total_amount_paid') }}</th>
                            <th>{{ __('staff/tables.order_details_total_discounted_amount') }}</th>
                            <th>{{ __('staff/tables.order_details_discount_type') }}</th>
                            <!-- <th>{{ __('staff/tables.actions') }}</th> -->
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

    <script>
        function clicked(data){
            window.open('/staff/ajax/orders/print_orders/'+data,'popup','width=1000,height=530,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
        }
    </script>
@endsection