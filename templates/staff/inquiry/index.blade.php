{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'uploadhistory/index', 'data' => []]) 

@section('title', __('staff/titles.reference-uploadhistory'))

@section('plugin_css')
    <link href="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.3') }}" rel="stylesheet" type="text/css" />
    <!-- <link href="{{ url('staff/assets/vendors/general/tether/dist/css/tether.css') }}" rel="stylesheet" type="text/css" /> -->
@endsection

@section('content')
    <!-- <div class="card card-custom">
        <div class="row">
            
        </div>
    </div> -->

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

<!--Begin:: Portlet-->
<div class="kt-portlet">
    <div class="kt-portlet__body">
        <div class="kt-widget kt-widget--user-profile-3">
            <div class="kt-widget__top">
                <div class="kt-widget__media kt-hidden">
                    <img src="./assets/media/users/100_12.jpg" alt="image">
                </div>
                <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-bolder kt-font-light">
                    JM
                </div>
                <div class="kt-widget__content">
                    <div class="kt-widget__head">
                        <div class="kt-widget__user">
                            <a href="#" class="kt-widget__username">
                                David Smith
                            </a>
                            <span class="kt-badge kt-badge--bolder kt-badge kt-badge--inline kt-badge--unified-success">Customer</span>
                            <div class="dropdown dropdown-inline kt-margin-l-5" data-toggle="kt-tooltip-" title="Change label" data-placement="right">
                                <a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-fit dropdown-menu-right">
                                    <ul class="kt-nav">
                                        <li class="kt-nav__head">
                                            Choose label:
                                            <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                        </li>
                                        <li class="kt-nav__separator">
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link" data-toggle="status-change" data-status="1">
                                                <span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-success kt-badge--inline kt-badge--lg kt-badge--bold">Customer</span></span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link" data-toggle="status-change" data-status="2">
                                                <span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-danger kt-badge--inline kt-badge--lg kt-badge--bold">Partner</span></span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link" data-toggle="status-change" data-status="3">
                                                <span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-warning kt-badge--inline kt-badge--lg kt-badge--bold">Supplier</span></span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link" data-toggle="status-change" data-status="4">
                                                <span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-info kt-badge--inline kt-badge--lg kt-badge--bold">On Hold</span></span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link" data-toggle="status-change" data-status="4">
                                                <span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-brand kt-badge--inline kt-badge--lg kt-badge--bold">Staff</span></span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__separator">
                                        </li>
                                        <li class="kt-nav__foot">
                                            <a class="btn btn-clean btn-bold btn-sm" href="#"><i class="flaticon2-add-1 kt-icon-sm"></i> Add new</a>
                                            <a class="btn btn-clean btn-bold btn-sm kt-hidden" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="kt-widget__action">
                            <a href="#" class="btn btn-label-brand btn-sm btn-upper">Contact</a>
                            <div class="dropdown dropdown-inline">
                                <a href="#" class="btn btn-brand btn-sm btn-upper dropdown-toggle" data-toggle="dropdown">
                                    Export
                                </a>
                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

                                    <!--begin::Nav-->
                                    <ul class="kt-nav">
                                        <li class="kt-nav__head">
                                            Export Options
                                            <span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect id="bound" x="0" y="0" width="24" height="24" />
                                                        <circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                                        <rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
                                                        <rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
                                                    </g>
                                                </svg> </span>
                                        </li>
                                        <li class="kt-nav__separator"></li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-drop"></i>
                                                <span class="kt-nav__link-text">Activity</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                                <span class="kt-nav__link-text">FAQ</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-link"></i>
                                                <span class="kt-nav__link-text">Settings</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                                <span class="kt-nav__link-text">Support</span>
                                                <span class="kt-nav__link-badge">
                                                    <span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__separator"></li>
                                        <li class="kt-nav__foot">
                                            <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                                            <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                        </li>
                                    </ul>

                                    <!--end::Nav-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-widget__subhead">
                        <a href="#"><i class="flaticon2-new-email"></i>david.s@loop.com</a>
                        <a href="#"><i class="flaticon2-calendar-3"></i>PR Manager </a>
                        <a href="#"><i class="flaticon2-placeholder"></i>Melbourne</a>
                    </div>
                    <div class="kt-widget__info">
                        <div class="kt-widget__desc">
                            I distinguish three main text objektive could be merely to inform people.
                            <br> A second could be persuade people.You want people to bay objective
                        </div>
                        <div class="kt-widget__progress">
                            <div class="kt-widget__text">
                                Goals
                            </div>
                            <div class="progress" style="height: 5px;width: 100%;">
                                <div class="progress-bar kt-bg-success" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="kt-widget__stats">
                                45%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--End:: Portlet-->

<!-- end:: Content -->
</div>
    <!--begin::Card-->
    <!-- <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon">
                    <i class="fas fa-layer-group"></i>
                </span>
                <h3 class="card-label">{{ __('staff/titles.reference-uploadhistory') }}</h3>
            </div>            
            <div class="card-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            
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
                            <th style="width: 1000px; ">{{ __('staff/tables.upload_history_system_file_name') }}</th>
                            <th>{{ __('staff/tables.upload_history_table_source') }}</th>
                            <th>{{ __('staff/tables.upload_history_old_file_name') }}</th>
                            <th>{{ __('staff/tables.upload_history_uploaded_date') }}</th>
                            <th>{{ __('staff/tables.upload_history_username') }}</th>
                            <th>{{ __('staff/tables.upload_history_uploaded_by') }}</th>
                        </tr>
                    </thead>
                </template>
            </datatable>
        </div>
    </div> -->
    <!--end::Card-->
@endsection

@section('plugin_script')
    <script src="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.3') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <script src="{{ url('staff/assets/js/demo1/pages/dashboard.js') }}" type="text/javascript"></script>
@endsection