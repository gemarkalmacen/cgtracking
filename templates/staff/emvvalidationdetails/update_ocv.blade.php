{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'emvvalidationdetails/update_ocv', 'data' => ($data_object)]) 


@section('title', __('staff/titles.tools-emv_validations'))

@section('plugin_css')


@endsection

@section('content')

<div class="col-lg-6">
        <div class="card card-custom example example-compact">
            <div class="card-header">
                <h3 class="card-title">Update other Card</h3>
                
            </div>
            <!--begin::Form-->
            <form class="form" id="kt_form_2"  >
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
                        <h3 class="font-size-lg text-dark-75 font-weight-bold mb-10">Billing Information:</h3>
                        <div class="mb-2">
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <label>* Cardholder Name: </label>
                                    <input type="text" name="card_holder_name" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_holder_name"  />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <label>* Card Inputted:</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_number_inputted" />
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <label>* Card Series:</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_number_series" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <label>* Card System Generated:</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_number_system_generated" />
                                </div>
                            </div>

                            <div class="form-group row">
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
                                <div class="col-lg-4">
                                    <label>Replacement Requests:</label>
                                    <input type="text" class="form-control" name="card_replacement_requests" placeholder="" v-model="emvdetailsdata[0].card_replacement_requests" />
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <label>* Card replacement submitted details:</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].card_replacement_submitted_details"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <label>* Distribution Status:</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].distribution_status"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <label> Pawning Remarks:</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].pawning_remarks"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <label> Reason not presented:</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].pawning_remarks"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <label> Reason unclaimed:</label>
                                    <input type="text" name="billing_card_number" class="form-control" placeholder="" v-model="emvdetailsdata[0].reason_unclaimed"/>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- <button type="button" class="btn btn-primary font-weight-bold mr-2" id="kt_sweetalert_demo_8">Update</button> -->
                            <button type="button" class="btn btn-light-primary font-weight-bold" @click="emvupdateOcv" id="kt_sweetalert_demo_88" >Update</button>
                            <button type="reset" class="btn btn-light-primary font-weight-bold">Cancel</button>
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

    <script type="javascript">

    function myFunction() {
  alert("fasfasfasf");
}

    </script>
@endsection