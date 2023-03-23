{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'emvvalidationdetails/update_card', 'data' => ($data_object)]) 


@section('title', __('staff/titles.tools-emv_validations'))

@section('plugin_css')


@endsection

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />

<div class="col-lg-13">
        <div class="card card-custom example example-compact">
            <div class="card-header">
                <h3 class="card-title">Update Cash card</h3>
                
            </div>
            <!--begin::Form-->
            <form class="form" id="kt_form_update"  >
                <div class="card-body">
                    <div class="alert alert-custom alert-light-success d-none" role="alert">
                        <div class="alert-icon">
                            <i class="flaticon2-bell-5"></i>
                        </div>
                        <div class="alert-text font-weight-bold">Oh snap! Change a few things up and try submitting again.</div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span>
                                    <i class="ki ki-close"></i>
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h3 class="font-size-lg text-dark-75 font-weight-bold mb-10">I. Demographics:</h3>
                        <div class="mb-2">
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>* Firstname: </label>
                                    <input type="text" name="card_holder_name" class="form-control" placeholder="" v-model="emvdetailsdata[0].first_name"/>
                                </div>
                                <div class="col-lg-4">
                                    <label>* Middlename: </label>
                                    <input type="text" name="card_holder_name" class="form-control" placeholder="" v-model="emvdetailsdata[0].middle_name"/>
                                </div>
                                <div class="col-lg-4">
                                    <label>* Lastname: </label>
                                    <input type="text" name="card_holder_name" class="form-control" placeholder="" v-model="emvdetailsdata[0].last_name"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>* Extension name</label>
                                    <select class="form-control" v-model="emvdetailsdata[0].ext_name" @change="extensionName">
                                        <option>Jr.</option>
                                        <option>Sr.</option>
                                        <option>I</option>
                                        <option>II</option>
                                        <option>III</option>
                                        <option>IV</option>
                                        <option>V</option>
                                        <option>Jra.</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label>Other extension name</label>
                                    <input type="text" name="card_holder_name" class="form-control" placeholder="" v-model="emvdetailsdata[0].last_name"  />
                                </div>
                              
                            </div>


                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>* Set</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].set" />
                                </div>
                                <div class="col-lg-4">
                                    <label>* Client status</label>

                                    <select class="form-control" v-model="emvdetailsdata[0].hh_status">
                                        <option v-for="(clientstatus, index) in emvclientstatus" :key="index" :value="clientstatus.emvclientstatus" >@{{ clientstatus.client_status }}</option>
                                    </select>

                                
                                </div>
                                <div class="col-lg-4">
                                    <label>* Sex:</label>
                                    <select class="form-control" v-model="emvdetailsdata[0].sex">
                                        <option >MALE</option>
                                        <option >FEMALE</option>
                                    </select>

                                    <!-- <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].sex" /> -->
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>* Province</label>
                                    <select class="form-control" v-model="emvdetailsdata[0].province_code" @change="provinceChange">
                                        <option v-for="(emvprovince, index) in emvpsgc_province" :key="index" :value="emvprovince.correspondence_code" >@{{ emvprovince.name_old }}</option>
                                    </select>
                                    
                                </div>
                                <div class="col-lg-4">
                                    <label>* Municipality</label>
                                    <select id="municipality_psgc" class="form-control" name="municipality_psgc"  v-model="emvdetailsdata[0].municipality_code"  @change="municipalityChange">
                                        <option v-for="(emvmunicipality, index) in emvpsgc_municipality" :key="index" :value="emvmunicipality.correspondence_code" >@{{ emvmunicipality.name_old }}</option>
                                    </select>
                                    
                                </div>
                                <div class="col-lg-4">
                                    <label>* Barangay</label>

                                    <select id="barangay_psgc" class="form-control" name="barangay_psgc" v-model="emvdetailsdata[0].barangay_code">
                                        <option v-for="(emvbarangay, index) in emvpsgc_barangay" :key="index" :value="emvbarangay.correspondence_code" >@{{ emvbarangay.name_old }}</option>
                                    </select>
                                    
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-lg-4">
                                    <label>* Interviewee:</label>
                                    <!-- <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].is_grantee" /> -->
                                    <select id="interviewee_psgc" class="form-control" name="interviewee_psgc" v-model="emvdetailsdata[0].is_grantee" @change="intervieweeDropdown">
                                        <option value="Grantee" >Grantee</option>
                                        <option value="Representative" >Representative</option>
                                    </select>
                                </div>

                                <div class="col-lg-4">
                                    <label>* Contact No:</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].contact_no" />
                                </div>

                                <div class="col-lg-4">
                                    <label>* Contact No of:</label>

                                    <select class="form-control" v-model="emvdetailsdata[0].contact_no_of" @change="contactnoOfDropdown" >
                                        <option value="Grantee" >Grantee</option>
                                        <option value="Others" >Others</option>
                                    </select>

                                    <!-- <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].is_grantee"/> -->
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-4" >
                                    <label> Name of representative:</label>
                                    <input v-if="emvdetailsdata[0].is_grantee =='Representative'" type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].representative_name"/>
                                    <input v-else type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].representative_name" disabled/>
                                </div>
                                <div class="col-lg-4" >
                                    <label> Relationship to Grantee:</label>
                                    <select v-if="emvdetailsdata[0].is_grantee =='Representative'" class="form-control" v-model="emvdetailsdata[0].relationship_to_grantee" >
                                        <option v-for="(relationshipgrantee, index) in emvrelationshipgrantee" :key="index" :value="relationshipgrantee.relationship">@{{ relationshipgrantee.relationship }}</option>
                                    </select>
                                    <select v-else class="form-control" v-model="emvdetailsdata[0].relationship_to_grantee">
                                        <option v-for="(relationshipgrantee, index) in emvrelationshipgrantee" :key="index" :value="relationshipgrantee.relationship" disabled>@{{ relationshipgrantee.relationship }}</option>
                                    </select>
                                    <!-- <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].relationship_to_grantee"/> -->
                                </div>
                                <div class="col-lg-4">
                                    <label> Others name:</label>
                                    <input  v-if="emvdetailsdata[0].contact_no_of =='Others'" type="text" name="others_name" class="form-control" placeholder="" v-model="emvdetailsdata[0].others_name" id="others_name"/>
                                    <input  v-else type="text" name="others_name" class="form-control" placeholder="" v-model="emvdetailsdata[0].others_name" id="others_name" disabled/>
                                </div>

                                <!-- <div class="col-lg-4" v-else>
                                    <label> Others name:</label>
                                    <input type="text" name="others_name" class="form-control" placeholder="" v-model="emvdetailsdata[0].others_name" id="others_name" disabled/>
                                </div> -->
                            </div>



                            <h3 class="font-size-lg text-dark-75 font-weight-bold mb-10">II. EMV Cash Card Information</h3>
                            
                            <div class="form-group row">
                        
                                <div class="col-lg-4">
                                    <label>* Current Grantee Card No:</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_number_prefilled"/>
                                </div>
                                <div class="col-lg-4">
                                    <label> Distribution status: <small><b> (Actual)</b></small></label>

                                    <select class="form-control" v-model="emvdetailsdata[0].distribution_status" @change="distributionStatus">
                                        <option value="Claimed" >Claimed</option>
                                        <option value="Unclaimed" >Unclaimed</option>
                                    </select>
                                    <!-- <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].distribution_status"/> -->
                                </div>
                                <div class="col-lg-4">
                                    <label> Date of card released: <small><b> (Actual)</b></small></label>
                                    <input  v-if="emvdetailsdata[0].distribution_status =='Claimed'"  type="date" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].cvd_card_release_date_actual"/>
                                    <input  v-else  type="date" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].cvd_card_release_date_actual" disabled/>
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
                                    <input v-if="emvdetailsdata[0].distribution_status =='Claimed'" type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_physically_presented"/>
                                    <input v-else type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_physically_presented" disabled/>
                                </div>
                            </div>

                            <div class="form-group row">
                 
                                <div class="col-lg-4">
                                    <label>Pin Attached</label>
                                    <input v-if="emvdetailsdata[0].distribution_status =='Claimed'" type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_pin_is_attached"/>
                                    <input v-else type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_pin_is_attached" disabled/>
                                </div>

                                <div class="col-lg-4">
                                    <label> Reason Cash card not presented:</label>
                                    <input v-if="emvdetailsdata[0].distribution_status =='Claimed'" type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].reason_not_presented"/>
                                    <input v-else type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].reason_not_presented" disabled/>
                                </div>
                                <div class="col-lg-4">
                                    <label> Already filed request for replacement:</label>

                                    <select v-if="emvdetailsdata[0].distribution_status =='Claimed'" class="form-control" v-model="emvdetailsdata[0].distribution_status" @change="distributionStatus">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    <select v-else class="form-control" v-model="emvdetailsdata[0].distribution_status" @change="distributionStatus" disabled>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                               
                                <div class="col-lg-4">
                                    <label>When and whom replacement requests</label>
                                    <input v-if="emvdetailsdata[0].distribution_status =='Claimed'" type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_replacement_submitted_details"/>
                                    <input v-else type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_replacement_submitted_details" disabled/>
                                </div>
                                <div class="col-lg-4">
                                    <label> Reason:</label>
                                    <input v-if="emvdetailsdata[0].distribution_status =='Claimed'" type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].reason"/>
                                    <input v-else type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].reason" disabled/>
                                </div>
                                <div class="col-lg-4">
                                    <label>Reason not presented</label>
                                    <input v-if="emvdetailsdata[0].distribution_status =='Claimed'" type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].reason_not_presented"/>
                                    <input v-else type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].reason_not_presented" disabled/>
                                </div>
                            </div>

                            <div class="form-group row">
                               
                               <div class="col-lg-4">
                                   <label>Card series</label>
                                   <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_number_series"/>
                               </div>
                              
                           </div>

                           <h3 class="font-size-lg text-dark-75 font-weight-bold mb-10" v-if="emvdetailsdata[0].reason_not_presented =='Pawned'">Pawning details</h3>

                           <div class="form-group row" v-if="emvdetailsdata[0].reason_not_presented =='Pawned'" >
                               
                               <div class="col-lg-4">
                                   <label>Name of Lender:</label>
                                   <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].lender_name"/>
                               </div>
                               <div class="col-lg-4">
                                   <label> Date of Pawning:</label>
                                   <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].date_pawned"/>
                               </div>
                               <div class="col-lg-4">
                                   <label>Loaned Amount</label>
                                   <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].loan_amount"/>
                               </div>
                           </div>

                           <div class="form-group row" v-if="emvdetailsdata[0].reason_not_presented =='Pawned'">
                               
                               <div class="col-lg-4">
                                   <label>Address of Lender</label>
                                   <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].lender_address"/>
                               </div>
                               <div class="col-lg-4">
                                   <label> Date Retrieved:</label>
                                   <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].date_retrieved"/>
                               </div>
                               <div class="col-lg-4">
                                   <label>Interest</label>
                                   <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].interest"/>
                               </div>
                           </div>

                           <div class="form-group row" v-if="emvdetailsdata[0].reason_not_presented =='Pawned'">
                               
                               <div class="col-lg-4">
                                   <label>Status</label>
                                   <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].status"/>
                               </div>
                               <div class="col-lg-4">
                                   <label> Reason for Pawning:</label>
                                   <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].pv_reason"/>
                               </div>
                               <div class="col-lg-4">
                                   <label>Offense History</label>
                                   <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].offense_history"/>
                               </div>
                           </div>

                           <div class="form-group row" v-if="emvdetailsdata[0].reason_not_presented =='Pawned'">
                               
                               <div class="col-lg-4">
                                   <label>Offense History Date</label>
                                   <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].offense_date"/>
                               </div>
                               <div class="col-lg-4">
                                   <label> Remarks:</label>
                                   <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].pvd_remarks"/>
                               </div>
                               <div class="col-lg-4">
                                   <label>Intervention of C/ML</label>
                                   <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].staff_intervention"/>
                               </div>
                           </div>
                           <div class="form-group row" v-if="emvdetailsdata[0].reason_not_presented =='Pawned'">
                               <div class="col-lg-4">
                                   <label>Other Details</label>
                                   <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].other_details"/>
                               </div>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- <button type="button" class="btn btn-light-primary font-weight-bold" @click="emvupdateOcv" id="kt_sweetalert_demo_88" >Update</button> -->
                            <button type="button" class="btn btn-light-primary font-weight-bold" @click="emvupdateMain" id="kt_sweetalert_demo_update">Update</button>
                            <button type="button" class="btn btn-light-primary font-weight-bold" @click="updateCancelCard">Cancel</button>
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
    <script src="{{ url('staff/assets/plugins/custom/customjs/customaddress.js') }}"></script>
    
@endsection