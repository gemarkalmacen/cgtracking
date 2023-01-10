{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'emvvalidationdetails/show', 'data' => ($data_object)]) 

@section('title', __('staff/titles.tools-emv_validations'))

@section('plugin_css')
    <!-- <link href="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.3') }}" rel="stylesheet" type="text/css" /> -->
@endsection

@section('content')
        <div class="custom"  v-for="(emv, index) in emvdetailsdata" :key="emv.evd_id"  >
            <!--begin::Card-->
            <div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Row-->
								<div class="row">
									<div class="col-xl-4">
										<!--begin::List Widget 1-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Card Image</span>
													
												</h3>
										
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-4 text-center" >
												<!--begin::Item-->

                                                <img alt="Pic" style="border-radius: 2%; margin-top:-15px;" v-if="!emv.image" width="300px" src="{{ url('staff/assets/media/users/default_grantee.jpg') }}" />
                                                <img alt="Pic" style="border-radius: 2%;" v-else :src="'/storage/images/validations/'+emv.image" width="300px"/>

                                                
		
                                                
												
											</div>
											<!--end::Body-->
										</div>
										<!--end::List Widget 1-->
									</div>
									<div class="col-xl-4">
										<!--begin::List Widget 2-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0">
												<h3 class="card-title font-weight-bolder text-dark">Grantee</h3>
										
											</div>
                                            <div class="card-body pt-2 text-center">

                                            <img width="300px" style="border-radius: 2%; margin-top:-15px;"  v-if="!emv.card_image" src="{{ url('staff/assets/media/users/lbp_default.jpg') }}" alt="Red dot"  />
                                            <img width="300px" style="border-radius: 2%;" v-else :src="'/storage/images/validations/'+emv.card_image" alt="Red dot" />




                                            </div>
										</div>
										<!--end::List Widget 2-->
									</div>
									<div class="col-xl-4">
										<!--begin::List Widget 3-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0">
												<h3 class="card-title font-weight-bolder text-dark">Additional ID</h3>
											</div>

                                            <div class="card-body pt-2 text-center">
                                                <img alt="Pic" style="border-radius: 2%; margin-top:-15px;" v-if="!emv.image_additional" width="300px" src="{{ url('staff/assets/media/users/default_grantee.jpg') }}" />
                                                <img alt="Pic" style="border-radius: 2%;" v-else :src="'/storage/images/validations/'+emv.image_additional" width="300px"/>

                                
                                            </div>

										</div>
										<!--end::List Widget 3-->
									</div>
								</div>
							</div>
							<!--end::Container-->
						</div>
            
            <!--end::Card-->

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
                                    <!-- <div href="#" class="btn btn-icon btn-light-success pulse pulse-success font-weight-bold mr-5">
                                        @{{ index + emvdetailsdata.from }}
                                        <span class="pulse-ring"></span>
                                    </div> -->
                                </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item mr-3">
                                <a class="nav-link active" data-toggle="tab" >
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
                        </ul>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body px-0">
                <div class="d-flex align-items-center flex-wrap justify-content-between">
                    <div class="flex-grow-1 font-weight-bold font-size-h5 text-dark py-2 py-lg-2 mr-5">
                        <table class="table table-bordered table-sm" style="margin-left:10px;margin-right:10px;">
                            <tr>
                                <td>Fullname:</td>
                                <td><span class="label label-inline mr-2 font-size-h5">@{{ emv.first_name }} @{{ emv.middle_name }} @{{ emv.last_name }} @{{ emv.ext_name }}</span></td>
                                <td>SET:</td>
                                <td><span class="label  label-inline mr-2 font-size-h5">@{{ emv.set}}</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Client status:</td>
                                <td><span class="label label-inline mr-2 font-size-h6 h-auto">

                                @{{ emv.hh_status }}
                                </span></td>
                                <td>Sex:</td>
                                <td><span class="label  label-inline mr-2 font-size-h5">@{{ emv.sex }}</span></td>

                                <!-- <td>Interviewee:</td>
                                <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5">@{{ emv.is_grantee }}</span></td> -->
                            </tr>
                            <tr>
                                <td>Interviewee:</td>
                                <td><span class="label label-inline mr-2 font-size-h5">@{{ emv.is_grantee }}</span></td>
                                <td>Contact No:</td>
                                <td><span class="label label-inline mr-2 font-size-h5">@{{ emv.contact_no}}</span></td>
                            </tr>

                            <tr>
                                <td>Address:</td>
                                <td><span class="label label-inline mr-2 font-size-h5">@{{ emv.barangay }} @{{ emv.municipality }} @{{ emv.province }}</span></td>
                                <td>Contact No of:</td>
                                <td><span class="label label-inline mr-2 font-size-h5">@{{ emv.is_grantee}}</span></td>
                            </tr>

                            <tr>
                                <th colspan="4" class="text-center">II. EMV Cash Card Information</th>
                            </tr>
                            <tr>
                                <td>Current Grantee Card No:</td>
                                <td><span class="label label-inline mr-2 font-size-h5">@{{ emv.card_number_prefilled }}</span></td>
                                <td>Distribution status <small><b> (Record)</b></small></td>

                                <td><span class="label label-inline mr-2 font-size-h5">@{{ emv.ev_distribution_status_record }}</span></td>
                            </tr>
                            <tr>
                                <td>Card Release <small><b> (Record)</b></small></td>
                                <td><span class="label label-inline mr-2 font-size-h5">@{{ emv.ev_card_release_date_record }}</span></td>
                                <td>Distribution status<small><b> (Actual)</b></small></td>
                                <td><span class="label label-inline mr-2 font-size-h5">@{{ emv.distribution_status }}</span></td>
                            </tr>
                            <tr>
                                <td>Card series</td>
                                <td><span class="label label-inline mr-2 font-size-h5">@{{ emv.card_number_series }}</span></td>
                                
                            </tr>
                            <tr>
                                <th colspan="2" class="text-center">Other Card No:</th>
                                <th>Card Holder Name</th>
                                <th>Is Card Available?</th>
                            </tr>
                            <tr>
                                <td colspan="2">1. <span class="label label-outline-info label-pill label-inline mr-2 font-size-h5"></span></td>
                                <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5"></span></td>
                                <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5"></span></td>
                            </tr>
                            <tr>
                                <td colspan="2">2. <span class="label label-outline-info label-pill label-inline mr-2 font-size-h5"></span></td>
                                <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5"></span></td>
                                <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5"></span></td>
                            </tr>
                            <tr>
                                <td colspan="2">3. <span class="label label-outline-info label-pill label-inline mr-2 font-size-h5"></span></td>
                                <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5"></span></td>
                                <td><span class="label label-outline-info label-pill label-inline mr-2 font-size-h5"></span></td>
                            </tr>
                        </table>
                    </div>
                </div>

                </div>

                <!--begin::Card body-->
            </div>
            <br />
        </div>

        <br />

    <!-- </div> -->
    <!--end::Card-->
@endsection

@section('plugin_script')
    <!-- <script src="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.3') }}"></script> -->
@endsection