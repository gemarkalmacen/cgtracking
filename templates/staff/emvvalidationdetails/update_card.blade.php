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
            <form class="form" id="kt_form_updateaaa"  >
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


                    <!-- <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>Set</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].set" disabled />
                                </div>
                                <div class="col-lg-4">
                                    <label>* Client status</label>

                                    <select class="form-control" v-model="emvdetailsdata[0].hh_status">
                                        <option v-for="(clientstatus, index) in emvclientstatus" :key="index" :value="clientstatus.client_status" >@{{ clientstatus.client_status }}</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label>* Sex:</label>
                                    <select class="form-control" v-model="emvdetailsdata[0].sex">
                                        <option >MALE</option>
                                        <option >FEMALE</option>
                                    </select>

                                    
                                </div>
                    </div> -->


                        <div class="form-group row">               
                            <div class="col-lg-4 col-xl-1">
                                <span class="form-text-bold">Card Image</span>
                                <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image:url(/staff/assets/media/users/blank.png)">
                                    <img id="card_image_1" class="image-input-wrapper" :src="'/storage/images/validations/'+emvdetailsdata[0].card_image" alt="your image"/>
                                
                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type='file' onchange="readURL(this);" id="file" ref="file" name="file" accept=".png, .jpg, .jpeg"  v-model="card_image_main" enctype="multipart/form-data"/>
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

                            <div class="col-lg-4 col-xl-1">
                                <span class="form-text-bold">Grantee Image</span>
                                <div class="image-input image-input-outline" id="kt_profile_avatar_2" style="background-image:url(/staff/assets/media/users/blank.png)">
                                    <img id="card_image_1" class="image-input-wrapper" :src="'/storage/images/validations/'+emvdetailsdata[0].image" alt="your image"/>
                                
                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <!-- <input type='file' onchange="readURL(this);" name="profile_avatar" accept=".png, .jpg, .jpeg" /> -->
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

                            <div class="col-lg-4 col-xl-1">
                                <span class="form-text-bold">Image Additional</span>
                                <div class="image-input image-input-outline" id="kt_profile_avatar_3" style="background-image:url(/staff/assets/media/users/blank.png)">
                                    <img id="card_image_1" class="image-input-wrapper" v-if="emvdetailsdata[0].image_additional"  :src="'/storage/images/validations/'+emvdetailsdata[0].image_additional" alt="your image"/>
                                    <img id="card_image_1" class="image-input-wrapper" v-else src="/staff/assets/media/users/blank.png" alt="your image"/>
                                
                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <!-- <input type='file' onchange="readURL(this);" name="profile_avatar" accept=".png, .jpg, .jpeg" /> -->
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
                                    <label>Extension name</label>
                                    <select class="form-control" v-model="emvdetailsdata[0].ext_name">
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
                                    <input v-if="emvdetailsdata[0].ext_name =='Others'"  type="text" name="other_ext_name" class="form-control" placeholder="" v-model="other_ext_name"  />
                                    <input type="text" v-else name="ext_name" class="form-control" placeholder="" disabled/>
                                </div>
                              
                            </div>


                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>Set</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].set" disabled />
                                </div>
                                <div class="col-lg-4">
                                    <label>* Client status</label>

                                    <select class="form-control" v-model="emvdetailsdata[0].hh_status">
                                        <option v-for="(clientstatus, index) in emvclientstatus" :key="index" :value="clientstatus.client_status" >@{{ clientstatus.client_status }}</option>
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
                                    <input type="number" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].contact_no" />
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
                                    <select v-else class="form-control" v-model="emvdetailsdata[0].relationship_to_grantee" disabled>
                                        <option v-for="(relationshipgrantee, index) in emvrelationshipgrantee" :key="index" :value="relationshipgrantee.relationship">@{{ relationshipgrantee.relationship }}</option>
                                    </select>
                                    <!-- <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].relationship_to_grantee"/> -->
                                </div>
                                <div class="col-lg-4">
                                    <label> Others name:</label>
                                    <input  v-if="emvdetailsdata[0].contact_no_of =='Others'" type="text" name="others_name" class="form-control" placeholder="" v-model="other_contact_name" id="others_contact_name"/>
                                    <input  v-else type="text" name="others_name" class="form-control" placeholder="" disabled/>
                                </div>

                                <!-- <div class="col-lg-4" v-else>
                                    <label> Others name:</label>
                                    <input type="text" name="others_name" class="form-control" placeholder="" v-model="emvdetailsdata[0].others_name" id="others_name" disabled/>
                                </div> -->
                            </div>

                            <br>
                            <hr>
                            <br>
                            <h3 class="font-size-lg text-dark-75 font-weight-bold mb-10">II. EMV Cash Card Information</h3>
                            
                            <div class="form-group row">
                        
                                <div class="col-lg-4">
                                    <label>* Current Grantee Card No:</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_number_prefilled" disabled/>
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
                                    <label> Reason Unclaimed?</label>
                                    <select class="form-control"  v-if="emvdetailsdata[0].distribution_status =='Unclaimed'" v-model="emvdetailsdata[0].reason_unclaimed">
                                        <option v-for="(reasonunclaimed, index) in emvreasonunclaimed" :key="index" :value="reasonunclaimed.reason">@{{ reasonunclaimed.reason }}</option>
                                    </select>

                                    <select class="form-control" v-else v-model="emvdetailsdata[0].reason_unclaimed"  disabled>
                                        <option v-for="(reasonunclaimed, index) in emvreasonunclaimed" :key="index" :value="reasonunclaimed.reason">@{{ reasonunclaimed.reason }}</option>
                                    </select>
                                    <!-- <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].distribution_status"/> -->
                                </div>
                            </div>

                            <div class="form-group row">

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

                                <div class="col-lg-4">
                                    <label> Who released the card:</label>
                                    <input  v-if="emvdetailsdata[0].distribution_status =='Claimed'" type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].release_by"/>
                                    <input  v-else type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].release_by" disabled/>
                                </div>

                            </div>


                            <div class="form-group row">
        
                                <div class="col-lg-4">
                                    <label> Where the Cash card Released:</label>
                                    <input v-if="emvdetailsdata[0].distribution_status =='Claimed'" type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].cvd_card_release_place"/>
                                    <input v-else type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].cvd_card_release_place" disabled/>
                                </div>

                                <div class="col-lg-4">
                                    <label> Physical Cash card Presented:</label>

                                    <select v-if="emvdetailsdata[0].distribution_status =='Claimed'" class="form-control" v-model="emvdetailsdata[0].card_physically_presented" @change ="physicalCashcardPresented" >
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>

                                    <select  v-else class="form-control" v-model="emvdetailsdata[0].card_physically_presented" disabled>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
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
                            </div>

                            <div class="form-group row">
                 
                                <div class="col-lg-4">
                                    <label> Reason Cash card not presented:</label>

                                    <select v-if="emvdetailsdata[0].card_physically_presented =='No'" class="form-control" v-model="emvdetailsdata[0].reason_not_presented" @change="pawned">
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
                                <div class="col-lg-4">
                                        <label>When and whom replacement requests</label>
                                        <input v-if="emvdetailsdata[0].card_replacement_request =='Yes'" type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_replacement_submitted_details"/>
                                        <input v-else type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_replacement_submitted_details" disabled/>
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
                                   <input type="date" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].date_pawned"/>
                               </div>
                               <div class="col-lg-4">
                                   <label>Loaned Amount</label>
                                   <input type="number" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].loan_amount"/>
                               </div>
                           </div>

                           <div class="form-group row" v-if="emvdetailsdata[0].reason_not_presented =='Pawned'">
                               
                               <div class="col-lg-4">
                                   <label>Address of Lender</label>
                                   <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].lender_address"/>
                               </div>
                               <div class="col-lg-4">
                                   <label> Date Retrieved:</label>
                                   <input type="date" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].date_retrieved"/>
                               </div>
                               <div class="col-lg-4">
                                   <label>Interest</label>
                                   <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].interest"/>
                               </div>
                           </div>

                           <div class="form-group row" v-if="emvdetailsdata[0].reason_not_presented =='Pawned'">
                               
                               <div class="col-lg-4">
                                   <label>Status</label>

                                   <select class="form-control" v-model="emvdetailsdata[0].status">
                                        <option value="Ongoing (card as collateral)">Ongoing (card as collateral)</option>
                                        <option value="Ongoing (card is on-hand)">Ongoing (card is on-hand)</option>
                                        <option value="Retrieved">Retrieved</option>
                                   </select>

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
                                   <input type="date" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].offense_date"/>
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
                            <br>
                            <hr>
                            <br>
                           <h3 class="font-size-lg text-dark-75 font-weight-bold mb-10">III. A. Non-Moving Account Information</h3>
                           <div class="form-group row">
                        
                                <div class="col-lg-4">
                                    <label>Non-EMV Card Number</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].non_emv_card_number" disabled/>
                                </div>
                                <div class="col-lg-4">
                                    <label>Card Name</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_name" disabled/>
                                </div> 

                                <div class="col-lg-4">
                                    <label>NMA Amount as of Sep. 30, 2020</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].amount" disabled/>
                                </div> 
                            </div>

                            <div class="form-group row">
                        
                                <div class="col-lg-4">
                                    <label>Reason for NMA</label>
                                    <select class="form-control" v-model="emvdetailsdata[0].reason" v-if="emvdetailsdata[0].amount >100">
                                        <option v-for="(reasonunclaimed, index) in emvreasonunclaimed" :key="index" :value="reasonunclaimed.reason">@{{ reasonunclaimed.reason }}</option>
                                   </select>
                                   <select class="form-control" v-model="emvdetailsdata[0].reason" v-else disabled>
                                        <option></option>
                                   </select>
                                </div>
                                <div class="col-lg-4">
                                    <label>Remarks</label>
                                    <textarea v-if="emvdetailsdata[0].amount >100" class="form-control" name="nma_remarks" rows="4" cols="50" v-model="emvdetailsdata[0].remarks"></textarea>
                                    <textarea v-else class="form-control" name="nma_remarks" rows="4" cols="50" v-model="emvdetailsdata[0].remarks" disabled></textarea>
                                </div> 
                            </div>
                            <br>
                            <hr>
                            <br>
                           <h3 class="font-size-lg text-dark-75 font-weight-bold mb-10">IV. Overall Remarks</h3>
                           <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>Comment</label>
                                    <textarea class="form-control" name="nma_remarks" rows="4" cols="50" v-model="emvdetailsdata[0].overall_remarks"></textarea>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- <button type="button" class="btn btn-light-primary font-weight-bold" @click="emvupdateOcv" id="kt_sweetalert_demo_88" >Update</button> -->
                            <button type="button" class="btn btn-light-primary font-weight-bold" @click="updateMain" id="kt_sweetalert_demo_update">Update</button>
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
    <script src="{{ url('staff/assets/js/pages/widgets5883.js?v=7.2.9') }}"></script>
    <script src="{{ url('staff/assets/js/pages/custom/profile/custom_image.js') }}"></script>
    <!-- <script src="{{ url('staff/assets/js/pages/custom/profile/profile5883.js?v=7.2.9') }}"></script> -->
    
@endsection