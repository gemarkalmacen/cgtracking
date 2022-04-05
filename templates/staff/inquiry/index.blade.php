{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'inquiry/index', 'data' => []]) 

@section('title', __('staff/titles.inquiry'))

@section('plugin_css')
@endsection

@section('content')
<!--Begin::Card-->
<div class="card card-custom gutter-b">
    <!--begin::Dropdown-->
    <div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
        <!--begin:Form-->
        <form method="get" class="quick-search-form">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="svg-icon svg-icon-lg">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                </div>
                <input type="text" class="form-control" placeholder="Search..." />
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="quick-search-close ki ki-close icon-sm text-muted"></i>
                    </span>
                </div>
            </div>
        </form>
        <!--end::Form-->
        <!--begin::Scroll-->
        <div class="quick-search-wrapper scroll" data-scroll="true" data-height="325" data-mobile-height="200"></div>
        <!--end::Scroll-->
    </div>
    <!--end::Dropdown-->
</div>
<!--End::Card-->

<!--begin::Card-->
<div class="card card-custom gutter-b">
    <div class="card-body">
        <!--begin::Top-->
        <div class="d-flex">
            <!--begin::Pic-->
            <div class="flex-shrink-0 mr-7">
                <div class="symbol symbol-50 symbol-lg-120">
                    <img alt="Pic" src="{{ url('staff/assets/media//users/300_1.jpg') }}" />
                </div>
            </div>
            <!--end::Pic-->
            <!--begin: Info-->
            <div class="flex-grow-1">
                <!--begin::Title-->
                <div class="d-flex align-items-center justify-content-between flex-wrap mt-2">
                    <!--begin::User-->
                    <div class="mr-3">
                        <!--begin::Name-->
                        <a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">Jason Muller
                            <i class="flaticon2-correct text-success icon-md ml-2"></i></a>
                        <!--end::Name-->
                        <!--begin::Contacts-->
                        <div class="d-flex flex-wrap my-2">
                            <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                                            <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>jason@siastudio.com</a>
                            <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Lock.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <mask fill="white">
                                                <use xlink:href="#path-1" />
                                            </mask>
                                            <g />
                                            <path d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z" fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>PR Manager</a>
                            <a href="#" class="text-muted text-hover-primary font-weight-bold">
                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Map/Marker2.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z" fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>Melbourne</a>
                        </div>
                        <!--end::Contacts-->
                    </div>
                    <!--begin::User-->
                    <!--begin::Actions-->
                    <div class="my-lg-0 my-1">
                        <a href="#" class="btn btn-sm btn-light-primary font-weight-bolder text-uppercase mr-2">Ask</a>
                        <a href="#" class="btn btn-sm btn-primary font-weight-bolder text-uppercase">Hire</a>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Title-->
                <!--begin::Content-->
                <div class="d-flex align-items-center flex-wrap justify-content-between">
                    <!--begin::Description-->
                    <div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5">I distinguish three main text objectives could be merely to inform people.
                        <br />A second could be persuade people. You want people to bay objective.
                    </div>
                    <!--end::Description-->
                    <!--begin::Progress-->
                    <div class="d-flex mt-4 mt-sm-0">
                        <span class="font-weight-bold mr-4">Progress</span>
                        <div class="progress progress-xs mt-2 mb-2 flex-shrink-0 w-150px w-xl-250px">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 63%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="font-weight-bolder text-dark ml-4">78%</span>
                    </div>
                    <!--end::Progress-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Info-->
        </div>
        <!--end::Top-->
        <!--begin::Separator-->
        <div class="separator separator-solid my-7"></div>
        <!--end::Separator-->
        <!--begin::Bottom-->
        <div class="d-flex align-items-center flex-wrap">
            <!--begin: Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                <span class="mr-4">
                    <i class="flaticon-piggy-bank icon-2x text-muted font-weight-bold"></i>
                </span>
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-sm">Earnings</span>
                    <span class="font-weight-bolder font-size-h5">
                        <span class="text-dark-50 font-weight-bold">$</span>249,500
                    </span>
                </div>
            </div>
            <!--end: Item-->
            <!--begin: Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                <span class="mr-4">
                    <i class="flaticon-confetti icon-2x text-muted font-weight-bold"></i>
                </span>
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-sm">Expenses</span>
                    <span class="font-weight-bolder font-size-h5">
                        <span class="text-dark-50 font-weight-bold">$</span>164,700
                    </span>
                </div>
            </div>
            <!--end: Item-->
            <!--begin: Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                <span class="mr-4">
                    <i class="flaticon-pie-chart icon-2x text-muted font-weight-bold"></i>
                </span>
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-sm">Net</span>
                    <span class="font-weight-bolder font-size-h5">
                        <span class="text-dark-50 font-weight-bold">$</span>782,300</span>
                </div>
            </div>
            <!--end: Item-->
            <!--begin: Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                <span class="mr-4">
                    <i class="flaticon-file-2 icon-2x text-muted font-weight-bold"></i>
                </span>
                <div class="d-flex flex-column flex-lg-fill">
                    <span class="text-dark-75 font-weight-bolder font-size-sm">73 Tasks</span>
                    <a href="#" class="text-primary font-weight-bolder">View</a>
                </div>
            </div>
            <!--end: Item-->
            <!--begin: Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                <span class="mr-4">
                    <i class="flaticon-chat-1 icon-2x text-muted font-weight-bold"></i>
                </span>
                <div class="d-flex flex-column">
                    <span class="text-dark-75 font-weight-bolder font-size-sm">648 Comments</span>
                    <a href="#" class="text-primary font-weight-bolder">View</a>
                </div>
            </div>
            <!--end: Item-->
            <!--begin: Item-->
            <div class="d-flex align-items-center flex-lg-fill my-1">
                <span class="mr-4">
                    <i class="flaticon-network icon-2x text-muted font-weight-bold"></i>
                </span>
                <div class="symbol-group symbol-hover">
                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Mark Stone">
                        <img alt="Pic" src="{{ url('staff/assets/media/users/300_25.jpg') }}" />
                    </div>
                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Charlie Stone">
                        <img alt="Pic" src="{{ url('staff/assets/media/users/300_19.jpg') }}" />
                    </div>
                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Luca Doncic">
                        <img alt="Pic" src="{{ url('staff/assets/media/users/300_22.jpg') }}" />
                    </div>
                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Nick Mana">
                        <img alt="Pic" src="{{ url('staff/assets/media/users/300_23.jpg') }}" />
                    </div>
                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Teresa Fox">
                        <img alt="Pic" src="{{ url('staff/assets/media/users/300_18.jpg') }}" />
                    </div>
                    <div class="symbol symbol-30 symbol-circle symbol-light" data-toggle="tooltip" title="More users">
                        <span class="symbol-label font-weight-bold">5+</span>
                    </div>
                </div>
            </div>
            <!--end: Item-->
        </div>
        <!--end::Bottom-->
    </div>
</div>
<!--end::Card-->

<!--begin::Card-->
<div class="card card-custom gutter-bs">
    <!--Begin::Header-->
    <div class="card-header card-header-tabs-line">
        <div class="card-toolbar">
            <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-tabs-bold nav-tabs-line-3x" role="tablist">
                <li class="nav-item mr-3">
                    <a class="nav-link active" data-toggle="tab" href="#kt_apps_contacts_view_tab_2">
                        <span class="nav-icon mr-2">
                            <span class="svg-icon mr-3">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat-check.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </span>
                        <span class="nav-text font-weight-bold">Magstripe</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--end::Header-->
    <!--Begin::Body-->
    <div class="card-body px-0">
        <div class="tab-content pt-5">
            <!--begin::Tab Content-->
            <div class="tab-pane active" id="kt_apps_contacts_view_tab_2" role="tabpanel">
                <form class="form">

                </form>
            </div>
            <!--end::Tab Content-->
            <!--begin::Tab Content-->
            <div class="tab-pane" id="kt_apps_contacts_view_tab_3" role="tabpanel">
                <form class="form">

                </form>
            </div>
            <!--end::Tab Content-->
            <!--begin::Tab Content-->
            <div class="tab-pane" id="kt_apps_contacts_view_tab_4" role="tabpanel">
                <form class="form">
                    <div class="row">
                        <label class="col-xl-3"></label>
                        <div class="col-lg-9 col-xl-6">
                            <h3 class="font-size-h6 mb-5">Setup Email Notification:</h3>
                        </div>
                    </div>
                </form>
            </div>
            <!--end::Tab Content-->
            <!--begin::Tab Content-->
            <div class="tab-pane" id="kt_apps_contacts_view_tab_1" role="tabpanel">
                <div class="container">
                    <div class="separator separator-dashed my-10"></div>
                    <!--begin::Timeline-->
                    <div class="timeline timeline-3">
                        <div class="timeline-items">
                            <div class="timeline-item">
                                <div class="timeline-media">
                                    <img alt="Pic" src="{{ url('staff/assets/media/users/300_25.jpg') }}" />
                                </div>
                                <div class="timeline-content">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="mr-2">
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold">New order has been placed</a>
                                            <span class="text-muted ml-2">Today</span>
                                            <span class="label label-light-success font-weight-bolder label-inline ml-2">new</span>
                                        </div>
                                        <div class="dropdown ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                            <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ki ki-more-hor font-size-lg text-primary"></i>
                                            </a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                <!--begin::Navigation-->
                                                <ul class="navi navi-hover">
                                                    <li class="navi-header font-weight-bold py-4">
                                                        <span class="font-size-lg">Choose Label:</span>
                                                        <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                                    </li>
                                                    <li class="navi-separator mb-3 opacity-70"></li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">
                                                                <span class="label label-xl label-inline label-light-success">Customer</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">
                                                                <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">
                                                                <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">
                                                                <span class="label label-xl label-inline label-light-primary">Member</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">
                                                                <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-separator mt-3 opacity-70"></li>
                                                    <li class="navi-footer py-4">
                                                        <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                            <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                    </li>
                                                </ul>
                                                <!--end::Navigation-->
                                            </div>
                                        </div>
                                    </div>
                                    <p class="p-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-media">
                                    <i class="flaticon2-shield text-danger"></i>
                                </div>
                                <div class="timeline-content">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="mr-2">
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold">Member has sent a request.</a>
                                            <span class="text-muted ml-2">8:30PM 20 June</span>
                                            <span class="label label-light-danger font-weight-bolder label-inline ml-2">pending</span>
                                        </div>
                                        <div class="dropdown ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                            <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ki ki-more-hor font-size-lg text-primary"></i>
                                            </a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                <!--begin::Navigation-->
                                                <ul class="navi navi-hover">
                                                    <li class="navi-header font-weight-bold py-4">
                                                        <span class="font-size-lg">Choose Label:</span>
                                                        <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                                    </li>
                                                    <li class="navi-separator mb-3 opacity-70"></li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">
                                                                <span class="label label-xl label-inline label-light-success">Customer</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">
                                                                <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">
                                                                <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">
                                                                <span class="label label-xl label-inline label-light-primary">Member</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">
                                                                <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-separator mt-3 opacity-70"></li>
                                                    <li class="navi-footer py-4">
                                                        <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                            <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                    </li>
                                                </ul>
                                                <!--end::Navigation-->
                                            </div>
                                        </div>
                                    </div>
                                    <p class="p-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-media">
                                    <i class="flaticon2-layers text-warning"></i>
                                </div>
                                <div class="timeline-content">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="mr-2">
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold">System deployment has been completed.</a>
                                            <span class="text-muted ml-2">11:00AM 30 June</span>
                                            <span class="label label-light-warning font-weight-bolder label-inline ml-2">done</span>
                                        </div>
                                        <div class="dropdown ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                            <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ki ki-more-hor font-size-lg text-primary"></i>
                                            </a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                <!--begin::Navigation-->
                                                <ul class="navi navi-hover">
                                                    <li class="navi-header font-weight-bold py-4">
                                                        <span class="font-size-lg">Choose Label:</span>
                                                        <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                                    </li>
                                                    <li class="navi-separator mb-3 opacity-70"></li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">
                                                                <span class="label label-xl label-inline label-light-success">Customer</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">
                                                                <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">
                                                                <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">
                                                                <span class="label label-xl label-inline label-light-primary">Member</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">
                                                                <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-separator mt-3 opacity-70"></li>
                                                    <li class="navi-footer py-4">
                                                        <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                            <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                    </li>
                                                </ul>
                                                <!--end::Navigation-->
                                            </div>
                                        </div>
                                    </div>
                                    <p class="p-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-media">
                                    <i class="flaticon2-notification fl text-primary"></i>
                                </div>
                                <div class="timeline-content">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="mr-2">
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold">Database backup has been completed.</a>
                                            <span class="text-muted ml-2">2 months ago</span>
                                            <span class="label label-light-primary font-weight-bolder label-inline ml-2">delivered</span>
                                        </div>
                                        <div class="dropdown ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                            <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ki ki-more-hor font-size-lg text-primary"></i>
                                            </a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                <!--begin::Navigation-->
                                                <ul class="navi navi-hover">
                                                    <li class="navi-header font-weight-bold py-4">
                                                        <span class="font-size-lg">Choose Label:</span>
                                                        <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                                    </li>
                                                    <li class="navi-separator mb-3 opacity-70"></li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">
                                                                <span class="label label-xl label-inline label-light-success">Customer</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">
                                                                <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">
                                                                <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">
                                                                <span class="label label-xl label-inline label-light-primary">Member</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">
                                                                <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-separator mt-3 opacity-70"></li>
                                                    <li class="navi-footer py-4">
                                                        <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                            <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                    </li>
                                                </ul>
                                                <!--end::Navigation-->
                                            </div>
                                        </div>
                                    </div>
                                    <p class="p-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Timeline-->
                </div>
            </div>
            <!--end::Tab Content-->
        </div>
    </div>
    <!--end::Body-->
</div>
<!--end::Card-->
@endsection

@section('plugin_script')
@endsection