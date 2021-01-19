{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'patients/show', 'data' => ['id' => (isset($model)) ? json_encode($model->id) : json_encode(null) ]])
@section('title',__('staff/titles.patients_view'))

@section('content')
    <div class="wizard wizard-4" id="kt_wizard_v4" data-wizard-state="step-first" data-wizard-clickable="true">
        <!--begin: Wizard Nav-->
        <div class="wizard-nav">
            <div class="wizard-steps">
                <!--begin::Wizard Step 1 Nav-->
                <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                    <div class="wizard-wrapper">
                        <div class="wizard-number">1</div>
                        <div class="wizard-label">
                            <div class="wizard-title">Patient</div>
                            <div class="wizard-desc">Input details</div>
                        </div>
                    </div>
                </div>
                <!--end::Wizard Step 1 Nav-->
                <!--begin::Wizard Step 2 Nav-->
                <div class="wizard-step" data-wizard-type="step">
                    <div class="wizard-wrapper">
                        <div class="wizard-number">2</div>
                        <div class="wizard-label">
                            <div class="wizard-title">Ocular History</div>
                            <div class="wizard-desc">Input ocular information</div>
                        </div>
                    </div>
                </div>
                <!--end::Wizard Step 2 Nav-->
                <!--begin::Wizard Step 3 Nav-->
                <div class="wizard-step" data-wizard-type="step">
                    <div class="wizard-wrapper">
                        <div class="wizard-number">3</div>
                        <div class="wizard-label">
                            <div class="wizard-title">Visual Needs Assessment</div>
                            <div class="wizard-desc">Visual Details</div>
                        </div>
                    </div>
                </div>
                <!--end::Wizard Step 3 Nav-->
                <!--begin::Wizard Step 4 Nav-->
                <div class="wizard-step" data-wizard-type="step">
                    <div class="wizard-wrapper">
                        <div class="wizard-number">4</div>
                        <div class="wizard-label">
                            <div class="wizard-title">Medical History</div>
                            <div class="wizard-desc">Input medical history</div>
                        </div>
                    </div>
                </div>
                <!--end::Wizard Step 4 Nav-->
            </div>
        </div>
        <!--end: Wizard Nav-->
        <!--begin: Wizard Body-->
        <div class="card card-custom card-shadowless rounded-top-0">
            <div class="card-body p-0">
                <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                    <div class="col-xl-12 col-xxl-7">
                        <!--begin: Wizard Form-->
                        <form class="form mt-0 mt-lg-10" id="kt_form" action="{!! isset($model) ? route('staff.patients.update', $model->id) : route('staff.patients.store') !!}" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                            {!! @csrf_field() !!}
                            @if( isset($model) )
                                {!! @method_field('PUT') !!}
                            @endif
                            <!--begin: Wizard Step 1-->
                            <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                <div class="mb-10 font-weight-bold text-dark">Enter Patient Details</div>
                                <!--begin::Input-->
                                <div class="row">

                                    <!-- hidden start -->
                                    <input type="hidden" id="edit_mode" name="edit_mode" value="{{ isset($edit) }}">
                                    <input type="hidden" id="patient_id" name="patient_id" value="{{ (isset($model)) ? json_encode($model->id) : json_encode(null) }}">
                                    <!-- hidden end -->

                                    <div class="form-group col-md-3 col-sm-3 col-xs-12">
                                        <label>{{ __('staff/forms.patients_firstname') }} </label>
                                        <!-- <input type="text" class="form-control form-control-solid form-control-lg" name="fname" placeholder="First Name" value="John" /> -->
                                        <input
                                            type="text"
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('firstname') ? 'is-invalid' : ''}}"
                                            name="firstname"
                                            id="firstname"
                                            value="{{ isset($model) ? $model->firstname : old('firstname') }}"
                                            disabled
                                        >
                                    </div>
                                    <div class="form-group col-md-3 col-sm-3 col-xs-12">
                                        <label>{{ __('staff/forms.patients_middlename') }} </label>
                                        <input
                                            type="text"
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('middlename') ? 'is-invalid' : ''}}"
                                            name="middlename"
                                            id="middlename"
                                            value="{{ isset($model) ? $model->middlename : old('middlename') }}"
                                            disabled
                                        >
                                    </div>
                                    <div class="form-group col-md-3 col-sm-3 col-xs-12">
                                        <label>{{ __('staff/forms.patients_lastname') }} </label>
                                        <input
                                            type="text"
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('lastname') ? 'is-invalid' : ''}}"
                                            name="lastname"
                                            id="lastname"
                                            value="{{ isset($model) ? $model->lastname : old('lastname') }}"
                                            disabled
                                        >
                                    </div>
                                    <div class="form-group col-md-3 col-sm-3 col-xs-12">
                                        <label>{{ __('staff/forms.patients_extension_name') }} </label>
                                        <input
                                            type="text"
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('extension_name') ? 'is-invalid' : ''}}"
                                            name="extension_name"
                                            id="extension_name"
                                            value="{{ isset($model) ? $model->extension_name : old('extension_name') }}"
                                            disabled
                                        >
                                    </div>
                                </div>
                                <!--end::Input-->
                                <!--begin::Input-->
                                <div class="row">
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>{{ __('staff/forms.patients_birthdate') }} </label>
                                        <input
                                            type="date"
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('birthdate') ? 'is-invalid' : ''}}"
                                            name="birthdate"
                                            id="birthdate"
                                            value="{{ isset($model) ? $model->birthdate : old('birthdate') }}"
                                            disabled
                                        >
                                    </div>
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>{{ __('staff/forms.patients_sex') }} </label>
                                        <input
                                            type="text"
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('sex') ? 'is-invalid' : ''}}"
                                            name="sex"
                                            id="sex"
                                            value="{{ isset($model) ? $model->sex : old('sex') }}"
                                            disabled
                                        >
                                    </div>
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>{{ __('staff/forms.patients_civil_status') }} </label>
                                        <input
                                            type="text"
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('civil_status') ? 'is-invalid' : ''}}"
                                            name="civil_status"
                                            id="civil_status"
                                            value="{{ isset($model) ? $model->civil_status : old('civil_status') }}"
                                            disabled
                                        >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4 col-sm-4 col-xs-6">
                                        <label>{{ __('staff/forms.patients_address') }} </label>
                                        <textarea
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('address') ? 'is-invalid' : ''}}"
                                            name="address_line1"
                                            id="address_line1"
                                            disabled
                                        >{{ isset($model) ? $model->address_line1 : old('address_line1') }}</textarea>
                                    </div>

                                    <div class="form-group col-md-4 col-sm-4 col-xs-6">
                                        <label>{{ __('staff/forms.patients_municipality') }} </label>
                                        <textarea
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('address_municipality') ? 'is-invalid' : ''}}"
                                            name="address_municipality"
                                            id="address_municipality"
                                            disabled
                                        >{{ isset($model) ? $model->address_municipality : old('address_municipality') }}</textarea>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-4 col-xs-6">
                                        <label>{{ __('staff/forms.patients_province') }} </label>
                                        <textarea
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('address_province') ? 'is-invalid' : ''}}"
                                            name="address_province"
                                            id="address_province"
                                            disabled
                                        >{{ isset($model) ? $model->address_province : old('address_province') }}</textarea>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4 col-sm-4 col-xs-6">
                                        <label>{{ __('staff/forms.patients_zipcode') }} </label>
                                        <input
                                            type="text"
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('address_zipcode') ? 'is-invalid' : ''}}"
                                            name="address_zipcode"
                                            id="address_zipcode"
                                            value="{{ isset($model) ? $model->address_zipcode : old('address_zipcode') }}"
                                            disabled
                                        >
                                    </div>
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>{{ __('staff/forms.patients_email') }} </label>
                                        <input
                                            type="email"
                                            class="form-control form-control-solid form-control-lg  {{ $errors->has('email') ? 'is-invalid' : ''}}"
                                            name="email"
                                            id="email"
                                            value="{{ isset($model) ? $model->email : old('email') }}"
                                            disabled
                                        >
                                    </div>
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>{{ __('staff/forms.patients_contact_number') }} </label>
                                        <input
                                            type="text"
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('contact_number') ? 'is-invalid' : ''}}"
                                            name="contact_number"
                                            id="contact_number"
                                            value="{{ isset($model) ? $model->contact_number : old('contact_number') }}"
                                            disabled
                                        >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>{{ __('staff/forms.patients_weight') }} </label>
                                        <input
                                            type="text"
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('weight') ? 'is-invalid' : ''}}"
                                            name="weight"
                                            id="weight"
                                            value="{{ isset($model) ? $model->weight : old('weight') }}"
                                            disabled
                                        >
                                    </div>

                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>{{ __('staff/forms.patients_height') }} </label>
                                        <input
                                            type="text"
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('height') ? 'is-invalid' : ''}}"
                                            name="height"
                                            id="height"
                                            value="{{ isset($model) ? $model->height : old('height') }}"
                                            disabled
                                        >
                                    </div>

                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>{{ __('staff/forms.patients_bp') }} </label>
                                        <input
                                            type="text"
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('bp') ? 'is-invalid' : ''}}"
                                            name="bp"
                                            id="bp"
                                            value="{{ isset($model) ? $model->bp : old('bp') }}"
                                            disabled
                                        >
                                    </div>
                                </div>
                            </div>
                            <!--end: Wizard Step 1-->
                            <!--begin: Wizard Step 2-->
                            <div class="pb-5" data-wizard-type="step-content">
                                <div class="form-group">
                                    <label>Purpose of today’s visit: (Please check)</label>
                                    <div class="checkbox-inline">
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="annual_visit" name="annual_visit" value="true" v-model="patients.ocular_history.annual_visit"/>Annual Visit<span></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="headaches" name="headaches" value="true" v-model="patients.ocular_history.headaches"/>Headaches<span></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="eye_pain1" name="eye_pain1" value="true" v-model="patients.ocular_history.eye_pain1"/>Eye Pain<span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="blurry_vision" name="blurry_vision" value="true" v-model="patients.ocular_history.blurry_vision"/>Blurry Vision<span></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="infection" name="infection" value="true" v-model="patients.ocular_history.infection"/>Infection<span></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="tearing1" name="tearing1" value="true" v-model="patients.ocular_history.tearing1"/>Tearing<span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="burning" name="burning" value="true" v-model="patients.ocular_history.burning"/>Burning<span></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="itchiness" name="itchiness" value="true" v-model="patients.ocular_history.itchiness"/>Itchiness<span></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="grittiness" name="grittiness" value="true" v-model="patients.ocular_history.grittiness"/>Grittiness<span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="double_vision" name="double_vision" value="true" v-model="patients.ocular_history.double_vision"/>Double Vision<span></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="night_vision_difficulty" name="night_vision_difficulty" value="true" v-model="patients.ocular_history.night_vision_difficulty"/>Night Vision Difficulty<span></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="eye_pain2" name="eye_pain2" value="true" v-model="patients.ocular_history.eye_pain2"/>Eye Pain<span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>
                                
                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="dryness" name="dryness" value="true" v-model="patients.ocular_history.dryness"/>Dryness<span></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="flash_of_light" name="flash_of_light" value="true" v-model="patients.ocular_history.flash_of_light"/>Flash of Light<span></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="tearing2" name="tearing2" value="true" v-model="patients.ocular_history.tearing2"/>Tearing<span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="floaters_or_spots_in_vision" name="floaters_or_spots_in_vision" value="true" v-model="patients.ocular_history.floaters_or_spots_in_vision"/>Floaters/spots in  vision<span></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="update_contact_lenses1" name="update_contact_lenses1" value="true" v-model="patients.ocular_history.update_contact_lenses1"/>Update contact lenses<span></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="update_contact_lenses2" name="update_contact_lenses2" value="true" v-model="patients.ocular_history.update_contact_lenses2"/>Update contact lenses<span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>
                                
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <label>When was your last eye exam?</label>
                                    <input
                                            type="date"
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('ocular_last_eye_exam') ? 'is-invalid' : ''}}"
                                            name="ocular_last_eye_exam"
                                            id="ocular_last_eye_exam"
                                            v-model="patients.ocular_history.ocular_last_eye_exam"
                                            value="{{ isset($model) ? $model->other_details : old('ocular_last_eye_exam') }}"
                                            disabled
                                        >
                                    {!! $errors->first('bp', '<div class="invalid-feedback">:message</div>') !!}
                                </div>

                                <div class="form-group">
                                    <label>Do you wear contact lenses?</label>
                                    <div class="checkbox-inline">
                                        <div class="col-lg-4 col-xl-3">
                                            <input type="radio" disabled="disabled" name="wear_contact_lenses" value="yes" v-model="patients.ocular_history.wear_contact_lenses">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-3">
                                            <input type="radio" disabled="disabled" name="wear_contact_lenses" value="no" v-model="patients.ocular_history.wear_contact_lenses">
                                            <label for="one">No</label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <label>Have you been diagnosed with the following?</label>
                                    <div class="checkbox-inline">
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="cataracts" name="cataracts" value="true" v-model="patients.ocular_history.cataracts"/>Cataracts<span></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="iritus_uveitis" name="iritus_uveitis" value="true" v-model="patients.ocular_history.iritus_uveitis"/>Iritus/Uveitis<span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="corneal_abrasion" name="corneal_abrasion" value="true" v-model="patients.ocular_history.corneal_abrasion"/>Corneal abrasion<span></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="lazy_eye" name="lazy_eye" value="true" v-model="patients.ocular_history.lazy_eye"/>Lazy Eye<span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="dry_eye" name="dry_eye" value="true" v-model="patients.ocular_history.dry_eye"/>Dry Eye<span></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="macular_degeneration" name="macular_degeneration" value="true" v-model="patients.ocular_history.macular_degeneration"/>Macular Degeneration<span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="eye_turn" name="eye_turn" value="true" v-model="patients.ocular_history.eye_turn"/>Eye turn<span></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="retinal_defect_hole_tear" name="retinal_defect_hole_tear" value="true" v-model="patients.ocular_history.retinal_defect_hole_tear"/>Retinal defect/hole/tear<span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="glaucoma" name="glaucoma" value="true" v-model="patients.ocular_history.glaucoma"/>Glaucoma<span></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="retinal_detachment" name="retinal_detachment" value="true" v-model="patients.ocular_history.retinal_detachment"/>Retinal Detachment<span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="injury" name="injury" value="true" v-model="patients.ocular_history.injury"/>Injury<span></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="other_eye_diseases" name="other_eye_diseases" value="true" v-model="patients.ocular_history.other_eye_diseases"/>Other eye diseases<span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="separator separator-dashed mt-4 mb-4"></div>

                                <!--  -->

                            </div>
                            <!--end: Wizard Step 2-->
                            <!--begin: Wizard Step 3-->
                            <div class="pb-5" data-wizard-type="step-content">
                                <div class="mb-10 font-weight-bold text-dark">Visual Needs Assessment:</div>

                                <div class="row">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label>Hours of computer/phone usage per day:</label>
                                        <input
                                            type="text"
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('hour_usage_computer_phone_per_day') ? 'is-invalid' : ''}}"
                                            name="hour_usage_computer_phone_per_day"
                                            id="hour_usage_computer_phone_per_day"
                                            v-model="patients.ocular_history.hour_usage_computer_phone_per_day"
                                            value="{{ isset($model) ? $model->other_details : old('hour_usage_computer_phone_per_day') }}"
                                            disabled
                                        >
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label>Hours of outdoor activity per day:</label>
                                        <input
                                            type="text"
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('hour_outdoor_activity_per_day') ? 'is-invalid' : ''}}"
                                            name="hour_outdoor_activity_per_day"
                                            id="hour_outdoor_activity_per_day"
                                            v-model="patients.ocular_history.hour_outdoor_activity_per_day"
                                            value="{{ isset($model) ? $model->other_details : old('hour_outdoor_activity_per_day') }}"
                                            disabled
                                        >
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label>Hobbies:</label>
                                        <input
                                            type="text"
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('hobbies') ? 'is-invalid' : ''}}"
                                            name="hobbies"
                                            id="hobbies"
                                            v-model="patients.ocular_history.hobbies"
                                            value="{{ isset($model) ? $model->other_details : old('hobbies') }}"
                                            disabled
                                        >
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label>Sports:</label>
                                        <input
                                            type="text"
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('sports') ? 'is-invalid' : ''}}"
                                            name="sports"
                                            id="sports"
                                            v-model="patients.ocular_history.sports"
                                            value="{{ isset($model) ? $model->other_details : old('sports') }}"
                                            disabled
                                        >
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label>How many hours do you read before you experience fatigue?</label>
                                        <input
                                            type="text"
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('hours_read_before_experience_fatique') ? 'is-invalid' : ''}}"
                                            name="hours_read_before_experience_fatique"
                                            id="hours_read_before_experience_fatique"
                                            v-model="patients.ocular_history.hours_read_before_experience_fatique"
                                            value="{{ isset($model) ? $model->other_details : old('hours_read_before_experience_fatique') }}"
                                            disabled
                                        >
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>Check if you have:</label>
                                    <div class="checkbox-inline">
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="eyestrain" name="eyestrain" value="true" v-model="patients.ocular_history.eyestrain"/>eyestrain<span></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="neck_strain" name="neck_strain" value="true" v-model="patients.ocular_history.neck_strain"/>neck strain<span></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <label class="checkbox checkbox-primary">
                                                <input type="checkbox" disabled="disabled" checked="checked" id="headaches_2" name="headaches_2" value="true" v-model="patients.ocular_history.headaches_2"/>headaches<span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label>Who can we thank for your referral to our clinic?:</label>
                                        <input
                                            type="text"
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('thank_you_referral_to_clinic') ? 'is-invalid' : ''}}"
                                            name="thank_you_referral_to_clinic"
                                            id="thank_you_referral_to_clinic"
                                            v-model="patients.ocular_history.thank_you_referral_to_clinic"
                                            value="{{ isset($model) ? $model->other_details : old('thank_you_referral_to_clinic') }}"
                                            disabled
                                        >
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label>Current Medications and Dose (include OTC and supplements)?:</label>
                                        <input
                                            type="text"
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('current_medications_dose') ? 'is-invalid' : ''}}"
                                            name="current_medications_dose"
                                            id="current_medications_dose"
                                            v-model="patients.ocular_history.current_medications_dose"
                                            value="{{ isset($model) ? $model->other_details : old('current_medications_dose') }}"
                                            disabled
                                        >
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label>Allergies:</label>
                                        <input
                                            type="text"
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('allergies') ? 'is-invalid' : ''}}"
                                            name="allergies"
                                            id="allergies"
                                            v-model="patients.ocular_history.allergies"
                                            value="{{ isset($model) ? $model->other_details : old('allergies') }}"
                                            disabled
                                        >
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label>List any prior surgeries and dates if known:</label>
                                        <input
                                            type="text"
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('surgeries_and_dates') ? 'is-invalid' : ''}}"
                                            name="surgeries_and_dates"
                                            id="surgeries_and_dates"
                                            v-model="patients.ocular_history.surgeries_and_dates"
                                            value="{{ isset($model) ? $model->other_details : old('surgeries_and_dates') }}"
                                            disabled
                                        >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Do you use cigarettes?</label>
                                    <div class="checkbox-inline">
                                        <div class="col-lg-2 col-xl-2">
                                            <input type="radio" disabled="disabled" name="cigarettes_yes_no" value="yes" v-model="patients.ocular_history.cigarettes_yes_no">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-2 col-xl-2">
                                            <input type="radio" disabled="disabled" name="cigarettes_yes_no" value="no" v-model="patients.ocular_history.cigarettes_yes_no">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-8 col-xl-8">
                                            <label>If so, how often?</label>
                                            <input
                                                type="text"
                                                class="form-control form-control-solid form-control-lg {{ $errors->has('cigarettes') ? 'is-invalid' : ''}}"
                                                name="cigarettes"
                                                id="cigarettes"
                                                v-model="patients.ocular_history.cigarettes"
                                                value="{{ isset($model) ? $model->other_details : old('cigarettes') }}"
                                                disabled
                                            >
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <label>Do you drink alcohol?</label>
                                    <div class="checkbox-inline">
                                        <div class="col-lg-2 col-xl-2">
                                            <input type="radio" disabled="disabled" name="alcohol_yes_no" value="yes" v-model="patients.ocular_history.alcohol_yes_no">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-2 col-xl-2">
                                            <input type="radio" disabled="disabled" name="alcohol_yes_no" value="no" v-model="patients.ocular_history.alcohol_yes_no">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-8 col-xl-8">
                                            <label>If so, how often?</label>
                                            <input
                                                type="text"
                                                class="form-control form-control-solid form-control-lg {{ $errors->has('alcohol') ? 'is-invalid' : ''}}"
                                                name="alcohol"
                                                id="alcohol"
                                                v-model="patients.ocular_history.alcohol"
                                                value="{{ isset($model) ? $model->other_details : old('alcohol') }}"
                                                disabled
                                            >
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                            </div>

                            <!--end: Wizard Step 3-->
                            <!--begin: Wizard Step 4-->
                            <div class="pb-5" data-wizard-type="step-content">
                                <!--begin::Section-->
                                <h4 class="mb-10 font-weight-bold text-dark">Medical History</h4>
                                <h6 class="font-weight-bolder mb-3">Have you ever been diagnosed or treated for any of the following health problems? (If yes include diagnosis; otherwise, circle N for No and F for family history)</h6>
                                
                                <br/>
                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-3 col-xl-3">
                                            <label>Allergies:</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_allergies" value="yes" v-model="patients.ocular_history.radio_allergies">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_allergies" value="no" v-model="patients.ocular_history.radio_allergies">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_allergies" value="family" v-model="patients.ocular_history.radio_allergies">
                                            <label for="one">Family</label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-3 col-xl-3">
                                            <label>Arthritis:</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_arthritis" value="yes" v-model="patients.ocular_history.radio_arthritis">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_arthritis" value="no" v-model="patients.ocular_history.radio_arthritis">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_arthritis" value="family" v-model="patients.ocular_history.radio_arthritis">
                                            <label for="one">Family</label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-3 col-xl-3">
                                            <label>Blood/Lymph:</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_blood_lymph" value="yes" v-model="patients.ocular_history.radio_blood_lymph">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_blood_lymph" value="no" v-model="patients.ocular_history.radio_blood_lymph">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_blood_lymph" value="family" v-model="patients.ocular_history.radio_blood_lymph">
                                            <label for="one">Family</label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-3 col-xl-3">
                                            <label>Cancer:</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_cancer" value="yes" v-model="patients.ocular_history.radio_cancer">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_cancer" value="no" v-model="patients.ocular_history.radio_cancer">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_cancer" value="family" v-model="patients.ocular_history.radio_cancer">
                                            <label for="one">Family</label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-3 col-xl-3">
                                            <label>Cholesterol:</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_cholesterol" value="yes" v-model="patients.ocular_history.radio_cholesterol">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_cholesterol" value="no" v-model="patients.ocular_history.radio_cholesterol">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_cholesterol" value="family" v-model="patients.ocular_history.radio_cholesterol">
                                            <label for="one">Family</label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-3 col-xl-3">
                                            <label><b>Diabetes:</b></label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_diabetes" value="yes" v-model="patients.ocular_history.radio_diabetes">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_diabetes" value="no" v-model="patients.ocular_history.radio_diabetes">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_diabetes" value="family" v-model="patients.ocular_history.radio_diabetes">
                                            <label for="one">Family</label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-3 col-xl-3">
                                            <label>Digestive/Gastric:</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_digestive_gastric" value="yes" v-model="patients.ocular_history.radio_digestive_gastric">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_digestive_gastric" value="no" v-model="patients.ocular_history.radio_digestive_gastric">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_digestive_gastric" value="family" v-model="patients.ocular_history.radio_digestive_gastric">
                                            <label for="one">Family</label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-3 col-xl-3">
                                            <label>Ears/Nose/Throat:</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_ears_nose_throat" value="yes" v-model="patients.ocular_history.radio_ears_nose_throat">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_ears_nose_throat" value="no" v-model="patients.ocular_history.radio_ears_nose_throat">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_ears_nose_throat" value="family" v-model="patients.ocular_history.radio_ears_nose_throat">
                                            <label for="one">Family</label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-3 col-xl-3">
                                            <label>Endocrine:</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_endocrine" value="yes" v-model="patients.ocular_history.radio_endocrine">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_endocrine" value="no" v-model="patients.ocular_history.radio_endocrine">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_endocrine" value="family" v-model="patients.ocular_history.radio_endocrine">
                                            <label for="one">Family</label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-3 col-xl-3">
                                            <label>Fatigue:</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_fatigue" value="yes" v-model="patients.ocular_history.radio_fatigue">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_fatigue" value="no" v-model="patients.ocular_history.radio_fatigue">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_fatigue" value="family" v-model="patients.ocular_history.radio_fatigue">
                                            <label for="one">Family</label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-3 col-xl-3">
                                            <label>Fevers:</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_fevers" value="yes" v-model="patients.ocular_history.radio_fevers">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_fevers" value="no" v-model="patients.ocular_history.radio_fevers">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_fevers" value="family" v-model="patients.ocular_history.radio_fevers">
                                            <label for="one">Family</label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-3 col-xl-3">
                                            <label><b>High Blood Pressure:</b></label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_high_blood_pressure" value="yes" v-model="patients.ocular_history.radio_high_blood_pressure">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_high_blood_pressure" value="no" v-model="patients.ocular_history.radio_high_blood_pressure">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_high_blood_pressure" value="family" v-model="patients.ocular_history.radio_high_blood_pressure">
                                            <label for="one">Family</label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-3 col-xl-3">
                                            <label>Immune:</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_immune" value="yes" v-model="patients.ocular_history.radio_immune">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_immune" value="no" v-model="patients.ocular_history.radio_immune">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_immune" value="family" v-model="patients.ocular_history.radio_immune">
                                            <label for="one">Family</label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-3 col-xl-3">
                                            <label>Integumentary (Skin Disease):</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_integumentary" value="yes" v-model="patients.ocular_history.radio_integumentary">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_integumentary" value="no" v-model="patients.ocular_history.radio_integumentary">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_integumentary" value="family" v-model="patients.ocular_history.radio_integumentary">
                                            <label for="one">Family</label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-3 col-xl-3">
                                            <label>Kidney:</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_kidney" value="yes" v-model="patients.ocular_history.radio_kidney">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_kidney" value="no" v-model="patients.ocular_history.radio_kidney">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_kidney" value="family" v-model="patients.ocular_history.radio_kidney">
                                            <label for="one">Family</label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-3 col-xl-3">
                                            <label>Muscle or Bone:</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_muscle_bone" value="yes" v-model="patients.ocular_history.radio_kidne">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_muscle_bone" value="no" v-model="patients.ocular_history.radio_muscle_bone">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_muscle_bone" value="family" v-model="patients.ocular_history.radio_muscle_bone">
                                            <label for="one">Family</label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-3 col-xl-3">
                                            <label>Neurological/Headaches</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_neurological_headaches" value="yes" v-model="patients.ocular_history.radio_neurological_headaches">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_neurological_headaches" value="no" v-model="patients.ocular_history.radio_neurological_headaches">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_neurological_headaches" value="family" v-model="patients.ocular_history.radio_neurological_headaches">
                                            <label for="one">Family</label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-3 col-xl-3">
                                            <label>Psychological</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_psychological" value="yes" v-model="patients.ocular_history.radio_psychological">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_psychological" value="no" v-model="patients.ocular_history.radio_psychological">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_psychological" value="family" v-model="patients.ocular_history.radio_psychological">
                                            <label for="one">Family</label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-3 col-xl-3">
                                            <label>Respiratory</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_respiratory" value="yes" v-model="patients.ocular_history.radio_respiratory">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_respiratory" value="no" v-model="patients.ocular_history.radio_respiratory">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_respiratory" value="family" v-model="patients.ocular_history.radio_respiratory">
                                            <label for="one">Family</label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-3 col-xl-3">
                                            <label>Sinus</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_sinus" value="yes" v-model="patients.ocular_history.radio_sinus">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_sinus" value="no" v-model="patients.ocular_history.radio_sinus">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_sinus" value="family" v-model="patients.ocular_history.radio_sinus">
                                            <label for="one">Family</label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-3 col-xl-3">
                                            <label>Stroke/Seizures</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_stroke_seizures" value="yes" v-model="patients.ocular_history.radio_stroke_seizures">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_stroke_seizures" value="no" v-model="patients.ocular_history.radio_stroke_seizures">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_stroke_seizures" value="family" v-model="patients.ocular_history.radio_stroke_seizures">
                                            <label for="one">Family</label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-3 col-xl-3">
                                            <label>Throat Infections</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_throat_infections" value="yes" v-model="patients.ocular_history.radio_throat_infections">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_throat_infections" value="no" v-model="patients.ocular_history.radio_throat_infections">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_throat_infections" value="family" v-model="patients.ocular_history.radio_throat_infections">
                                            <label for="one">Family</label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-3 col-xl-3">
                                            <label>Thyroid</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_thyroid" value="yes" v-model="patients.ocular_history.radio_thyroid">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_thyroid" value="no" v-model="patients.ocular_history.radio_thyroid">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_thyroid" value="family" v-model="patients.ocular_history.radio_thyroid">
                                            <label for="one">Family</label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <div class="col-lg-3 col-xl-3">
                                            <label>Unusual Weight Loss/Gain</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_unusual_weight_loss_gain" value="yes" v-model="patients.ocular_history.radio_unusual_weight_loss_gain">
                                            <label for="one">Yes</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_unusual_weight_loss_gain" value="no" v-model="patients.ocular_history.radio_unusual_weight_loss_gain">
                                            <label for="one">No</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <input type="radio" disabled="disabled" name="radio_unusual_weight_loss_gain" value="family" v-model="patients.ocular_history.radio_unusual_weight_loss_gain">
                                            <label for="one">Family</label>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted"><!-- Some help text goes here --></span>
                                </div>

                                <!--end::Section-->
                            </div>
                            <!--end: Wizard Step 4-->
                            <!--begin: Wizard Actions-->
                            <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                <div class="mr-2">
                                    <button class="btn btn-light-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
                                </div>
                                <div>
                                    <!-- <button class="btn btn-success font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit</button> -->
                                    <button class="btn btn-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-next">Next Step</button>
                                </div>
                            </div>
                            <!--end: Wizard Actions-->
                        </form>
                        <!--end: Wizard Form-->
                    </div>
                </div>
            </div>
        </div>
        <!--end: Wizard Bpdy-->
    </div>
@endsection

@section('plugin_css')
    <link href="{{ url('staff/assets/css/pages/wizard/wizard-4.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('plugin_script')
    <script src="{{ url('staff/assets/js/pages/custom/wizard/wizard-4.js') }}"></script>
@endsection
