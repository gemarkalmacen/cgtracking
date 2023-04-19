{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'emvvalidationdetails/update_ocv', 'data' => ($data_object)]) 


@section('title', __('staff/titles.tools-emv_validations'))

@section('plugin_css')


@endsection

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />

<div class="col-lg-13">
        <div class="card card-custom example example-compact">
            <div class="card-header">
                <h3 class="card-title">Update other Card</h3>
                
            </div>
            <!--begin::Form-->
            <form class="form kt_form_2" id="kt_form_2"  >
                <div class="card-body">
                    <div class="alert alert-custom alert-light-success d-none" role="alert">
                        <div class="alert-icon">
                            <i class="flaticon2-bell-5"></i>
                        </div>
                        <div class="alert-text font-weight-bold"></div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span>
                                    <i class="ki ki-close"></i>
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h3 class="font-size-lg text-dark-75 font-weight-bold mb-10">Other card validation:</h3>
                        <div class="mb-2">


                        <div class="form-group row">

                            <div class="col-lg-9 col-xl-6">
                                <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image:{{ url('staff/assets/media/users/blank.png') }}">
                                    <div class="image-input-wrapper" style="background-image:{{ url('staff/assets/media/users/blank.png') }}"></div>
                                    

                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg"/>
                                        <input type="hidden" name="profile_avatar_remove"/>
                                    </label>

                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>

                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>
                                </div>
                                <span class="form-text text-muted">Allowed file types:  png, jpg, jpeg.</span>
                            </div>
                        </div>
                            <div class="form-group row">
                        
                                <div class="col-lg-4">
                                    <label>* Other Grantee Card Number</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_number_inputted"/>
                                </div>

                                <div class="col-lg-4">
                                    <label>* Other Member Card holder name</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_holder_name"/>
                                </div>

                                <div class="col-lg-4">
                                    <label> Distribution status: <small><b> (Actual)</b></small></label>

                                    <select class="form-control" v-model="emvdetailsdata[0].distribution_status">
                                        <option value="Claimed" >Claimed</option>
                                        <option value="Unclaimed" >Unclaimed</option>
                                    </select>
                                    
                                </div>              
                            </div>

                            <div class="form-group row">

                            <div class="col-lg-4">
                                    <label> Reason Unclaimed?</label>
                                    <select class="form-control"  v-if="emvdetailsdata[0].distribution_status =='Unclaimed'" v-model="emvdetailsdata[0].reason_unclaimed">
                                        <option v-for="(reasonunclaimed, index) in emvreasonunclaimed" :key="index" :value="reasonunclaimed.reason">@{{ reasonunclaimed.reason }}</option>
                                    </select>

                                    <select class="form-control" v-else v-model="emvdetailsdata[0].reason_unclaimed"  disabled>
                                        <option></option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label> Others Reason for unclaimed</label>
                                    <input  v-if="emvdetailsdata[0].reason_unclaimed =='Others'"  v-model="emvdetailsdata[0].reason_unclaimed" type="text" name="billing_card_number" class="form-control" placeholder="" />
                                    <input  v-else type="text" name="billing_card_number" class="form-control" placeholder=""  disabled/>
                                </div>

                                <div class="col-lg-4">
                                    <label> Date of card released: <small><b> (Actual)</b></small></label>
                                    <input  v-if="emvdetailsdata[0].distribution_status =='Claimed'"  type="date" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].cvd_card_release_date_actual"/>
                                    <input  v-else  type="date" name="billing_card_number" class="form-control" placeholder="" disabled/>
                                </div>

                              

                            </div>


                            <div class="form-group row">

                                <div class="col-lg-4">
                                    <label> Who released the card:</label>
                                    <input  v-if="emvdetailsdata[0].distribution_status =='Claimed'" type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].release_by"/>
                                    <input  v-else type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].release_by" disabled/>
                                </div>
        
                                <div class="col-lg-4">
                                    <label> Where the Cash card Released:</label>
                                    <input v-if="emvdetailsdata[0].distribution_status =='Claimed'" type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].cvd_card_release_place"/>
                                    <input v-else type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].cvd_card_release_place" disabled/>
                                </div>

                                <div class="col-lg-4">
                                    <label> Physical Cash card Presented:</label>

                                    <select v-if="emvdetailsdata[0].distribution_status =='Claimed'" class="form-control" v-model="emvdetailsdata[0].card_physically_presented" @change ="physicalCCPresentedOcv" >
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>

                                    <select  v-else class="form-control" v-model="emvdetailsdata[0].card_physically_presented" disabled>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                                
                            </div>

                            <div class="form-group row">

                                <div class="col-lg-4">
                                    <label>Pin Attached</label>
                            
                                    <select v-if="emvdetailsdata[0].card_physically_presented =='Yes'" class="form-control" v-model="emvdetailsdata[0].card_pin_is_attached" >
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>

                                    <select v-else class="form-control" v-model="emvdetailsdata[0].card_pin_is_attached" disabled >
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                 
                                <div class="col-lg-4">
                                    <label> Reason Cash card not presented:</label>

                                    <select v-if="emvdetailsdata[0].card_physically_presented =='No'" class="form-control" v-model="emvdetailsdata[0].reason_not_presented" >
                                        <option value="Lost/Stolen">Lost/Stolen</option>
                                        <option value="Damaged/Defective">Damaged/Defective</option>
                                        <option value="Pawned">Pawned</option>
                                        <option value="Not Turned Over">Not Turned Over</option>
                                        <option value="Others">Others</option>
                                    </select>

                                    <select v-else class="form-control" v-model="emvdetailsdata[0].reason_not_presented" disabled>
                                    <option value="Lost/Stolen">Lost/Stolen</option>
                                        <option value="Damaged/Defective">Damaged/Defective</option>
                                        <option value="Pawned">Pawned</option>
                                        <option value="Not Turned Over">Not Turned Over</option>
                                        <option value="Others">Others</option>
                                    </select>


                                </div>
                                <div class="col-lg-4">
                                    <label> Already filed request for replacement:</label>

                                    <select v-if="emvdetailsdata[0].reason_not_presented =='Lost/Stolen' || emvdetailsdata[0].reason_not_presented =='Damaged/Defective' " class="form-control" v-model="emvdetailsdata[0].card_replacement_request" >
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    <select v-else class="form-control" v-model="emvdetailsdata[0].card_replacement_request" disabled>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                               
                            </div>

                            <div class="form-group row">  
                                <div class="col-lg-4">
                                        <label>When and whom replacement requests</label>
                                        <input v-if="emvdetailsdata[0].card_replacement_request =='Yes'" type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_replacement_submitted_details"/>
                                        <input v-else type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_replacement_submitted_details" disabled/>
                                </div>

                               <div class="col-lg-4">
                                   <label>Card series</label>
                                   <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_number_series"/>
                               </div>
                            </div>
                            <br>
                            <hr>
                            <br>

                            <h3 class="font-size-lg text-dark-75 font-weight-bold mb-10" v-if="emvdetailsdata[0].reason_not_presented =='Pawned'">Pawning remarks</h3>
                           
                            <div class="form-group row" v-if="emvdetailsdata[0].reason_not_presented =='Pawned'">  
                                <div class="col-lg-4">
                                        <label>Remarks</label>
                                        <textarea class="form-control" name="pawning_remarks" rows="4" cols="50" v-model="emvdetailsdata[0].pawning_remarks"></textarea>
                                </div> 
                            </div>
                           
                            
                            
                            <!-- <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>* Cardholder Name: </label>
                                    <input type="text" name="card_holder_name" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_holder_name"  />
                                </div>
                                <div class="col-lg-4">
                                    <label>* Card Inputted:</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_number_inputted" />
                                </div>
                                <div class="col-lg-4">
                                    <label>* Card Series:</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_number_series" />
                                </div>
                            </div>
                    

                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>* Card System Generated:</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_number_system_generated" />
                                </div>
                                <div class="col-lg-4">
                                    <label>* Card Physically Presented:</label>
                                    <select class="form-control" name="card_physically_presented" v-model="emvdetailsdata[0].card_physically_presented">
                                        <option value="">Select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                       
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label>* Card is PIN:</label>
                                    <select class="form-control" name="card_pin" v-model="emvdetailsdata[0].card_pin_is_attached">
                                        <option value="">Select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>

        

                            
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>* Card replacement submitted details:</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_replacement_submitted_details"/>
                                </div>
                                <div class="col-lg-4">
                                    <label>Replacement Requests:</label>
                                    <input type="text" class="form-control" name="card_replacement_requests" placeholder="" v-model="emvdetailsdata[0].card_replacement_request" />
                                </div>
                                <div class="col-lg-4">
                                    <label>* Distribution Status:</label>

                                    <select class="form-control" name="card_pin" v-model="emvdetailsdata[0].distribution_status">
                                        <option value="">Select</option>
                                        <option value="Claimed">Claimed</option>
                                        <option value="Unclaimed">Unclaimed</option>
                                    </select>
                                   
                                </div>
                            </div>

                        
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label> Pawning Remarks:</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].pawning_remarks"/>
                                </div>
                                <div class="col-lg-4">
                                    <label> Reason not presented:</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].reason_not_presented"/>
                                </div>
                                <div class="col-lg-4">
                                    <label> Reason unclaimed:</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].reason_unclaimed"/>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- <button type="button" class="btn btn-primary font-weight-bold mr-2" id="kt_sweetalert_demo_8">Update</button> -->
                            <button type="button" class="btn btn-light-primary font-weight-bold" @click="emvupdateOcv" id="kt_sweetalert_demo_88" >Update</button>
                            <button type="button" class="btn btn-light-primary font-weight-bold">Cancel</button>
                        </div>
                    </div>
                </div>

            </form>
            <!--end::Form-->
        </div>
										<!--end::Card-->
</div>
    
    <!-- </div> -->
    <!--end::Card-->
@endsection

@section('plugin_script')
    <script src="{{ url('staff/assets/js/pages/crud/forms/validation/form-controls.js') }}"></script>
    <script src="{{ url('staff/assets/js/pages/features/miscellaneous/sweetalert2.js') }}"></script>

    <script src="{{ url('staff/assets/js/pages/widgets5883.js?v=7.2.9') }}"></script>
    <script src="{{ url('staff/assets/js/pages/custom/profile/profile5883.js?v=7.2.9') }}"></script>
@endsection