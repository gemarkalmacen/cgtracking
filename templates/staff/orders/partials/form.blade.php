<div class="pb-5" data-wizard-type="step-content" data-wizard-state="current" id="orders-wizard">
    <h3 class="mb-10 font-weight-bold text-dark">{{ __('staff/forms.patients_infomation') }}</h3>
    <div class="form-group row">
        <!-- <label>Address Line 1</label>
        <input type="text" class="form-control form-control-solid form-control-lg" name="address1" placeholder="Address Line 1" value="Address Line 1" />
        <span class="form-text text-muted">Please enter your Address.</span> -->
        <div class="col-lg-4">
            <!-- hidden -->
            <input type="hidden" id="edit_mode" name="edit_mode" value="{{ isset($edit) }}">
            <input type="hidden" id="order_details_id" name="order_details_id" value="{{ (isset($model)) ? json_encode($model->id) : json_encode(null) }}">   
            <input type="hidden" id="edit_patient_id" name="edit_patient_id" value="{{ (isset($model)) ? json_encode($model->patient_id) : json_encode(null) }}">  
            <!-- hidden -->

            <input type="hidden" id="typeahead_patient" name="typeahead_patient"/>

            <div class="form-group fv-plugins-icon-container">
                <label>{{ __('staff/forms.patients_firstname') }} </label>                
                <input
                    v-model="patient_info.firstname"
                    @change = "generateStockCode(this)"
                    type="text"
                    class="form-control typeahead form-control-solid form-control-lg {{ $errors->has('firstname') ? 'is-invalid' : ''}}"
                    name="firstname"
                    id="firstname"
                    value="{{ (isset($model) ? $model->firstname : old('firstname')) }}"
                    placeholder="{{ __('staff/forms.patients_firstname') }}"
                    autocomplete="off"
                >
                {!! $errors->first('firstname', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
            <div class="col-lg-4">
                <div class="form-group fv-plugins-icon-container">
                    <label>{{ __('staff/forms.patients_middlename') }} </label>
                    <input
                        v-model="patient_info.middlename"
                        type="text"
                        class="form-control form-control-solid form-control-lg {{ $errors->has('middlename') ? 'is-invalid' : ''}}"
                        name="middlename"
                        id="middlename"
                        value="{{ (isset($model) ? $model->middlename : old('middlename')) }}"
                        placeholder="{{ __('staff/forms.patients_middlename') }}"
                        autocomplete="off"
                    >
                    {!! $errors->first('patients_middlename', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group fv-plugins-icon-container">
                    <label>{{ __('staff/forms.patients_lastname') }} </label>
                    <input
                        v-model="patient_info.lastname"
                        @change = "generateStockCode(this)"
                        type="text"
                        class="form-control form-control-solid form-control-lg {{ $errors->has('lastname') ? 'is-invalid' : ''}}"
                        name="lastname"
                        id="lastname"
                        value="{{ old('lastname'), (isset($model) ? $model->lastname : '' ) }}"
                        placeholder="{{ __('staff/forms.patients_lastname') }}"
                        autocomplete="off"
                    >
                    {!! $errors->first('lastname', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group fv-plugins-icon-container">
                    <label>{{ __('staff/forms.patients_extension_name') }} </label>
                    <input
                        v-model="patient_info.extension_name"
                        type="text"
                        class="form-control form-control-solid form-control-lg {{ $errors->has('extension_name') ? 'is-invalid' : ''}}"
                        name="extension_name"
                        id="extension_name"
                        value="{{ old('extension_name'), (isset($model) ? $model->extension_name : '' ) }}"
                        placeholder="{{ __('staff/forms.patients_extension_name') }}"
                        autocomplete="off"
                    >
                    {!! $errors->first('extension_name', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group fv-plugins-icon-container">
                    <label>{{ __('staff/forms.patients_birthdate') }} </label>
                    <input
                        class="form-control {{ $errors->has('birthdate') ? 'is-invalid' : ''}}"
                        type="date"
                        name="birthdate"
                        id="birthdate"
                        value="{{ old('birthdate'), (isset($model) ? $model->birthdate : '' ) }}"
                        v-model="patient_info.birthdate"
                    >
                    {!! $errors->first('birthdate', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group fv-plugins-icon-container">
                    <label>{{ __('staff/forms.patients_sex') }} </label>
                    <select2
                        name="sex"
                        id="sex"
                        initial="{{ old('sex', $model->sex ?? '') }}"
                        v-model="patient_info.sex"
                        :options.sync="patient_sex.options"
                        placeholder="{{ __('staff/forms.patients_sex') }}"
                        error="{{ $errors->first('sex') }}"
                    >
                    </select2>
                    {!! $errors->first('sex', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="form-group fv-plugins-icon-container">
                <label>{{ __('staff/forms.patients_address_line1') }} </label>
                <input
                    v-model="patient_info.address_line1"
                    type="text"
                    class="form-control form-control-solid form-control-lg {{ $errors->has('address_line1') ? 'is-invalid' : ''}}"
                    name="address_line1"
                    id="address_line1"
                    value="{{ old('address_line1'), (isset($model) ? $model->address_line1 : '' ) }}"
                    placeholder="{{ __('staff/forms.patients_address_line1') }}"
                >
                {!! $errors->first('address_line1', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="col-xl-6">
            <div class="form-group fv-plugins-icon-container">
                <label>{{ __('staff/forms.patients_address_zipcode') }} </label>
                <input
                    v-model="patient_info.address_zipcode"
                    type="text"
                    class="form-control form-control-solid form-control-lg {{ $errors->has('address_zipcode') ? 'is-invalid' : ''}}"
                    name="address_zipcode"
                    id="address_zipcode"
                    value="{{ old('address_zipcode'), (isset($model) ? $model->address_zipcode : '' ) }}"
                    placeholder="{{ __('staff/forms.patients_address_zipcode') }}"
                >
                {!! $errors->first('address_zipcode', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="col-xl-6">
            <div class="form-group fv-plugins-icon-container">
                <label>{{ __('staff/forms.patients_address_municipality') }} </label>
                <input
                    v-model="patient_info.address_municipality"
                    type="text"
                    class="form-control form-control-solid form-control-lg {{ $errors->has('address_municipality') ? 'is-invalid' : ''}}"
                    name="address_municipality"
                    id="address_municipality"
                    value="{{ old('address_municipality'), (isset($model) ? $model->address_municipality : '' ) }}"
                    placeholder="{{ __('staff/forms.patients_address_municipality') }}"
                >
                {!! $errors->first('address_municipality', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="col-xl-6">
            <div class="form-group fv-plugins-icon-container">
                <label>{{ __('staff/forms.patients_address_province') }} </label>
                <input
                    v-model="patient_info.address_province"
                    type="text"
                    class="form-control form-control-solid form-control-lg {{ $errors->has('address_province') ? 'is-invalid' : ''}}"
                    name="address_province"
                    id="address_province"
                    value="{{ old('address_province'), (isset($model) ? $model->patients_address_province : '' ) }}"
                    placeholder="{{ __('staff/forms.patients_address_province') }}"
                >
                {!! $errors->first('address_province', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="col-xl-6">
            <div class="form-group fv-plugins-icon-container">
                <label>{{ __('staff/forms.patients_contact_number') }} </label>
                <input
                    v-model="patient_info.contact_number"
                    type="text"
                    class="form-control form-control-solid form-control-lg {{ $errors->has('contact_number') ? 'is-invalid' : ''}}"
                    name="contact_number"
                    id="contact_number"
                    value="{{ old('contact_number'), (isset($model) ? $model->contact_number : '' ) }}"
                    placeholder="{{ __('staff/forms.patients_contact_number') }}"
                >
                {!! $errors->first('contact_number', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
    </div>
</div>
<div class="pb-5" data-wizard-type="step-content">

    <!-- Tab -->

    <div class="row">
        <div class="col-md-12">

            <!-- Tab Menu -->

            <ul class="nav nav-tabs nav-bold nav-tabs-line">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tab_stocks">
                        <span class="nav-icon">
                            <i class="fas fa-dolly"></i>
                        </span>
                        <span class="nav-text">Stocks</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab_my_orders">
                        <span id="cart_count" style="display:none;" class="label label-danger mr-2"></span>
                        <span class="nav-icon">
                            <i class="fas fa-shopping-cart"></i>                            
                        </span>
                        <span class="nav-text">Cart</span>
                    </a>
                </li>                
            </ul>

            <!-- END Tab Menu -->

            <!-- Tab Content -->

            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab_stocks" role="tabpanel" aria-labelledby="tab_stocks" style="padding-top: 20px; padding-bottom: 20px;"> 
                    

                    <!-- Stocks -->

                    <h4 class="mb-10 font-weight-bold text-dark">{{ __('staff/forms.stocks_search') }}</h4>
                    <div class="form-group">
                        
                        <!--begin: Datatable-->
                        <table id="stocksTable" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>{{ __('staff/tables.actions') }}</th>                            
                                    <th>{{ __('staff/tables.stocks_description') }}</th>
                                    <th>{{ __('staff/tables.stocks_brand') }}</th>
                                    <th>{{ __('staff/tables.stocks_code') }}</th>
                                    <th>{{ __('staff/tables.stocks_color') }}</th>
                                    <!-- <th>{{ __('staff/tables.stocks_qty') }}</th> -->
                                    <th>{{ __('staff/tables.stocks_size') }}</th>
                                    <th>{{ __('staff/tables.stocks_srp') }}</th>
                                    <th>{{ __('staff/tables.stocks_promo') }}</th>
                                </tr>
                            </thead>
                        </table>
                        <!--end: Datatable-->

                    </div>

                    <!-- END Stocks -->

                </div>
                <div class="tab-pane fade" id="tab_my_orders" role="tabpanel" aria-labelledby="tab_my_orders" style="padding-top: 20px; padding-bottom: 20px;">
                    
                    <!-- My Orders -->

                    <div class="form-group">
                        <h3 class="mb-10 font-weight-bold text-dark">{{ __('staff/forms.orders_myorders') }}</h3>
                        <!-- <input type="hidden" id="stock_products" name="stock_products" value=""/> -->
                        <table id="tbl_myorders" class="table table-hover">
                            <thead>
                                <tr>
                                    <!-- <th scope="col" style="min-width: 10px">#</th> -->
                                    <th scope="col" style="min-width: 100px">{{ __('staff/tables.actions') }}</th>
                                    <th scope="col" style="min-width: 150px">{{ __('staff/tables.stocks_description') }}</th>
                                    <th scope="col" style="min-width: 100px">{{ __('staff/tables.stocks_brand') }}</th>
                                    <th scope="col" style="min-width: 100px">{{ __('staff/tables.stocks_code') }}</th>
                                    <th scope="col" style="min-width: 100px">{{ __('staff/tables.stocks_color') }}</th>
                                    <th scope="col" style="min-width: 100px">{{ __('staff/tables.stocks_size') }}</th>
                                    <th scope="col" style="min-width: 100px">{{ __('staff/tables.orders_srp') }}</th>
                                    <th scope="col" style="min-width: 100px">{{ __('staff/tables.stocks_promo') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr  v-for="(orders, index) in orders_list">
                                    <!-- <td scope="col">@{{ index + 1 }}</td> -->
                                    <td scope="col">
                                        <button type="button" class="btn btn-danger btn-sm mr-2" @click="deleteSpecificOrder(index)"><i class="far fa-trash-alt"></i> {{ __('staff/forms.orders_remove') }} </button>                        
                                    </td>
                                    <td scope="col">@{{ orders.description }}</td>
                                    <td scope="col">@{{ orders.brand_name }}</td>
                                    <td scope="col">@{{ orders.stock_code }}</td>
                                    <td scope="col">@{{ orders.color }}</td>
                                    <!-- <td scope="col">@{{ orders.qty }}</td> -->
                                    <td scope="col">@{{ orders.size }}</td>
                                    <td scope="col">@{{ orders.srp }}</td>
                                    <td scope="col"><span v-if="orders.discount_percentage != 0" class="label label-danger label-pill label-inline mr-2"> - @{{ orders.discount_percentage }} %</span></td>
                                </tr>
                                <!-- total -->
                                <tr>
                                    <td scope="col"></td>
                                    <td scope="col"></td>
                                    <td scope="col"></td>
                                    <td scope="col"></td>
                                    <td scope="col"></td>
                                    <td scope="col" style="color: red; "><b>{{ __('staff/tables.orders_total_amount') }}</b></td>
                                    <td scope="col">@{{ autoComputeTotalAmount }}</td>
                                    <td scope="col"></td>
                                    <!-- hidden inputs -->
                                    <!-- <td scope="col">
                                        <input
                                            v-model="set_discount_amount"
                                            type="text"
                                            class="form-control form-control-solid form-control-lg {{ $errors->has('stocks_id') ? 'is-invalid' : ''}}"
                                            name="stocks_id"
                                        >
                                    </td> -->
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td scope="col"></td>
                                    <td scope="col"></td>
                                    <td scope="col"></td>
                                    <td scope="col"></td>
                                    <td scope="col"></td>
                                    <td scope="col"></td>
                                    <td scope="col"></td>
                                    <td scope="col"></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <!-- END My Orders -->

                </div>                
            </div>

            <!-- END Tab Content -->

        </div>
    </div>

    <!-- END Tab -->   
    
</div>

<div class="pb-5" data-wizard-type="step-content">
    <!-- <h4 class="mb-10 font-weight-bold text-dark">{{ __('staff/forms.payments_details') }}</h4> -->

    <div class="card card-custom wave wave-animate-slower mb-8 mb-lg-0">
        <div class="card-body">
            <div class="d-flex align-items-center p-5">
                <div class="mr-8">
                    <span class="svg-icon svg-icon-success svg-icon-9x">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Settings.svg-->                        
                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Shopping\Money.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M2,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,17 C22,17.5522847 21.5522847,18 21,18 L2,18 C1.44771525,18 1,17.5522847 1,17 L1,7 C1,6.44771525 1.44771525,6 2,6 Z M11.5,16 C13.709139,16 15.5,14.209139 15.5,12 C15.5,9.790861 13.709139,8 11.5,8 C9.290861,8 7.5,9.790861 7.5,12 C7.5,14.209139 9.290861,16 11.5,16 Z" fill="#000000" opacity="0.3" transform="translate(11.500000, 12.000000) rotate(-345.000000) translate(-11.500000, -12.000000) "/>
                                <path d="M2,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,17 C22,17.5522847 21.5522847,18 21,18 L2,18 C1.44771525,18 1,17.5522847 1,17 L1,7 C1,6.44771525 1.44771525,6 2,6 Z M11.5,16 C13.709139,16 15.5,14.209139 15.5,12 C15.5,9.790861 13.709139,8 11.5,8 C9.290861,8 7.5,9.790861 7.5,12 C7.5,14.209139 9.290861,16 11.5,16 Z M11.5,14 C12.6045695,14 13.5,13.1045695 13.5,12 C13.5,10.8954305 12.6045695,10 11.5,10 C10.3954305,10 9.5,10.8954305 9.5,12 C9.5,13.1045695 10.3954305,14 11.5,14 Z" fill="#000000"/>
                            </g>
                        </svg><!--end::Svg Icon--></span>
                        <!--end::Svg Icon-->
                    </span>
                </div>
                <div class="d-flex flex-column">
                    <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">{{ __('staff/forms.payments_details') }}</a>
                    <div class="text-dark-75">
                        
                        <!-- Payment details -->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group fv-plugins-icon-container">
                                    <label>{{ __('staff/forms.orders_payment_type') }} </label>
                                    <select2
                                        name="payment_type"
                                        initial="{{ old('payment_type', $model->payment_type ?? 'cash') }}"
                                        v-model="order_details.payment_type"
                                        :options.sync="payment_type.options"
                                        placeholder="{{ __('staff/forms.orders_select_payment_type') }}"
                                        error="{{ $errors->first('payment_type') }}"
                                    >
                                    </select2>
                                    {!! $errors->first('payment_type', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                            </div>
                            <div class="col-xl-12" v-if="order_details.payment_type != 'cash'">
                                <div class="form-group fv-plugins-icon-container">
                                    <label>{{ __('staff/forms.orders_payment_term') }} </label>
                                    <select2
                                        name="payment_term"
                                        initial="{{ old('payment_term', $model->payment_term ?? '') }}"
                                        v-model="order_details.payment_term"
                                        :options.sync="payment_term.options"
                                        placeholder="{{ __('staff/forms.orders_select_payment_type') }}"
                                        error="{{ $errors->first('payment_term') }}"
                                    >
                                    </select2>
                                    {!! $errors->first('payment_term', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                            </div>
                            <div class="col-xl-12" v-if="order_details.payment_type != 'cash'">
                                <div class="form-group fv-plugins-icon-container">
                                    <label>{{ __('staff/forms.orders_payment_term_count') }} </label>
                                    <input
                                        v-model="order_details.payment_term_count"
                                        type="text"
                                        class="form-control form-control-solid form-control-lg {{ $errors->has('payment_term_count') ? 'is-invalid' : ''}}"
                                        name="payment_term_count"
                                        value="{{ old('payment_term_count'), (isset($model) ? $model->payment_term_count : '' ) }}"
                                        placeholder="{{ __('staff/forms.orders_search') }}"
                                    >
                                    {!! $errors->first('payment_term_count', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                            </div>
                        </div>

                        <!-- END Payment details -->

                    </div>
                </div>
            </div>
        </div>
    </div>    


    <!-- Billing -->

    <!-- <h4 class="mb-10 font-weight-bold text-dark">{{ __('staff/forms.payments_bills') }}</h4>

    <table id="orders_billing" class="table table-hover responsive">
        <thead>
            <tr>
                <th></th>
                <th>{{ __('staff/tables.stocks_description') }}</th>
                <th>{{ __('staff/tables.stocks_brand') }}</th>
                <th>{{ __('staff/tables.stocks_code') }}</th>
                <th>{{ __('staff/tables.stocks_color') }}</th>
                <th>{{ __('staff/tables.stocks_size') }}</th>
                <th>{{ __('staff/tables.stocks_promo') }}</th>
                <th>{{ __('staff/tables.orders_srp') }}</th>
                <th>{{ __('staff/tables.stocks_discount') }}</th>
                <th>{{ __('staff/tables.orders_subtotal') }}</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table> -->

    <div class="card card-custom" style="padding-bottom: 20px;">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon">
                    <i class="flaticon2-line-chart text-primary"></i>
                </span>
                <h3 class="card-label">{{ __('staff/forms.payments_bills') }}</h3>
            </div>
        </div>
        <div class="card-body">
            
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" style="min-width: 10px"></th>
                        <th scope="col" style="min-width: 150px">{{ __('staff/tables.stocks_description') }}</th>
                        <th scope="col" style="min-width: 100px">{{ __('staff/tables.stocks_brand') }}</th>
                        <th scope="col" style="min-width: 100px">{{ __('staff/tables.stocks_code') }}</th>
                        <th scope="col" style="min-width: 100px">{{ __('staff/tables.stocks_color') }}</th>
                        <th scope="col" style="min-width: 100px">{{ __('staff/tables.stocks_size') }}</th>
                        <th scope="col" style="min-width: 100px">{{ __('staff/tables.stocks_promo') }}</th>
                        <th scope="col" style="min-width: 100px">{{ __('staff/tables.orders_srp') }}</th>
                        <th scope="col" style="min-width: 100px">{{ __('staff/tables.stocks_discount') }}</th>
                        <th scope="col" style="min-width: 100px">{{ __('staff/tables.orders_subtotal') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr  v-for="(orders, index) in orders_list">
                        <td scope="col">@{{ index + 1 }}</td>
                        <td scope="col">@{{ orders.description }}</td>
                        <td scope="col">@{{ orders.brand_name }}</td>
                        <td scope="col">@{{ orders.stock_code }}</td>
                        <td scope="col">@{{ orders.color }}</td>
                        <!-- <td scope="col">@{{ orders.qty }}</td> -->
                        <td scope="col">@{{ orders.size }}</td>
                        <td scope="col"><span v-if="orders.discount_percentage != 0" class="label label-danger label-pill label-inline mr-2"> - @{{ orders.discount_percentage }} %</span></td>
                        <td scope="col">@{{ orders.srp }}</td>
                        <td scope="col">
                            <input
                                v-model="orders.discount_amount"
                                v-on:input="discountPerItem(index)"
                                type="number"
                                class="form-control form-control-solid form-control-lg {{ $errors->has('discount_amount') ? 'is-invalid' : ''}}"
                                name="discount_amount"
                                placeholder="{{ __('staff/forms.orders_item_discount_amount') }}"
                            >
                            {!! $errors->first('discount_amount', '<div class="invalid-feedback">:message</div>') !!}
                        </td>
                        <td scope="col">@{{ orders.final_price }}</td>
                    </tr>
                    

                    <tr>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col" colspan=2>
                            <!-- <div class="form-group fv-plugins-icon-container"> -->
                                <!-- <label>{{ __('staff/forms.orders_select_discount') }} </label> -->
                                <select2
                                    name="discount_id"
                                    initial="{{ old('discount_id', $model->text ?? '') }}"
                                    v-model="order_details.discount_id"
                                    :options.sync="discounts_list.options"
                                    placeholder="{{ __('staff/forms.orders_select_discount') }}"
                                    error="{{ $errors->first('discount_id') }}"
                                >
                                </select2>
                                {!! $errors->first('discount_id', '<div class="invalid-feedback">:message</div>') !!}
                            <!-- </div> -->
                        </td>
                    </tr>
                    
                    <!-- total -->
                    <tr>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col" style="color: red; "><b>{{ __('staff/tables.orders_total_amount') }}</b></td>
                        <td scope="col">@{{ autoComputeTotalAmount }}</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                    </tr>
                </tfoot>
            </table>

            <!-- <div class="col-lg-4">
                <div class="form-group fv-plugins-icon-container">
                    <label>{{ __('staff/forms.orders_payable_amount') }} </label>
                    <input
                        v-model="order_details.total_amount_paid"
                        type="text"
                        class="form-control form-control-solid form-control-lg {{ $errors->has('total_amount') ? 'is-invalid' : ''}}"
                        name="total_amount"
                        value="{{ old('total_amount'), (isset($model) ? $model->total_amount : '' ) }}"
                        placeholder="{{ __('staff/forms.orders_payable_amount') }}"
                        readonly
                    >
                    {!! $errors->first('total_amount', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div> -->

        </div>
    </div>        

    <!-- END Billing -->

</div>
<!-- <div class="pb-5" data-wizard-type="step-content">
    <h4 class="mb-10 font-weight-bold text-dark">{{ __('staff/forms.payments_bills') }}</h4>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col" style="min-width: 10px"></th>
                <th scope="col" style="min-width: 150px">{{ __('staff/tables.stocks_description') }}</th>
                <th scope="col" style="min-width: 100px">{{ __('staff/tables.stocks_brand') }}</th>
                <th scope="col" style="min-width: 100px">{{ __('staff/tables.stocks_code') }}</th>
                <th scope="col" style="min-width: 100px">{{ __('staff/tables.stocks_color') }}</th>
                <th scope="col" style="min-width: 100px">{{ __('staff/tables.stocks_size') }}</th>
                <th scope="col" style="min-width: 100px">{{ __('staff/tables.stocks_promo') }}</th>
                <th scope="col" style="min-width: 100px">{{ __('staff/tables.orders_srp') }}</th>
                <th scope="col" style="min-width: 100px">{{ __('staff/tables.stocks_discount') }}</th>
                <th scope="col" style="min-width: 100px">{{ __('staff/tables.orders_subtotal') }}</th>
            </tr>
        </thead>
        <tbody>
            <tr  v-for="(orders, index) in orders_list">
                <td scope="col">@{{ index + 1 }}</td>
                <td scope="col">@{{ orders.description }}</td>
                <td scope="col">@{{ orders.brand_name }}</td>
                <td scope="col">@{{ orders.stock_code }}</td>
                <td scope="col">@{{ orders.color }}</td>
                <!-- <td scope="col">@{{ orders.qty }}</td> -->
                <!-- <td scope="col">@{{ orders.size }}</td>
                <td scope="col">@{{ orders.discount_percentage }}</td>
                <td scope="col">@{{ orders.srp }}</td>
                <td scope="col">
                    <input
                        v-model="orders.discount_amount"
                        v-on:input="discountPerItem(index)"
                        type="number"
                        class="form-control form-control-solid form-control-lg {{ $errors->has('discount_amount') ? 'is-invalid' : ''}}"
                        name="discount_amount"
                        value="{{ old('discount_amount'), (isset($model) ? $model->discount_amount : '' ) }}"
                        placeholder="{{ __('staff/forms.orders_item_discount_amount') }}"
                    >
                    {!! $errors->first('discount_amount', '<div class="invalid-feedback">:message</div>') !!}
                </td>
                <td scope="col">@{{ orders.final_price }}</td>
            </tr>
            

            <tr>
                <td scope="col"></td>
                <td scope="col"></td>
                <td scope="col"></td>
                <td scope="col"></td>
                <td scope="col"></td>
                <td scope="col"></td>
                <td scope="col"></td>
                <td scope="col"></td>
                <td scope="col" colspan=2> -->
                    <!-- <div class="form-group fv-plugins-icon-container"> -->
                        <!-- <label>{{ __('staff/forms.orders_select_discount') }} </label> -->
                        <!-- <select2
                            name="discount_id"
                            initial="{{ old('discount_id', $model->text ?? '') }}"
                            v-model="order_details.discount_id"
                            :options.sync="discounts_list.options"
                            placeholder="{{ __('staff/forms.orders_select_discount') }}"
                            error="{{ $errors->first('discount_id') }}"
                        >
                        </select2>
                        {!! $errors->first('discount_id', '<div class="invalid-feedback">:message</div>') !!} -->
                    <!-- </div> -->
                <!-- </td>
            </tr> -->
            
            <!-- total -->
            <!-- <tr>
                <td scope="col"></td>
                <td scope="col"></td>
                <td scope="col"></td>
                <td scope="col"></td>
                <td scope="col"></td>
                <td scope="col"></td>
                <td scope="col"></td>
                <td scope="col"></td>
                <td scope="col" style="color: red; "><b>{{ __('staff/tables.orders_total_amount') }}</b></td>
                <td scope="col">@{{ autoComputeTotalAmount }}</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td scope="col"></td>
                <td scope="col"></td>
                <td scope="col"></td>
                <td scope="col"></td>
                <td scope="col"></td>
                <td scope="col"></td>
                <td scope="col"></td>
                <td scope="col"></td>
                <td scope="col"></td>
                <td scope="col"></td>
            </tr>
        </tfoot>
    </table> -->

    <!-- <div class="col-lg-4">
        <div class="form-group fv-plugins-icon-container">
            <label>{{ __('staff/forms.orders_payable_amount') }} </label>
            <input
                v-model="order_details.total_amount_paid"
                type="text"
                class="form-control form-control-solid form-control-lg {{ $errors->has('total_amount') ? 'is-invalid' : ''}}"
                name="total_amount"
                value="{{ old('total_amount'), (isset($model) ? $model->total_amount : '' ) }}"
                placeholder="{{ __('staff/forms.orders_payable_amount') }}"
                readonly
            >
            {!! $errors->first('total_amount', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>  -->

    <!-- begin: Invoice-->
    <!-- begin: Invoice header-->
    <!-- <div class="row justify-content-center bgi-size-cover bgi-no-repeat py-8 px-8 py-md-27 px-md-0" style="background-image: url( {{ url('staff/assets/media/bg/bg-6.jpg') }} )">
        <div class="col-md-9">
            <div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                <h1 class="display-4 text-white font-weight-boldest mb-10">INVOICE</h1>
                <div class="d-flex flex-column align-items-md-end px-0">
                    <a href="#" class="mb-5">
                        <img src="{{ url('staff/assets/media/logos/logo-light.png') }}" alt="" />
                    </a>
                    <span class="text-white d-flex flex-column align-items-md-end opacity-70">
                        <span>Cecilia Chapman, 711-2880 Nulla St, Mankato</span>
                        <span>Mississippi 96522</span>
                    </span>
                </div>
            </div>
            <div class="border-bottom w-100 opacity-20"></div>
            <div class="d-flex justify-content-between text-white pt-6">
                <div class="d-flex flex-column flex-root">
                    <span class="font-weight-bolde mb-2r">DATA</span>
                    <span class="opacity-70">{{ Carbon\Carbon::now()->toDateTimeString() }}</span>
                </div>
                <div class="d-flex flex-column flex-root">
                    <span class="font-weight-bolder mb-2">INVOICE NO.</span>
                    <span class="opacity-70">GS 000014</span>
                </div>
                <div class="d-flex flex-column flex-root">
                    <span class="font-weight-bolder mb-2">INVOICE TO.</span>
                    <span class="opacity-70">Iris Watson, P.O. Box 283 8562 Fusce RD.
                    <br />Fredrick Nebraska 20620</span>
                </div>
            </div>
        </div>
    </div> -->
    <!-- end: Invoice header-->
    <!-- begin: Invoice body-->
    <!-- <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
        <div class="col-md-9">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="pl-0 font-weight-bold text-muted text-uppercase">Description</th>
                            <th class="text-right font-weight-bold text-muted text-uppercase">Hours</th>
                            <th class="text-right font-weight-bold text-muted text-uppercase">Rate</th>
                            <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="font-weight-boldest font-size-lg">
                            <td class="pl-0 pt-7">Creative Design</td>
                            <td class="text-right pt-7">80</td>
                            <td class="text-right pt-7">$40.00</td>
                            <td class="text-danger pr-0 pt-7 text-right">$3200.00</td>
                        </tr>
                        <tr class="font-weight-boldest border-bottom-0 font-size-lg">
                            <td class="border-top-0 pl-0 py-4">Front-End Development</td>
                            <td class="border-top-0 text-right py-4">120</td>
                            <td class="border-top-0 text-right py-4">$40.00</td>
                            <td class="text-danger border-top-0 pr-0 py-4 text-right">$4800.00</td>
                        </tr>
                        <tr class="font-weight-boldest border-bottom-0 font-size-lg">
                            <td class="border-top-0 pl-0 py-4">Back-End Development</td>
                            <td class="border-top-0 text-right py-4">210</td>
                            <td class="border-top-0 text-right py-4">$60.00</td>
                            <td class="text-danger border-top-0 pr-0 py-4 text-right">$12600.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> -->
    <!-- end: Invoice body-->
    <!-- begin: Invoice footer-->
    <!-- <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0">
        <div class="col-md-9">
            <div class="d-flex justify-content-between flex-column flex-md-row font-size-lg">
                <div class="d-flex flex-column mb-10 mb-md-0">
                    <div class="font-weight-bolder font-size-lg mb-3">BANK TRANSFER</div>
                    <div class="d-flex justify-content-between mb-3">
                        <span class="mr-15 font-weight-bold">Account Name:</span>
                        <span class="text-right">Barclays UK</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <span class="mr-15 font-weight-bold">Account Number:</span>
                        <span class="text-right">1234567890934</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span class="mr-15 font-weight-bold">Code:</span>
                        <span class="text-right">BARC0032UK</span>
                    </div>
                </div>
                <div class="d-flex flex-column text-md-right">
                    <span class="font-size-lg font-weight-bolder mb-1">TOTAL AMOUNT</span>
                    <span class="font-size-h2 font-weight-boldest text-danger mb-1">$20.600.00</span>
                    <span>Taxes Included</span>
                </div>
            </div>
        </div>
    </div> -->
    <!-- end: Invoice footer-->
    <!-- begin: Invoice action-->
    <!-- <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
        <div class="col-md-9">
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-light-primary font-weight-bold" onclick="window.print();">Download Invoice</button>
                <button type="button" class="btn btn-primary font-weight-bold" onclick="window.print();">Print Invoice</button>
            </div>
        </div>
    </div> -->
    <!-- end: Invoice action-->
    <!-- end: Invoice-->
<!-- </div> -->

<div class="d-flex justify-content-between border-top mt-5 pt-10">
    <div class="mr-2">
        <button class="btn btn-light-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
    </div>
    <div>
        @if( (isset($model)) )
            <button id="btnUpdatesOrders" class="btn btn-success font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-submit">Update</button>
        @else
            <button id="btnCreateOrders" class="btn btn-success font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-submit">Create</button>
        @endif
        
        <button class="btn btn-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-next">Next Step</button>
    </div>
</div>