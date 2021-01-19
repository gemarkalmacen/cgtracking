<div class="kt-portlet__body">

    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <!-- Delivery details -->

            <div class="form-group">
                <h5>{{ __('staff/forms.deliveries_details') }}</h5>
            </div>

            <div class="form-group">
                <label>{{ __('staff/forms.deliveries_dr_no') }} </label>
                <input
                    type="text"
                    class="form-control {{ $errors->has('dr_no') ? 'is-invalid' : ''}}"
                    name="dr_no"
                    id="dr_no"
                    value="{{ isset($model) ? $model->dr_no : old('dr_no') }}"
                >
                {!! $errors->first('dr_no', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <label>{{ __('staff/forms.deliveries_dr_date') }} </label>
                    <input
                        class="form-control {{ $errors->has('dr_date') ? 'is-invalid' : ''}}"
                        type="date"
                        name="dr_date"
                        id="dr_date"
                        value="{{ isset($model) ? date('Y-m-d', strtotime($model->dr_date)) : old('dr_date') }}"
                    >
                    {!! $errors->first('dr_date', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>

            <div class="form-group">
                <label>{{ __('staff/forms.deliveries_si_no') }} </label>
                <input
                    type="text"
                    class="form-control {{ $errors->has('si_no') ? 'is-invalid' : ''}}"
                    name="si_no"
                    id="si_no"
                    value="{{ isset($model) ? $model->si_no : old('si_no') }}"
                >
                {!! $errors->first('si_no', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <label>{{ __('staff/forms.deliveries_si_date') }} </label>
                    <input
                        class="form-control {{ $errors->has('si_date') ? 'is-invalid' : ''}}"
                        type="date"
                        name="si_date"
                        id="si_date"
                        value="{{ isset($model) ? date('Y-m-d', strtotime($model->si_date)) : old('si_date') }}"
                    >
                    {!! $errors->first('si_date', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>

            <div class="form-group">
                <label>{{ __('staff/forms.deliveries_supplier') }} </label>
                <a href="javascript:void(0)" id="btn_supplier_form" class="btn btn-icon btn-light-primary btn-circle mr-2 btn-xs" style="display:none;margin-left:10px;">
        					<i class="fas fa-plus"></i>
        		</a>
                <select2
                    name="supplier_id"
                    id="supplier_id"
                    initial="{{ old('supplier_id', $model->supplier_id ?? '') }}"
                    v-model="supplier.value"
                    :options.sync="supplier.options"
                    placeholder="{{ __('staff/forms.deliveries_select_supplier') }}"
                    error="{{ $errors->first('supplier_id') }}"
                >
                </select2>
                {!! $errors->first('supplier_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>

        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <!-- Agent -->

            <div class="form-group">
                <h5>{{ __('staff/forms.deliveries_agent_details') }}</h5>
            </div>

            <div class="form-group">
                <label>{{ __('staff/forms.deliveries_agent_fullname') }} </label>
                <input
                    type="text"
                    class="form-control {{ $errors->has('agent_fullname') ? 'is-invalid' : ''}}"
                    name="agent_fullname"
                    value="{{ isset($model) ? $model->agent_fullname : old('agent_fullname') }}"
                >
                {!! $errors->first('agent_fullname', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label>{{ __('staff/forms.deliveries_agent_contact_number') }} </label>
                <input
                    type="text"
                    class="form-control {{ $errors->has('agent_contact_number') ? 'is-invalid' : ''}}"
                    name="agent_contact_number"
                    value="{{ isset($model) ? $model->agent_contact_number : old('agent_contact_number') }}"
                >
                {!! $errors->first('agent_contact_number', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label>{{ __('staff/forms.deliveries_agent_address') }} </label>
                <textarea
                    class="form-control {{ $errors->has('agent_address') ? 'is-invalid' : ''}}"
                    name="agent_address"
                >{{ isset($model) ? $model->agent_address : old('agent_address') }}</textarea>
                {!! $errors->first('agent_address', '<div class="invalid-feedback">:message</div>') !!}
            </div>

        </div>
    </div>

    <div class="row" style="display:none" id="div_stock_details">
        <div class="col-md-12 col-sm-12 col-xs-12">

        <a href="javascript:void(0)" id="btnCreateStock" class="btn btn-primary btn-sm" style="margin-top: 40px; margin-bottom: 20px;">{{ __('staff/buttons.deliveries_create_stock') }}</a>

        <input type="hidden" name="selectedRowIdView" id="selectedRowIdView" value="">
        <input type="hidden" name="selectedRowIdEdit" id="selectedRowIdEdit" value="">
        <input type="hidden" name="selectedRowIdDelete" id="selectedRowIdDelete" value="">

            <!--begin: Datatable-->
            <table id="stocksTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>{{ __('staff/tables.deliveries_category') }}</th>
                        <th>{{ __('staff/tables.deliveries_sub_category') }}</th>
                        <th>{{ __('staff/tables.deliveries_stock_code') }}</th>
                        <th>{{ __('staff/tables.deliveries_brand_name') }}</th>
                        <th>{{ __('staff/tables.deliveries_quantity') }}</th>
                        <th>{{ __('staff/tables.deliveries_srp') }}</th>
                        <th>{{ __('staff/tables.deliveries_is_active') }}</th>
                        <th>{{ __('staff/tables.actions') }}</th>       
                    </tr>
                </thead>
            </table>
            <!--end: Datatable-->

        </div>
    </div>

     

</div>
<div class="kt-portlet__foot">
    <div class="kt-form__actions">
        <button type="submit" class="btn btn-primary" style="margin-top: 40px;">{{ __('staff/buttons.submit') }}</button>
        <button type="button"
                onclick="window.location.href='{{ route('staff.deliveries.index') }}'"
                class="btn btn-secondary"
                style="margin-top: 40px;">{{ __('staff/buttons.cancel') }}

        </button>
    </div>
</div>







<!-- stocks modal -->
<div id="stocksModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">      

        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">{{ __('staff/forms.deliveries_stocks_details') }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
             

            <!-- stocks form -->

            <input type="hidden" id="stock_id" name="stock_id" value="" v-model="stock_id"/>

            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">

                  <div class="row">
                      <div class="form-group col-md-12 col-sm-12 col-xs-12">
                          <label>{{ __('staff/forms.deliveries_stock_code') }} </label>
                          <input
                              class="form-control {{ $errors->has('stock_code') ? 'is-invalid' : ''}}"
                              type="text"
                              name="stock_code"
                              id="stock_code"
                              value="{{ old('stock_code'), (isset($model) ? $model->stock_code : '' ) }}"
                              v-model="stock_code"
                              readonly
                          >
                          {!! $errors->first('stock_code', '<div class="invalid-feedback">:message</div>') !!}
                      </div>
                  </div>
                  <!-- end row -->

                  <div class="row">
                      <div class="form-group col-md-12 col-sm-12 col-xs-12">
                          <label>{{ __('staff/forms.deliveries_brand_name') }} </label>
                          <input
                              class="form-control {{ $errors->has('brand_name') ? 'is-invalid' : ''}}"
                              type="text"
                              name="brand_name"
                              id="brand_name"
                              value="{{ old('brand_name'), (isset($model) ? $model->brand_name : '' ) }}"
                              v-model="brand_name"
                              required
                              @change = "generateStockCode(this)"
                          >
                          {!! $errors->first('brand_name', '<div class="invalid-feedback">:message</div>') !!}
                      </div>
                  </div>
                  <!-- end row -->

                  <div class="row">
                      <div class="form-group col-md-12 col-sm-12 col-xs-12">
                          <label>{{ __('staff/forms.deliveries_description') }} </label>
                          <textarea
                              class="form-control {{ $errors->has('description') ? 'is-invalid' : ''}}"
                              name="description"
                              id="description"
                              v-model="description"
                              required
                              @change = "generateStockCode(this)"
                          >
                              {{ old('description'), (isset($model) ? $model->description : '' ) }}
                          </textarea>
                          {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
                      </div>
                  </div>
                  <!-- end row -->

                  <div class="row">
                      <div class="form-group col-md-12 col-sm-12 col-xs-12">
                          <label>{{ __('staff/forms.deliveries_category') }} </label>

                          <select
                              class="col-md-12"
                              name="sub_category_id"
                              id="sub_category_id"
                              v-model="sub_category_id"
                          >                          
                          </select>
                          {!! $errors->first('sub_category_id', '<div class="invalid-feedback">:message</div>') !!}
                      </div>
                  </div>
                  <!-- end row -->

                  <div class="row">
                      <div class="form-group col-md-12 col-sm-12 col-xs-12">
                          <label>{{ __('staff/forms.deliveries_srp') }} </label>
                          <input
                              class="form-control {{ $errors->has('srp') ? 'is-invalid' : ''}}"
                              type="number"
                              name="srp"
                              id="srp"
                              value="{{ old('srp'), (isset($model) ? $model->srp : '' ) }}"
                              v-model="srp"
                              required
                          >
                          {!! $errors->first('srp', '<div class="invalid-feedback">:message</div>') !!}
                      </div>
                  </div>
                  <!-- end row -->

                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">

                  <div class="row">

                      <div class="form-group col-md-6 col-sm-12 col-xs-12">
                          <label>{{ __('staff/forms.deliveries_quantity') }} </label>
                          <input
                              class="form-control {{ $errors->has('quantity') ? 'is-invalid' : ''}}"
                              type="number"
                              name="quantity"
                              id="quantity"
                              value="{{ old('quantity'), (isset($model) ? $model->quantity : '' ) }}"
                              v-model="quantity"
                              required
                          >
                          {!! $errors->first('quantity', '<div class="invalid-feedback">:message</div>') !!}
                      </div>

                      <div class="form-group col-md-6 col-sm-12 col-xs-12">
                          <label>{{ __('staff/forms.deliveries_unit') }} </label>
                          <input
                              class="form-control {{ $errors->has('unit') ? 'is-invalid' : ''}}"
                              type="text"
                              name="unit"
                              id="unit"
                              value="{{ old('unit'), (isset($model) ? $model->unit : '' ) }}"
                              v-model="unit"
                          >
                          {!! $errors->first('unit', '<div class="invalid-feedback">:message</div>') !!}
                      </div>
                  </div>
                  <!-- end row -->

                  <div class="row">
                      <div class="form-group col-md-12 col-sm-12 col-xs-12">
                          <label>{{ __('staff/forms.deliveries_cost') }} </label>
                          <input
                              class="form-control {{ $errors->has('cost') ? 'is-invalid' : ''}}"
                              type="number"
                              name="cost"
                              id="cost"
                              value="{{ old('cost'), (isset($model) ? $model->cost : '' ) }}"
                              v-model="cost"
                          >
                          {!! $errors->first('cost', '<div class="invalid-feedback">:message</div>') !!}
                      </div>
                  </div>
                  <!-- end row -->

                  <div class="row">

                      <div class="form-group col-md-6 col-sm-12 col-xs-12">
                          <label>{{ __('staff/forms.deliveries_size') }} </label>
                          <input
                              class="form-control {{ $errors->has('size') ? 'is-invalid' : ''}}"
                              type="text"
                              name="size"
                              id="size"
                              value="{{ old('size'), (isset($model) ? $model->size : '' ) }}"
                              v-model="size"
                          >
                          {!! $errors->first('size', '<div class="invalid-feedback">:message</div>') !!}
                      </div>

                      <div class="form-group col-md-6 col-sm-12 col-xs-12">
                          <label>{{ __('staff/forms.deliveries_color') }} </label>
                          <input
                              class="form-control {{ $errors->has('color') ? 'is-invalid' : ''}}"
                              type="text"
                              name="color"
                              id="color"
                              value="{{ old('color'), (isset($model) ? $model->color : '' ) }}"
                              v-model="color"
                          >
                          {!! $errors->first('color', '<div class="invalid-feedback">:message</div>') !!}
                      </div>
                  </div>
                  <!-- end row -->

                  <div class="row">
                      <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="form-group row">
                              <label class="col-7 col-form-label">{{ __('staff/forms.deliveries_has_promo') }}</label>
                              <div class="col-5">
                                  <span class="switch switch-outline switch-icon switch-primary">
                                      <label>
                                          <input type="checkbox" name="has_promo" id="has_promo" v-model="has_promo">
                                          <span></span>
                                      </label>
                                  </span>
                              </div>
                          </div>
                      </div>
                      <div class="form-group col-md-6 col-sm-12 col-xs-12" v-if="has_promo">
                            <label>{{ __('staff/forms.deliveries_discount_percentage') }} </label>
                            <input
                                class="form-control {{ $errors->has('discount_percentage') ? 'is-invalid' : ''}}"
                                type="text"
                                name="discount_percentage"
                                id="discount_percentage"
                                value="{{ old('discount_percentage'), (isset($model) ? $model->discount_percentage : '' ) }}"
                                v-model="discount_percentage"
                            >
                            {!! $errors->first('discount_percentage', '<div class="invalid-feedback">:message</div>') !!}
                      </div>
                  </div>
                  <!-- end row -->                  

                  <div class="row">

                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label class="col-7 col-form-label">{{ __('staff/forms.deliveries_has_expiration') }}</label>
                                <div class="col-5">
                                    <span class="switch switch-outline switch-icon switch-primary">
                                        <label>
                                            <input type="checkbox" name="has_expiration"  id="has_expiration" v-model="has_expiration">
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-6 col-sm-6 col-xs-12" v-if="has_expiration">
                        <label>{{ __('staff/forms.deliveries_expiration_date') }} </label>
                        <input
                            class="form-control {{ $errors->has('expiration_date') ? 'is-invalid' : ''}}"
                            type="date"
                            name="expiration_date"
                            id="expiration_date"
                            value="{{ old('expiration_date'), (isset($model) ? $model->expiration_date : '' ) }}"
                            v-model="expiration_date"
                        >
                        {!! $errors->first('expiration_date', '<div class="invalid-feedback">:message</div>') !!}
                        </div>

                  </div>

                  <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label class="col-5 col-form-label">{{ __('staff/forms.deliveries_has_defective') }}</label>
                                <div class="col-7">
                                    <span class="switch switch-outline switch-icon switch-primary">
                                        <label>
                                            <input type="checkbox" name="has_defective" id="has_defective" v-model="has_defective">
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-8 col-xs-12">
                          <div class="form-group row" style="margin-bottom:0px; padding-bottom: 0px;">
                              <label class="col-6 col-form-label">{{ __('staff/forms.deliveries_is_active') }}</label>
                              <div class="col-6">
                                  <span class="switch switch-outline switch-icon switch-primary">
                                      <label>
                                          <input type="checkbox" name="is_active" id="is_active" v-model="is_active">
                                          <span></span>
                                      </label>
                                  </span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- end row -->

                </div>
            </div>
            <!-- end row -->

            <!-- end stocks form -->

        </div>

        <div class="modal-footer">
            <button id="btn_save_stock" type="button" class="btn btn-primary" @click="insertStock()">Save</button>
            <button id="btn_update_stock" type="button" class="btn btn-primary" @click="updateStock()">Update</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

    </div>
  </div>
</div>

<!-- stocks modal -->
<div id="supplierModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">      

        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">{{ __('staff/forms.deliveries_supplier_details') }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">   
            <div class="form-group">
                <label>{{ __('staff/forms.suppliers_code') }} </label>
                <input
                    type="text"
                    class="form-control"
                    name="supplier_code"         
                    id="supplier_code"
                    v-model="supplier_code"  
                >
            </div>
            <div class="form-group">
                <label>{{ __('staff/forms.suppliers_name') }} </label>
                <input
                    type="text"
                    class="form-control"
                    name="supplier_name"
                    id="supplier_name"
                    v-model="supplier_name"  
                >
            </div>
            <div class="form-group">
                <label>{{ __('staff/forms.suppliers_email') }} </label>
                <input
                    type="email"
                    class="form-control"
                    name="supplier_email"
                    id="supplier_email"
                    v-model="supplier_email" 
                >
            </div>
            <div class="form-group">
                <label>{{ __('staff/forms.suppliers_contact') }} </label>
                <input
                    type="text"
                    class="form-control"
                    name="supplier_contact"
                    id="supplier_contact"
                    v-model="supplier_contact" 
                >
            </div>
            <div class="form-group">
                <label>{{ __('staff/forms.suppliers_address') }} </label>
                <input
                    type="text"
                    class="form-control"
                    name="supplier_address"
                    id="supplier_address"
                    v-model="supplier_address"
                >
            </div>
            <div class="form-group">
                <label>{{ __('staff/forms.suppliers_tin') }} </label>
                <input
                    type="text"
                    class="form-control"
                    name="supplier_tin"
                    id="supplier_tin"
                    v-model="supplier_tin"
                >
            </div>


        </div>

        <div class="modal-footer">
            <button id="btn_save_supplier" type="button" class="btn btn-primary" @click="insertSupplier()">Save</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

    </div>
  </div>
</div>
