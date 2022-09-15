{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'emvmonitoringdetails/index', 'data' => ($data_object)]) 

@section('title', __('staff/titles.tools-emv_monitoring'))

@section('plugin_css')
    <!-- <link href="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.3') }}" rel="stylesheet" type="text/css" /> -->
@endsection

@section('content')

        <div class="card card-custom">
            <div class="card-body">
                <div class="mb-7">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-xl-8">
                            <div class="row align-items-center">
                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="input-icon">
                                        <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                        <span>
                                            <i class="flaticon2-search-1 text-muted"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="d-flex align-items-center">
                                        <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                        <select class="form-control" id="kt_datatable_search_status">
                                            <option value="">All</option>
                                            <option value="1">Pending</option>
                                            <option value="2">Delivered</option>
                                            <option value="3">Canceled</option>
                                            <option value="4">Success</option>
                                            <option value="5">Info</option>
                                            <option value="6">Danger</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="d-flex align-items-center">
                                        <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                        <select class="form-control" id="kt_datatable_search_type">
                                            <option value="">All</option>
                                            <option value="1">Online</option>
                                            <option value="2">Retail</option>
                                            <option value="3">Direct</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                            <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <br />

        <!--begin::Pagination-->
        <div class="card card-custom">
            <div class="card-body">
                <!--begin::Pagination-->
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="d-flex flex-wrap mr-3">
                        <a href="#" @click="firstpage(emvdetailsdata.first_page_url)" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                            <i class="ki ki-bold-double-arrow-back icon-xs"></i>
                        </a>
                        <a href="#" @click="prevpage(emvdetailsdata.prev_page_url)" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                            <i class="ki ki-bold-arrow-back icon-xs"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-success active mr-2 my-1">@{{ emvdetailsdata.current_page }}</a>
                        <a href="#" @click="nextpage(emvdetailsdata.next_page_url)" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                            <i class="ki ki-bold-arrow-next icon-xs font-weight-bold"></i>
                        </a>
                        <a href="#" @click="lastpage(emvdetailsdata.last_page_url)" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                            <i class="ki ki-bold-double-arrow-next icon-xs"></i>
                        </a>
                    </div>
                    <div class="d-flex align-items-center">
                        <select class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary" style="width: 75px;">
                            <option value="6">6</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        <span class="text-dark font-weight-bold">Displaying @{{ emvdetailsdata.per_page }} of @{{ emvdetailsdata.total }} records</span>
                    </div>
                </div>
                <!--end:: Pagination-->
            </div>
        </div>
        <!--end::Pagination-->

        <br />

        <div class="custom" v-for="(emv, index) in emvdetailsdata.data" :key="emv.id">
            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Card header-->
                <div class="card-header card-header-tabs-line nav-tabs-line-3x">
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <ul class="nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-3x">
                            <!--begin::Item-->
                            <li class="nav-item mr-3">
                                <a class="nav-link" data-toggle="tab">
                                    <!-- <span class="label pulse">1 <span class="pulse-ring"></span></span> -->
                                    <div href="#" class="btn btn-icon btn-light-success pulse pulse-success font-weight-bold mr-5">
                                        @{{ index + emvdetailsdata.from }}
                                        <span class="pulse-ring"></span>
                                    </div>
                                </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item mr-3">
                                <a class="nav-link active" data-toggle="tab" :href="'#kt_user_edit_tab_1' + emv.id">
                                    <span class="nav-icon">
                                        <span class="svg-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                                    <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="nav-text font-size-lg">Profile</span>
                                </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item mr-3">
                                <a class="nav-link" data-toggle="tab" :href="'#kt_user_edit_tab_2' + emv.id">
                                    <span class="nav-icon">
                                        <span class="svg-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="nav-text font-size-lg">Other Details</span>
                                </a>
                            </li>
                            <!--end::Item-->
                        </ul>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body px-0">
                    <form class="form" id="kt_form">
                        <div class="tab-content">
                            <!--begin::Tab-->
                            <div class="tab-pane show active px-7" :id="'kt_user_edit_tab_1' + emv.id" role="tabpanel">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-12 my-2">
                                        <!--begin::Row-->
                                        <div class="row">
                                        <div class="card-body">
                                            <!--begin::Top-->
                                            <div class="d-flex">
                                                <!--begin::Pic-->
                                                <div class="flex-shrink-0 mr-7">
                                                    <!-- <div class=""> -->
                                                        <img alt="Pic" width="320px" src="{{ url('staff/assets/media/users/valid_id_test.jpg') }}" />
                                                    <!-- </div> -->
                                                    <!-- <div class=""> -->
                                                        <img alt="Pic" width="300px" src="{{ url('staff/assets/media/users/lbp_cashcard_sample.jpg') }}" />
                                                    <!-- </div> -->
                                                </div>
                                                <!--end::Pic-->
                                                <!--begin: Info-->
                                                <div class="flex-grow-1">
                                                    <!--begin::Title-->
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap mt-2">
                                                        <!--begin::User-->
                                                        <div class="mr-3">
                                                            <!--begin::Name-->
                                                            <a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">@{{ emv.full_name }}
                                                                <i class="flaticon2-correct text-primary icon-md ml-2 "></i>&nbsp;
                                                                <span class="label label-primary label-inline font-size-h5 font-weight-bold mr-2">@{{ emv.client_status }}</span>
                                                            </a>
                                                            <!--end::Name-->
                                                            <!--begin::Contacts-->
                                                            <div class="d-flex flex-wrap my-2">
                                                                <a href="#" class="text-dark text-hover-primary font-size-h5 font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
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
                                                                </span>@{{ emv.contact }}</a>
                                                                <a href="#" class="text-hover-primary text-dark font-size-h5 font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
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
                                                                </span>@{{ emv.hh_id }}</a>
                                                                <a href="#" class="text-dark text-hover-primary font-size-h5 font-weight-bold">
                                                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Map/Marker2.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z" fill="#000000" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>@{{ emv.address }}</a>
                                                            </div>
                                                            <!--end::Contacts-->
                                                        </div>
                                                        <!--begin::User-->
                                                        <!--begin::Actions-->
                                                        <!-- <div class="my-lg-0 my-1">
                                                            <a href="#" class="btn btn-sm btn-light-primary font-weight-bolder text-uppercase mr-2">Ask</a>
                                                            <a href="#" class="btn btn-sm btn-primary font-weight-bolder text-uppercase">Hire</a>
                                                        </div> -->
                                                        <!--end::Actions-->
                                                    </div>
                                                    <!--end::Title-->
                                                    <!--begin::Content-->
                                                    <div class="d-flex align-items-center flex-wrap justify-content-between">
                                                        <div class="flex-grow-1 font-weight-bold font-size-h5 text-dark py-2 py-lg-2 mr-5">
                                                            <table class="table table-bordered table-sm">
                                                                <tr>
                                                                    <td>SET:</td>
                                                                    <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.hh_set_group }}</span></td>
                                                                    <td>Minor Grantee:</td>
                                                                    <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.minor_grantee }}</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Assigned C/ML:</td>
                                                                    <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.assigned_staff }}</span></td>
                                                                    <td>Sex:</td>
                                                                    <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.sex }}</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="4" class="text-center">II. EMV Cash Card Information</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Date Release:</td>
                                                                    <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.current_grantee_card_release_date }}</span></td>
                                                                    <td>Place Release:</td>
                                                                    <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.current_grantee_card_release_place }}</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Is Card Available?</td>
                                                                    <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.current_grantee_is_available }}</span></td>
                                                                    <td>Current Grantee Card No:</td>
                                                                    <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.current_grantee_card_number }}</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="2" class="text-center">Other Card No:</th>
                                                                    <th>Card Holder Name</th>
                                                                    <th>Is Card Available?</th>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">1. <span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.other_card_number_1 }}</span></td>
                                                                    <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.other_card_holder_name_1 }}</span></td>
                                                                    <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.other_card_is_available }}</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">2. <span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.other_card_number_2 }}</span></td>
                                                                    <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.other_card_holder_name_2 }}</span></td>
                                                                    <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.other_card_is_available_2 }}</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">3. <span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.other_card_number_3 }}</span></td>
                                                                    <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.other_card_holder_name_3 }}</span></td>
                                                                    <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.other_card_is_available_3 }}</span></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Top-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-solid my-7"></div>
                                            <!--end::Separator-->
                                        </div>
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Tab-->
                            <!--begin::Tab-->
                            <div class="tab-pane px-7" :id="'kt_user_edit_tab_2' + emv.id" role="tabpanel">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-12 my-2">
                                        <div class="flex-grow-1 font-weight-bold font-size-h5 text-dark py-2 py-lg-2 mr-5">
                                            <table class="table table-bordered table-sm">
                                                <tr>
                                                    <th colspan="6" class="text-center">III-A. Non-Moving Account Information</th>
                                                </tr>
                                                <tr>
                                                    <td>NMA Amount:</td>
                                                    <td colspan="3"><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.nma_amount }}</span></td>
                                                    <td>Date Withdrawn/Claim: </td>
                                                    <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.nma_date_claimed }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Reason for NMA:</td>
                                                    <td colspan="3"><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.nma_reason }}</span></td>
                                                    <td>Remarks: </td>
                                                    <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.nma_remarks }}</span></td>
                                                </tr>
                                                <tr>
                                                    <th colspan="6" class="text-center">III-B. Pawning Details</th>
                                                </tr>
                                                <tr>
                                                    <td>Name of Lender:</td>
                                                    <td colspan="3"><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.pawn_name_of_lender }}</span></td>
                                                    <td>Address of Lender: </td>
                                                    <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.pawn_lender_address }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Pawning Date: </td>
                                                    <td colspan="3"><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.pawn_date }}</span></td>
                                                    <td>Date Retrieved: </td>
                                                    <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.pawn_retrieved_date }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Loaned Amount: </td>
                                                    <td colspan="3"><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.pawn_loaned_amount }}</span></td>
                                                    <td>Interest: </td>
                                                    <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.pawn_interest }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Status: </td>
                                                    <td colspan="3"><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.pawn_status }}</span></td>
                                                    <td>Reason for Pawning: </td>
                                                    <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.pawn_reason }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Offense History: </td>
                                                    <td colspan="3"><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.pawn_offense_history }}</span></td>
                                                    <td>Remarks: </td>
                                                    <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.pawn_remarks }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Intervention of C/ML: </td>
                                                    <td colspan="3"><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.pawn_intervention_staff }}</span></td>
                                                    <td>Other Details: </td>
                                                    <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.pawn_other_details }}</span></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <div class="separator separator-dashed my-10"></div>
                            </div>
                            <!--end::Tab-->
                        </div>
                    </form>
                </div>
                <!--begin::Card body-->
            </div>
            <!--end::Card-->
            <br />
        </div>

        <br />

    <!-- </div> -->
    <!--end::Card-->
@endsection

@section('plugin_script')
    <!-- <script src="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.3') }}"></script> -->
@endsection