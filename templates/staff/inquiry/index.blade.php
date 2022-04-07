{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'inquiry/index', 'data' => []])

@section('title', __('staff/titles.inquiry'))

@section('plugin_css')
@endsection

@section('content')
<rotate-square2></rotate-square2>
<!--Begin::Card-->
<div class="card card-custom gutter-b">
    <div class="card-body">
        <!--begin::Search Form-->
        <div class="d-flex align-items-center" id="kt_subheader_search">
            <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">Household #</span>
            <form class="ml-5">
                <div class="input-group input-group-xs input-group-solid" style="max-width: 475px">
                    <input type="text" class="form-control" id="kt_subheader_search_form" placeholder="Search..." />
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <span class="svg-icon">
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
                            <!--<i class="flaticon2-search-1 icon-sm"></i>-->
                        </span>
                    </div>
                </div>
            </form>
            <div>
                <button @click="searchHouseHold()" type="button" class="btn btn-primary">Search</button>
                <button @click="clearSearch()" type="button" class="btn btn-secondary">Clear</button>
            </div>
        </div>
        <!--end::Search Form-->
    </div>
</div>
<!--End::Card-->

<div v-if="cashcardDetails == true" class="card card-custom gutter-b">
    <div class="card-body">
        <div class="d-flex">
            <div class="flex-shrink-0 mr-7">
                <div class="symbol symbol-50 symbol-lg-120">
                    <img alt="Pic" src="{{ url('staff/assets/media//users/default.jpg') }}" />
                </div>
            </div>
            <div class="flex-grow-1">
                <div class="d-flex align-items-center justify-content-between flex-wrap mt-2">
                    <div class="mr-3">
                        <a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">
                            LN: SANDAYA (Current Grantee)
                            <i class="flaticon2-correct text-success icon-md ml-2"></i>
                        </a>
                        <a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">
                            FN: JAZIEL
                        </a>
                        <a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">
                            MN: MAINIT
                        </a>
                        <div class="d-flex flex-wrap my-2">
                            <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                                            <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                        </g>
                                    </svg>
                                </span>SET: 7B</a>
                            <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <mask fill="white">
                                                <use xlink:href="#path-1" />
                                            </mask>
                                            <g />
                                            <path d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z" fill="#000000" />
                                        </g>
                                    </svg>
                                </span>Female</a>
                            <a href="#" class="text-muted text-hover-primary font-weight-bold">
                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z" fill="#000000" />
                                        </g>
                                    </svg>
                                </span>Melbourne</a>
                        </div>
                    </div>
                    <div class="my-lg-0 my-1">
                        <a href="#" class="btn btn-sm btn-light-primary font-weight-bolder text-uppercase mr-2">Ask</a>
                        <a href="#" class="btn btn-sm btn-primary font-weight-bolder text-uppercase">Hire</a>
                    </div>
                </div>
                <!-- <div class="d-flex align-items-center mb-8">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Most Sales</a>
                        <div class="font-size-sm text-muted font-weight-bold mt-1">Authors with the best sales</div>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="separator separator-solid my-7"></div>
        <div class="d-flex align-items-center flex-wrap">
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
            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                <span class="mr-4">
                    <i class="flaticon-file-2 icon-2x text-muted font-weight-bold"></i>
                </span>
                <div class="d-flex flex-column flex-lg-fill">
                    <span class="text-dark-75 font-weight-bolder font-size-sm">73 Tasks</span>
                    <a href="#" class="text-primary font-weight-bolder">View</a>
                </div>
            </div>
            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                <span class="mr-4">
                    <i class="flaticon-chat-1 icon-2x text-muted font-weight-bold"></i>
                </span>
                <div class="d-flex flex-column">
                    <span class="text-dark-75 font-weight-bolder font-size-sm">648 Comments</span>
                    <a href="#" class="text-primary font-weight-bolder">View</a>
                </div>
            </div>
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
        </div>
    </div>
</div>

<div v-if="cashcardDetails == true" class="row" id="cash_card_details_id">
    <div class="col-lg-4">
        <div class="card card-custom card-fit card-border">
            <div class="card-header">
                <div class="card-title">
                    <span class="svg-icon svg-icon-primary svg-icon-2x">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M4,4 L20,4 C21.1045695,4 22,4.8954305 22,6 L22,18 C22,19.1045695 21.1045695,20 20,20 L4,20 C2.8954305,20 2,19.1045695 2,18 L2,6 C2,4.8954305 2.8954305,4 4,4 Z" fill="#000000" opacity="0.3"/>
                                <path d="M18.5,11 L5.5,11 C4.67157288,11 4,11.6715729 4,12.5 L4,13 L8.58578644,13 C8.85100293,13 9.10535684,13.1053568 9.29289322,13.2928932 L10.2928932,14.2928932 C10.7456461,14.7456461 11.3597108,15 12,15 C12.6402892,15 13.2543539,14.7456461 13.7071068,14.2928932 L14.7071068,13.2928932 C14.8946432,13.1053568 15.1489971,13 15.4142136,13 L20,13 L20,12.5 C20,11.6715729 19.3284271,11 18.5,11 Z" fill="#000000"/>
                                <path d="M5.5,6 C4.67157288,6 4,6.67157288 4,7.5 L4,8 L20,8 L20,7.5 C20,6.67157288 19.3284271,6 18.5,6 L5.5,6 Z" fill="#000000"/>
                            </g>
                        </svg>
                    </span>
                    <h3 class="card-label">MAGSTRIPE
                    <small>(181-365 Days)</small></h3>
                </div>
                <div class="card-toolbar">
                    <a href="#" class="btn btn-sm btn-primary font-weight-bold">
                    <i class="flaticon2-gear"></i>Settings</a>
                </div>
            </div>
            <div class="card-body pt-2">
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Entry ID # : </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Card Number : </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Last Name : </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">First Name : </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Middle Name : </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Extension Name : </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Card Status : </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Card Holder Status : </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Date Claimed/Age : < empty ></a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Balance : </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">&nbsp;</a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Description : </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Name Discrepancy? </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Same Grantee? </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card card-custom card-fit card-border">
            <div class="card-header">
                <div class="card-title">
                    <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Shopping\Credit-card.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <rect fill="#000000" opacity="0.3" x="2" y="5" width="20" height="14" rx="2"/>
                            <rect fill="#000000" x="2" y="8" width="20" height="3"/>
                            <rect fill="#000000" opacity="0.3" x="16" y="14" width="4" height="2" rx="1"/>
                        </g>
                    </svg><!--end::Svg Icon--></span>
                    <h3 class="card-label">EMV
                    <small>Europay, Master Card & Visa</small></h3>
                </div>
                <div class="card-toolbar">
                    <a href="#" class="btn btn-sm btn-primary font-weight-bold">
                    <i class="flaticon2-gear"></i>Settings</a>
                </div>
            </div>
            <div class="card-body pt-2">
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Entry ID # : </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Card Number : </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Last Name : </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">First Name : </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Middle Name : </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Extension Name : </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Distribution Status: </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Reason Why Unclaimed: </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Date Claimed: </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Balance : < EMPTY ></a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">&nbsp;</a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Description : </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Name Discrepancy? </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Same Grantee? </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card card-custom card-fit card-border">
            <div class="card-header">
                <div class="card-title">
                    <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Home\Home.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" fill="#000000"/>
                        </g>
                    </svg><!--end::Svg Icon--></span>
                    <h3 class="card-label">HOUSEHOLD STATUS
                    <small>for SDS & Homeless Street Families</small></h3>
                </div>
            </div>
            <div class="card-body pt-2">
            <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">HH Status: </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Entry ID # : </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">(Matched) Cash Card Number : </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Last Name : </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">First Name : </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Middle Name : </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Extension Name : </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Province: </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Municipality/City: </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Barangay: </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Birthday: </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Sex : </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Set: </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div>
                        <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Mother's Maiden Name: </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br/>
<!--begin::Card-->
<div v-if="cashcardDetails == true" class="card card-custom gutter-bs">
    <div class="card-header card-header-tabs-line">
        <div class="card-toolbar">
            <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-tabs-bold nav-tabs-line-3x" role="tablist">
                <li class="nav-item mr-3">
                    <a class="nav-link active" data-toggle="tab" href="#kt_apps_contacts_view_tab_2">
                        <span class="nav-icon mr-2">
                            <span class="svg-icon mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
                                    </g>
                                </svg>
                            </span>
                        </span>
                        <span class="nav-text font-weight-bold">Payroll History</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card-body px-0">
        <div class="tab-content pt-5">
            <div class="tab-pane active" id="kt_apps_contacts_view_tab_2" role="tabpanel">
                <form class="form">

                </form>
            </div>
            <div class="tab-pane" id="kt_apps_contacts_view_tab_3" role="tabpanel">
                <form class="form">

                </form>
            </div>
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
            <div class="tab-pane" id="kt_apps_contacts_view_tab_1" role="tabpanel">
                <div class="container">
                    <div class="separator separator-dashed my-10"></div>
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
                                            </div>
                                        </div>
                                    </div>
                                    <p class="p-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Card-->

@endsection

@section('plugin_script')
@endsection