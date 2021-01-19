{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'orders/crud', 'data' => ['order_details_id' => (isset($model)) ? json_encode($model->id) : json_encode(null) ]])
@section('title', isset($model) ? __('staff/titles.orders_edit') : __('staff/titles.orders_create'))

@section('content')
<div class="card card-custom">
    <div class="card-header">
        <div class="card-title">
            <span class="card-icon">
                <i class="fas fa-shopping-basket"></i>
            </span>
            <h3 class="card-label">{{ isset($model) ? __('staff/titles.orders_edit') : __('staff/titles.orders_create')  }}</h3>
        </div>
        <div class="card-toolbar">
        </div>
    </div>
    <div class="card-body p-0">
        <div class="wizard wizard-1" id="kt_wizard_v1" data-wizard-state="step-first" data-wizard-clickable="false">
            <div class="wizard-nav border-bottom">
                <div class="wizard-steps p-8 p-lg-10">
                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                        <div class="wizard-label">
                            <i class="wizard-icon flaticon-bus-stop"></i>
                            <h3 class="wizard-title">{{ __('staff/forms.patients') }}</h3>
                        </div>
                        <span class="svg-icon svg-icon-xl wizard-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                </g>
                            </svg>
                        </span>
                    </div>
                    <div class="wizard-step" data-wizard-type="step">
                        <div class="wizard-label">
                            <i class="wizard-icon flaticon-list"></i>
                            <h3 class="wizard-title">{{ __('staff/forms.orders') }}</h3>
                        </div>
                        <span class="svg-icon svg-icon-xl wizard-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                </g>
                            </svg>
                        </span>
                    </div>
                    <div class="wizard-step" data-wizard-type="step">
                        <div class="wizard-label">
                            <i class="wizard-icon flaticon-list"></i>
                            <h3 class="wizard-title">{{ __('staff/forms.orders_payment') }}</h3>
                        </div>
                        <span class="svg-icon svg-icon-xl wizard-arrow last">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                </g>
                            </svg>
                        </span>
                    </div>
                    <!-- <div class="wizard-step" data-wizard-type="step">
                        <div class="wizard-label">
                            <i class="wizard-icon flaticon-globe"></i>
                            <h3 class="wizard-title">{{ __('staff/forms.billings') }}</h3>
                        </div>
                        <span class="svg-icon svg-icon-xl wizard-arrow last">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                </g>
                            </svg>
                        </span>
                    </div> -->
                </div>
            </div>
            <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                <div class="col-xl-12 col-xxl-11">
                <form id="kt_form" @submit.prevent="ordersTransaction({{ isset($model->id) ? json_encode($model->id) : json_encode(null)  }})" class="mb-3">
                    {!! @csrf_field() !!}
                    @if( isset($model) )
                        {!! @method_field('PUT') !!}
                    @endif
                    @include ('staff.orders.partials.form')
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('plugin_css')
    <link href="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.3') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('staff/assets/css/pages/wizard/wizard-1.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('staff/assets/css/pages/typeahead/typeahead.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .tt-menu{
            background-color: aliceblue;
            cursor: pointer;
        }        

        .nav.nav-bold .nav-item .nav-link .nav-text {
            font-size: 16px;
        }

    </style>
@endsection

@section('plugin_script')
    <script src="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.3') }}"></script>
    <script src="{{ url('staff/assets/js/pages/custom/wizard/wizard-1.js') }}"></script>
    <script src="{{ url('staff/assets/js/pages/custom/typeahead/typeahead.bundle.js') }}"></script>

    <!-- Typeahead -->
    <script>

        function get_patient(id){
            $.ajax({
                url: '/staff/ajax/patients/fetch_patients/' + id,
                type: 'GET',
                dataType: 'JSON',
                success: function (response) {
                    if (response) {

                        $('#sex').prop("disabled", true);
                        $("#birthdate").prop("readonly", true);
                        $("#address_line1").prop("readonly", true);
                        $("#address_zipcode").prop("readonly", true);
                        $("#address_municipality").prop("readonly", true);
                        $("#address_province").prop("readonly", true);
                        $("#contact_number").prop("readonly", true);

                        $('#typeahead_patient').val(JSON.stringify(response));
                        $("#typeahead_patient").trigger("change");
                    }
                }
            });
        }

        

        $(document).ready(function(){

            var patients = [];
            
            // Constructing the suggestion engine
            var patients = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                local: patients,
                remote: {
                    url: '/staff/ajax/patients/typeahead_patient?keyword=%QUERY',
                    wildcard: '%QUERY',
                }
            });
            
            // Initializing the typeahead
            $('#firstname').typeahead({
                hint: true,
                highlight: true, /* Enable substring highlighting */
                minLength: 1 /* Specify minimum characters required for showing suggestions */
            },
            {
                name: 'patients',
                display: 'firstname',
                source: patients,
                templates: {
                    empty: [
                    '<div class="empty-message">',
                        'unable to find any patient that match the current query',
                    '</div>'
                    ].join('\n'),
                    suggestion: Handlebars.compile('<div><strong>@{{fullname}}</strong></div>')
                }
            }
            );

            $('#firstname').bind('typeahead:select', function(ev, suggestion) {
                get_patient(suggestion.id);
            });


            $('#middlename').typeahead({
                hint: true,
                highlight: true, /* Enable substring highlighting */
                minLength: 1 /* Specify minimum characters required for showing suggestions */
            },
            {
                name: 'patients',
                display: 'middlename',
                source: patients,
                templates: {
                    empty: [
                    '<div class="empty-message">',
                        'unable to find any patient that match the current query',
                    '</div>'
                    ].join('\n'),
                    suggestion: Handlebars.compile('<div><strong>@{{fullname}}</strong></div>')
                }
            }
            );

            $('#middlename').bind('typeahead:select', function(ev, suggestion) {
                get_patient(suggestion.id);
            });

            $('#lastname').typeahead({
                hint: true,
                highlight: true, /* Enable substring highlighting */
                minLength: 1 /* Specify minimum characters required for showing suggestions */
            },
            {
                name: 'patients',
                display: 'lastname',
                source: patients,
                templates: {
                    empty: [
                    '<div class="empty-message">',
                        'unable to find any patient that match the current query',
                    '</div>'
                    ].join('\n'),
                    suggestion: Handlebars.compile('<div><strong>@{{fullname}}</strong></div>')
                }
            }
            );

            $('#lastname').bind('typeahead:select', function(ev, suggestion) {
                get_patient(suggestion.id);
            });

            $('#extension_name').typeahead({
                hint: true,
                highlight: true, /* Enable substring highlighting */
                minLength: 1 /* Specify minimum characters required for showing suggestions */
            },
            {
                name: 'patients',
                display: 'extension_name',
                source: patients,
                templates: {
                    empty: [
                    '<div class="empty-message">',
                        'unable to find any patient that match the current query',
                    '</div>'
                    ].join('\n'),
                    suggestion: Handlebars.compile('<div><strong>@{{fullname}}</strong></div>')
                }
            }
            );

            $('#extension_name').bind('typeahead:select', function(ev, suggestion) {
                get_patient(suggestion.id);
            });

        }); 
    
    </script>
    <!-- END Typeahead -->

@endsection