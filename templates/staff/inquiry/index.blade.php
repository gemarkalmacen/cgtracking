{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'uploadhistory/index', 'data' => []]) 

@section('title', __('staff/titles.reference-uploadhistory'))

@section('plugin_css')
    <link href="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.3') }}" rel="stylesheet" type="text/css" />
    <!-- <link href="{{ url('staff/assets/vendors/general/tether/dist/css/tether.css') }}" rel="stylesheet" type="text/css" /> -->
@endsection

@section('content')
    <!-- <div class="card card-custom">
        <div class="row">
            
        </div>
    </div> -->

    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										Edit Contact
									</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total">
											Sandra Stone </span>
									</div>
								</div>
								<div class="kt-subheader__toolbar">
									<a href="#" class="btn btn-default btn-bold">
										Back </a>
									<div class="btn-group">
										<button type="button" class="btn btn-brand btn-bold">
											Save Changes </button>
										<button type="button" class="btn btn-brand btn-bold dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										</button>
										<div class="dropdown-menu dropdown-menu-right">
											<ul class="kt-nav">
												<li class="kt-nav__item">
													<a href="#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-writing"></i>
														<span class="kt-nav__link-text">Save &amp; continue</span>
													</a>
												</li>
												<li class="kt-nav__item">
													<a href="#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-medical-records"></i>
														<span class="kt-nav__link-text">Save &amp; add new</span>
													</a>
												</li>
												<li class="kt-nav__item">
													<a href="#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-hourglass-1"></i>
														<span class="kt-nav__link-text">Save &amp; exit</span>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

    <!--begin::Card-->
    <!-- <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon">
                    <i class="fas fa-layer-group"></i>
                </span>
                <h3 class="card-label">{{ __('staff/titles.reference-uploadhistory') }}</h3>
            </div>            
            <div class="card-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            
            <datatable
                v-if="config"
                :options="config.options"
                :url="config.url"
                :notifications="config.notifications"

                style="width: 100%"
            >
                <template>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th style="width: 1000px; ">{{ __('staff/tables.upload_history_system_file_name') }}</th>
                            <th>{{ __('staff/tables.upload_history_table_source') }}</th>
                            <th>{{ __('staff/tables.upload_history_old_file_name') }}</th>
                            <th>{{ __('staff/tables.upload_history_uploaded_date') }}</th>
                            <th>{{ __('staff/tables.upload_history_username') }}</th>
                            <th>{{ __('staff/tables.upload_history_uploaded_by') }}</th>
                        </tr>
                    </thead>
                </template>
            </datatable>
        </div>
    </div> -->
    <!--end::Card-->
@endsection

@section('plugin_script')
    <script src="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.3') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <script src="{{ url('staff/assets/js/demo1/pages/dashboard.js') }}" type="text/javascript"></script>
@endsection