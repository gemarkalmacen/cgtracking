{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'emvvalidationdetails/index', 'data' => ($data_object)]) 

@section('title', __('staff/titles.tools-emv_validations'))

@section('plugin_css')
    <link href="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.3') }}" rel="stylesheet" type="text/css" />
    <!-- <link href="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" /> -->
@endsection

@section('content')
<!-- 
        <div class="card card-custom">
            <div class="card-body">
                <div class="mb-7">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-xl-8">
                            <div class="row align-items-center">
                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="input-icon">
                                        <input v-model="emv_hh_id" type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                        <span>
                                            <i class="flaticon2-search-1 text-muted"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="d-flex align-items-center">
                                        <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                        <select class="form-control" id="kt_datatable_search_status">
                                            <option value="">All</option>
                                            <option value="1">Pending</option>
                                            <option value="2">Delivered</option>
                                            <option value="3">Canceled</option>
                                            <option value="4">Success</option>
                                            <option value="5">Info</option>
                                            <option value="6">Danger</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="d-flex align-items-center">
                                        <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                        <select class="form-control" id="kt_datatable_search_type">
                                            <option value="">All</option>
                                            <option value="1">Online</option>
                                            <option value="2">Retail</option>
                                            <option value="3">Direct</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                            <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                            <button @click="searchEmvdatabaseList()" type="button" class="btn btn-light-primary px-6 font-weight-bold">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <br />

    
        <br /> -->

        <div class="card card-custom">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">EMV Validation
                        <!-- <div class="text-muted pt-2 font-size-sm">Emv validation details</div></h3> -->
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Dropdown-->
                        <div class="dropdown dropdown-inline mr-2">
                            <a type="button" class="btn btn-light-primary px-6 font-weight-bold" href="{{ route('export_user') }}" >Export file</a>
                        </div>
                        <!--end::Dropdown-->
                        <!--begin::Button-->
                        <a href="#" class="btn btn-primary font-weight-bolder">
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
                        </span>New Record</a>
                        <!--end::Button-->
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
                                <th>Card</th>
                                <th>Grantee</th>
                                <th>Additional ID</th>
                                <th>Household no</th>
                                <th>First name</th>
                                <th>Middle name</th>
                                <th>Last name</th>
                                <th>Ext name</th>
                                <th>LBP no.</th>
                                <th>Set</th>   
                                <th>ID</th>            
                            </tr>
                        </thead>
                    </template>
                </datatable>
                <!--end: Datatable-->
                    <!--begin: Datatable-->
                    <!-- <table class="table table-separate table-head-custom table-checkable" id="validationTable">
                        <thead>
                            <tr>
                                <th style="width:75px;">Card</th>
                                <th style="width:10px;">Grantee</th>
                                <th style="width:150px;">Additional ID</th>
                                <th style="width:200px;">Household no.</th>
                                <th style="width:200px;">Full name</th>
                                <th>LBP no.</th>
                                <th>Set</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>4</td>
                                <td>ktosspell3@flickr.com</td>
                                <td>Krishnah Tosspell</td>
                                <td>Prosacco-Kessler</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td nowrap="nowrap"></td>
                            </tr>
                        </tbody>
                    </table> -->
                    <!--end: Datatable-->
                </div>
            </div>

        <br />

    <!-- </div> -->
    <!--end::Card-->
@endsection

@section('plugin_script')
    <script src="{{ url('staff/assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.3') }}"></script>
@endsection