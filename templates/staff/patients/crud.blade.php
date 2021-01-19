{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'patients/crud', 'data' => []])

@section('title', isset($model) ? __('staff/titles.patients_edit') : __('staff/titles.patients_create'))

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
                        @include ('staff.patients.partials.form')
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