{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'emvvalidationdetails/show', 'data' => ($data_object)]) 

@section('title', __('staff/titles.tools-emv_validations'))

@section('plugin_css')
  

    <link href="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

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
                                                <h3 class="card-title align-items-start flex-column">
                                                    <button type="button" class="btn btn-light-primary font-weight-bold" @click="updateCardImage" id="kt_sweetalert_demo_update">Update</button>
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
											<div class="card-header border-0 pt-5">
                                                <h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Grantee</span>
												</h3>
												<!-- <h3 class="card-title font-weight-bolder text-dark">Grantee</h3> -->

                                                <h3 class="card-title align-items-start flex-column">
                                                    <button type="button" class="btn btn-light-primary font-weight-bold" @click="updateGranteeImage" id="kt_sweetalert_demo_update">Update</button>
												</h3>
										
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
											<div class="card-header border-0 pt-5">
                                                <h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Additional ID</span>
												</h3>
												<!-- <h3 class="card-title font-weight-bolder text-dark">Grantee</h3> -->

                                                <h3 class="card-title align-items-start flex-column">
                                                    <button type="button" class="btn btn-light-primary font-weight-bold" @click="updateAdditionalImage" id="kt_sweetalert_demo_update">Update</button>
												</h3>
										
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
                        <!-- staff.emvvalidationdetails.emvcard -->
                        <div class="card-toolbar">
                            <a :href="'emvvalidationdetailsemvcard/'+emv.evd_id" class="btn btn-primary font-weight-bolder">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" cx="9" cy="15" r="6" />
                                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>Update</a>
                            <!--end::Button-->
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body px-0">
                        <div class="d-flex align-items-center flex-wrap justify-content-between">
                            <div class="flex-grow-1 font-weight-bold font-size-h5 text-dark py-2 py-lg-2 mr-5">
                                <table class="table table-bordered table-sm" style="margin-left:10px;margin-right:10px;">
                                    <tr>
                                        <th colspan="6" class="text-center">I. Demographics</th>
                                    </tr>
                                    <tr>
                                        <td ><h6 class="card-label">Fullname:</h6></td>
                                        <td><span class="label label-inline mr-2 font-size-h5">@{{ emv.first_name }} @{{ emv.middle_name }} @{{ emv.last_name }} @{{ emv.ext_name }}</span></td>
                                        <td><h6 class="card-label">SET:</h6></td>
                                        <td><span class="label  label-inline mr-2 font-size-h5">@{{ emv.set}}</span></td>
                                        <td><h6 class="card-label">Client status:</h6></td>
                                        <td><span class="label label-inline mr-2 font-size-h6 h-auto">@{{ emv.hh_status }}</span></td>
                                        
                                    </tr>
                                    <tr>
                                        </span></td>
                                        <td><h6 class="card-label">Sex:</h6></td>
                                        <td><span class="label  label-inline mr-2 font-size-h5">@{{ emv.sex }}</span></td>
                                        <td><h6 class="card-label">Interviewee:</h6></td>
                                        <td><span class="label label-inline mr-2 font-size-h5">@{{ emv.is_grantee }}</span></td>
                                        <td><h6 class="card-label">Contact No:</h6></td>
                                        <td><span class="label label-inline mr-2 font-size-h5">@{{ emv.contact_no}}</span></td>
                                    </tr>

                                    <tr>
                                        <td><h6 class="card-label">Address:</h6></td>
                                        <td><span class="label label-inline mr-2 font-size-h5">@{{ emv.barangay }} @{{ emv.municipality }} @{{ emv.province }}</span></td>
                                        <td><h6 class="card-label">Contact No of:</h6></td>
                                        <td><span class="label label-inline mr-2 font-size-h5">@{{ emv.is_grantee}}</span></td>
                                        <td><h6 class="card-label">Other's Name</h6></td>
                                        <td><span v-if="emv.is_grantee !='Grantee'" class="label label-inline mr-2 font-size-h5">@{{ emv.is_grantee}}</span></td>
                                    </tr>

                                    <tr>
                                        <th colspan="6" class="text-center">II. EMV Cash Card Information</th>
                                    </tr>
                                    <tr>
                                        <td><h6 class="card-label">Current Grantee Card No:</h6></td>
                                        <td><span class="label label-inline mr-2 font-size-h5">@{{ emv.card_number_prefilled }}</span></td>
                                        <td><h6 class="card-label">Distribution status <small><b> (Record)</b></small></h6></td>
                                        <td><span class="label label-inline mr-2 font-size-h5">@{{ emv.ev_distribution_status_record }}</span></td>
                                        <td><h6 class="card-label">Date of Card Release <small><b> (Record)</b></small></h6></td>
                                        <td><span v-if="emv.ev_card_release_date_record ==null" class="label label-inline mr-2 font-size-h5">@{{ emv.ev_card_release_date_record }}</span></td>
                                    </tr>
                                    <tr>

                                        <td><h6 class="card-label">Distribution status<small><b> (Actual)</b></small></h6></td>
                                        <td><span class="label label-inline mr-2 font-size-h5">@{{ emv.distribution_status }}</span></td>
                                        <td><h6 class="card-label">Reason Unclaimed</h6></td>
                                        <td><span class="label label-inline mr-2 font-size-h5">@{{ emv.reason_unclaimed }}</span></td>
                                        <td><h6 class="card-label">Other reason for unclaimed</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5" v-if="emv.reason_unclaimed =='Others'">@{{ emv.reason_unclaimed }}</span></td>

                                    </tr>
                                    <tr>

                                        <td><h6 class="card-label">Date of card released <small><b> (Actual)</b></small></h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.cvd_card_release_date_actual }}</span></td>
                                        <td><h6 class="card-label">Who released the card</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.release_by }}</span></td>
                                        <td><h6 class="card-label">Where the Cash card Released</h6></td>
                                        <td><span class="label label-inline mr-2 font-size-h5">@{{ emv.cvd_card_release_place }}</span></td>
                                    </tr>

                                    <tr>

                                        <td><h6 class="card-label">Physical Cash card Presented</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.card_physically_presented }}</span></td>
                                        <td><h6 class="card-label">Pin Attached</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.card_pin_is_attached }}</span></td>
                                        <td><h6 class="card-label">Reason Cash card not presented</h6></td>
                                        <td><span class="label label-inline mr-2 font-size-h5">@{{ emv.reason_not_presented }}</span></td>

                                    </tr>

                                    <tr>
                                    <td><h6 class="card-label">Already filed request for replacement</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.card_replacement_request }}</span></td>
                                        <td><h6 class="card-label">When and whom replacement requests</h6></td>
                                        <td><span class="label label-inline mr-2 font-size-h5">@{{ emv.card_replacement_submitted_details }}</span></td>

                                        <td><h6 class="card-label">Reason</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.reason }}</span></td>
                                    </tr>
                                    <tr>
                                        <td><h6 class="card-label">Reason not presented</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.reason_not_presented }}</span></td>
                                        <td><h6 class="card-label">Card Series</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.card_number_series }}</span></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr v-if="emv.reason_not_presented =='Pawned'">
                                        <th colspan="6" class="text-center">Pawning Details</th>
                                    </tr>

                                    <tr v-if="emv.reason_not_presented =='Pawned'">
                                        <td><h6 class="card-label">Name of Lender</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.lender_name }}</span></td>
                                        <td><h6 class="card-label">Date of Pawning</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.date_pawned }}</span></td>
                                        <td><h6 class="card-label">Loaned Amount</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.loan_amount }}</span></td>
                                    </tr>
                                    <tr v-if="emv.reason_not_presented =='Pawned'">
                                        <td><h6 class="card-label">Address of Lender</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.lender_address }}</span></td>
                                        <td><h6 class="card-label">Date Retrieved</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.date_retrieved }}</span></td>
                                        <td><h6 class="card-label">Interest</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.interest }}</span></td>
                                    </tr>

                                    <tr v-if="emv.reason_not_presented =='Pawned'">
                                        <td><h6 class="card-label">Status</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.status }}</span></td>
                                        <td><h6 class="card-label">Reason for Pawning</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.pv_reason }}</span></td>
                                        <td><h6 class="card-label">Offense History</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.offense_history }}</span></td>
                                    </tr>

                                    <tr v-if="emv.reason_not_presented =='Pawned'">
                                        <td><h6 class="card-label">Offense History Date</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.offense_date }}</span></td>
                                        <td><h6 class="card-label">Remarks</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.pvd_remarks}}</span></td>
                                        <td><h6 class="card-label">Intervention of C/ML</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.staff_intervention }}</span></td>
                                    </tr>
                                    <tr v-if="emv.reason_not_presented =='Pawned'">
                                    <td><h6 class="card-label">Other Details</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.other_details }}</span></td>
                                    </tr>   

                                    <tr>
                                        <th colspan="6" class="text-center">III. A. Non-Moving Account Information</th>
                                    </tr>

                                    <tr>
                                        <td><h6 class="card-label">Non-EMV Card Number</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.non_emv_card_number }}</span></td>
                                        <td><h6 class="card-label">Card Name</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.card_name}}</span></td>
                                        <td><h6 class="card-label">NMA Amount as of Sep. 30, 2020</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.amount }}</span></td>
                                    </tr>

                                    <tr>
                                        <td><h6 class="card-label">Reason for NMA</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.reason }}</span></td>
                                        <td><h6 class="card-label">Remarks</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.remarks}}</span></td>
                                        <td><h6 class="card-label">Overall Remarks</h6></td>
                                        <td><span class="label-inline mr-2 font-size-h5">@{{ emv.overall_remarks}}</span></td>
                                    </tr>

                                    <tr>
                                        <th colspan="6" class="text-center">IV. Overall Remarks</th>
                                    </tr>

                                    <tr>
                                        <td><h6 class="card-label">Comment</h6></td>
                                        <td colspan="6"><span class="label-inline mr-2 font-size-h5">@{{ emv.reason }}</span></td>
                                    </tr>

        


                                </table>
                            </div>
                        </div>

                    </div>

                    <!--begin::Card body-->
                </div>

                <div class="card card-custom" style="margin-top:20px;">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="card-icon">
                                <i class="flaticon2-bell text-primary"></i>
                            </span>
                            <h3 class="card-label">Other Card</h3>
                        </div>
        
                    </div>
                    <div class="card-body">
                        <!--begin: Datatable-->
                        <table class="table table-separate table-head-custom collapsed kt_datatable">
                            <thead>
                                <tr>
                                    <th>Card holder name</th>
                                    <th>card inputted</th>
                                    <th>Card series</th>
                                    <th>Card system generated</th>
                                    <th>Card physically presented</th>
                                    <th>Card pin</th>
                                    <th>Replacement requests</th>
                                    <th>Replacement details</th>
                                    <th>distribution status</th>
                                    <th>Pawning remarks</th>
                                    <th>Reason not presented</th>
                                    <th>Reason unclaimed</th>
                                    <th>Release by</th>
                                    <th>Action</th>
                                    <th>Release place</th>
                                    <th>Updated at</th>
                                    <th>Card Image</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(ocn, index) in emv.other_card" :key="index">
                                    <td>@{{ ocn.card_holder_name }}</td>
                                    <td>@{{ ocn.card_number_inputted }}</td>
                                    <td style="text-align:center;">@{{ ocn.card_number_series }}</td>
                                    <td>@{{ ocn.card_number_system_generated }}</td>
                                    <td>@{{ ocn.card_physically_presented }}</td>
                                    <td>@{{ ocn.card_pin_is_attached }}</td>
                                    <td>@{{ ocn.card_replacement_request }}</td>
                                    <td>@{{ ocn.card_replacement_submitted_details }}</td>
                                    <td>@{{ ocn.distribution_status }}</td>
                                    <td>@{{ ocn.pawning_remarks }}</td>
                                    <td>@{{ ocn.reason_not_presented }}</td>
                                    <td>@{{ ocn.reason_unclaimed }}</td>
                                    <td>@{{ ocn.release_by }}</td>
                                    <td>@{{ ocn.id }}</td>
                                    <td>@{{ ocn.release_place }}</td>
                                    <td>@{{ ocn.updated_at }}</td>
                                    <td>
                                        <img alt="Pic" v-if="ocn.card_image" style="border-radius: 2%;" :src="'/storage/images/validations/'+ocn.card_image" width="150px"/>
                                        <span v-else>No Image </span>
                                    </td>
                                
                                </tr>
                            </tbody>

                                
                                
                        </table>
                        <!--end: Datatable-->
                    </div>
				</div>


            <br />
        </div>

        <br />
    






    <!-- </div> -->
    <!--end::Card-->
@endsection

@section('plugin_script')
    <script src="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ url('staff/assets/js/pages/crud/datatables/extensions/responsive.js') }}"></script>
@endsection