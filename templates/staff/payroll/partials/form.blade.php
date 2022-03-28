<div class="kt-portlet__body">

    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <!-- Delivery details -->

            <div class="form-group">
                <h5>{{ __('staff/forms.stocks_details') }}</h5>
            </div>

            <div class="form-group">
                <label>{{ __('staff/forms.stocks_delivery_type') }} </label>
                <select2
                    name="delivery_type"
                    id = "delivery_type"
                    initial="{{ old('delivery_type', $model->delivery_type ?? '') }}"
                    v-model="delivery_type.value"
                    :options.sync="delivery_type.options"
                    placeholder="{{ __('staff/forms.stocks_select_delivery_type') }}"
                    error="{{ $errors->first('delivery_type') }}"
                >
                </select2>
                {!! $errors->first('delivery_type', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <label>{{ __('staff/forms.stocks_dr_si_date') }} </label>
                    <input
                        class="form-control {{ $errors->has('dr_si_date') ? 'is-invalid' : ''}}"
                        type="date"
                        name="dr_si_date"
                        id="dr_si_date"
                        value="{{ isset($model) ? date('Y-m-d', strtotime($model->dr_si_date)) : old('dr_si_date') }}"
                    >
                    {!! $errors->first('dr_si_date', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('staff/forms.stocks_dr_si_no') }} </label>
                <input
                    type="text"
                    class="form-control {{ $errors->has('dr_si_no') ? 'is-invalid' : ''}}"
                    name="dr_si_no"
                    id="dr_si_no"
                    value="{{ isset($model) ? $model->dr_si_no : old('dr_si_no') }}"
                >
                {!! $errors->first('dr_si_no', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                <label>{{ __('staff/forms.stocks_supplier') }} </label>
                <a href="#" class="btn btn-icon btn-light-primary btn-circle mr-2 btn-xs" style="margin-left:10px;">
        					<i class="fas fa-plus"></i>
        				</a>
                <select2
                    name="supplier_id"
                    id="supplier_id"
                    initial="{{ old('supplier_id', $model->supplier_id ?? '') }}"
                    v-model="supplier.value"
                    :options.sync="supplier.options"
                    placeholder="{{ __('staff/forms.stocks_select_supplier') }}"
                    error="{{ $errors->first('supplier_id') }}"
                >
                </select2>
                {!! $errors->first('supplier_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label>{{ __('staff/forms.stocks_details_amount') }} </label>
                <input
                    type="text"
                    class="form-control {{ $errors->has('amount') ? 'is-invalid' : ''}}"
                    name="amount"
                    v-model="amount"
                    value="{{ isset($model) ? $model->amount : old('amount') }}"
                    readonly
                >
                {!! $errors->first('amount', '<div class="invalid-feedback">:message</div>') !!}
            </div>

        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <!-- Agent -->

            <div class="form-group">
                <h5>{{ __('staff/forms.stocks_agent_details') }}</h5>
            </div>

            <div class="form-group">
                <label>{{ __('staff/forms.stocks_agent_fullname') }} </label>
                <input
                    type="text"
                    class="form-control {{ $errors->has('agent_fullname') ? 'is-invalid' : ''}}"
                    name="agent_fullname"
                    value="{{ isset($model) ? $model->agent_fullname : old('agent_fullname') }}"
                >
                {!! $errors->first('agent_fullname', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label>{{ __('staff/forms.stocks_agent_contact_number') }} </label>
                <input
                    type="text"
                    class="form-control {{ $errors->has('agent_contact_number') ? 'is-invalid' : ''}}"
                    name="agent_contact_number"
                    value="{{ isset($model) ? $model->agent_contact_number : old('agent_contact_number') }}"
                >
                {!! $errors->first('agent_contact_number', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label>{{ __('staff/forms.stocks_agent_address') }} </label>
                <textarea
                    class="form-control {{ $errors->has('agent_address') ? 'is-invalid' : ''}}"
                    name="agent_address"
                >{{ isset($model) ? $model->agent_address : old('agent_address') }}</textarea>
                {!! $errors->first('agent_address', '<div class="invalid-feedback">:message</div>') !!}
            </div>

        </div>
    </div>



    <div class="form-group" style="padding-top: 20px;">
        <h5>{{ __('staff/forms.stocks_product_details') }}</h5>
    </div>

    <input type="hidden" id="stock_products" name="stock_products" value=""/>

    <div class="card card-custom card-border" style="margin-bottom: 20px;" v-for="(product, index) in stock_products_list">

        <div class="card-header">
            <div class="card-title">
                <h2 class="card-label">Product</h2>
                <span class="label pulse pulse-success">@{{ index + 1 }} <span class="pulse-ring"></span></span>
            </div>
            <div class="card-toolbar">
                <a href="javascript:void(0)" class="btn btn-sm btn-light-danger font-weight-bold" @click="removeProduct(index)">
                          <i class="fas fa-eraser"></i>Remove
                </a>
            </div>
        </div>

  			<div class="card-body">

            <input type="hidden" id="stock_id" name="stock_id" value="" v-model="product.stock_id"/>

            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">

                  <div class="row">
                      <div class="form-group col-md-12 col-sm-12 col-xs-12">
                          <label>{{ __('staff/forms.stocks_stock_code') }} </label>
                          <input
                              class="form-control {{ $errors->has('stock_code') ? 'is-invalid' : ''}}"
                              type="text"
                              name="stock_code"
                              v-bind:id="'stock_code_' + index"
                              value="{{ old('stock_code'), (isset($model) ? $model->stock_code : '' ) }}"
                              v-model="product.stock_code"
                              readonly
                          >
                          {!! $errors->first('stock_code', '<div class="invalid-feedback">:message</div>') !!}
                      </div>
                  </div>
                  <!-- end row -->

                  <div class="row">
                      <div class="form-group col-md-12 col-sm-12 col-xs-12">
                          <label>{{ __('staff/forms.stocks_brand_name') }} </label>
                          <input
                              class="form-control {{ $errors->has('brand_name') ? 'is-invalid' : ''}}"
                              type="text"
                              name="brand_name"
                              v-bind:id="'brand_name_' + index"
                              value="{{ old('brand_name'), (isset($model) ? $model->brand_name : '' ) }}"
                              v-model="product.brand_name"
                              required
                              @change = "generateStockCode(index)"
                          >
                          {!! $errors->first('brand_name', '<div class="invalid-feedback">:message</div>') !!}
                      </div>
                  </div>
                  <!-- end row -->

                  <div class="row">
                      <div class="form-group col-md-12 col-sm-12 col-xs-12">
                          <label>{{ __('staff/forms.stocks_description') }} </label>
                          <textarea
                              class="form-control {{ $errors->has('description') ? 'is-invalid' : ''}}"
                              name="description"
                              v-bind:id="'description_' + index"
                              v-model="product.description"
                              required
                              @change = "generateStockCode(index)"
                          >
                              {{ old('description'), (isset($model) ? $model->description : '' ) }}
                          </textarea>
                          {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
                      </div>
                  </div>
                  <!-- end row -->

                  <div class="row">
                      <div class="form-group col-md-12 col-sm-12 col-xs-12">
                          <label>{{ __('staff/forms.stocks_category') }} </label>
                          <select2
                              name="sub_category_id"
                              v-bind:initial="product.category"
                              v-model = "product.sub_category_id"
                              v-bind:id="'sub_category_id_' + index"
                              :options.sync="sub_category.options"
                              placeholder="{{ __('staff/forms.stocks_select_category') }}"
                              error="{{ $errors->first('sub_category_id') }}"
                              required
                              @change = "generateStockCode(index)"
                          >
                          </select2>
                          {!! $errors->first('sub_category_id', '<div class="invalid-feedback">:message</div>') !!}
                      </div>
                  </div>
                  <!-- end row -->

                  <div class="row">
                      <div class="form-group col-md-12 col-sm-12 col-xs-12">
                          <label>{{ __('staff/forms.stocks_srp') }} </label>
                          <input
                              class="form-control {{ $errors->has('srp') ? 'is-invalid' : ''}}"
                              type="number"
                              name="srp"
                              v-bind:id="'srp_' + index"
                              value="{{ old('srp'), (isset($model) ? $model->srp : '' ) }}"
                              v-model="product.srp"
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
                          <label>{{ __('staff/forms.stocks_quantity') }} </label>
                          <input
                              class="form-control {{ $errors->has('quantity') ? 'is-invalid' : ''}}"
                              type="number"
                              name="quantity"
                              v-bind:id="'quantity_' + index"
                              value="{{ old('quantity'), (isset($model) ? $model->quantity : '' ) }}"
                              v-model="product.quantity"
                              required
                          >
                          {!! $errors->first('quantity', '<div class="invalid-feedback">:message</div>') !!}
                      </div>

                      <div class="form-group col-md-6 col-sm-12 col-xs-12">
                          <label>{{ __('staff/forms.stocks_unit') }} </label>
                          <input
                              class="form-control {{ $errors->has('unit') ? 'is-invalid' : ''}}"
                              type="text"
                              name="unit"
                              v-bind:id="'unit_' + index"
                              value="{{ old('unit'), (isset($model) ? $model->unit : '' ) }}"
                              v-model="product.unit"
                          >
                          {!! $errors->first('unit', '<div class="invalid-feedback">:message</div>') !!}
                      </div>
                  </div>
                  <!-- end row -->

                  <div class="row">
                      <div class="form-group col-md-12 col-sm-12 col-xs-12">
                          <label>{{ __('staff/forms.stocks_cost') }} </label>
                          <input
                              class="form-control {{ $errors->has('cost') ? 'is-invalid' : ''}}"
                              type="number"
                              name="cost"
                              value="{{ old('cost'), (isset($model) ? $model->cost : '' ) }}"
                              v-model="product.cost"
                              v-on:keyup="updateDeliveryAmount()"
                              @change = "updateDeliveryAmount()"
                          >
                          {!! $errors->first('cost', '<div class="invalid-feedback">:message</div>') !!}
                      </div>
                  </div>
                  <!-- end row -->

                  <div class="row">

                      <div class="form-group col-md-6 col-sm-12 col-xs-12">
                          <label>{{ __('staff/forms.stocks_size') }} </label>
                          <input
                              class="form-control {{ $errors->has('size') ? 'is-invalid' : ''}}"
                              type="text"
                              name="size"
                              v-bind:id="'size_' + index"
                              value="{{ old('size'), (isset($model) ? $model->size : '' ) }}"
                              v-model="product.size"
                          >
                          {!! $errors->first('size', '<div class="invalid-feedback">:message</div>') !!}
                      </div>

                      <div class="form-group col-md-6 col-sm-12 col-xs-12">
                          <label>{{ __('staff/forms.stocks_color') }} </label>
                          <input
                              class="form-control {{ $errors->has('color') ? 'is-invalid' : ''}}"
                              type="text"
                              name="color"
                              v-bind:id="'color_' + index"
                              value="{{ old('color'), (isset($model) ? $model->color : '' ) }}"
                              v-model="product.color"
                          >
                          {!! $errors->first('color', '<div class="invalid-feedback">:message</div>') !!}
                      </div>
                  </div>
                  <!-- end row -->

                  <div class="row">
                      <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="form-group row">
                              <label class="col-5 col-form-label">{{ __('staff/forms.stocks_has_promo') }}</label>
                              <div class="col-7">
                                  <span class="switch switch-outline switch-icon switch-primary">
                                      <label>
                                          <input type="checkbox" name="has_promo" v-model="product.has_promo">
                                          <span></span>
                                      </label>
                                  </span>
                              </div>
                          </div>
                      </div>
                      <div class="form-group col-md-6 col-sm-12 col-xs-12" v-if="product.has_promo">
                            <label>{{ __('staff/forms.stocks_discount_percentage') }} </label>
                            <input
                                class="form-control {{ $errors->has('discount_percentage') ? 'is-invalid' : ''}}"
                                type="text"
                                name="discount_percentage"
                                v-bind:id="'discount_percentage_' + index"
                                value="{{ old('discount_percentage'), (isset($model) ? $model->discount_percentage : '' ) }}"
                                v-model="product.discount_percentage"
                            >
                            {!! $errors->first('discount_percentage', '<div class="invalid-feedback">:message</div>') !!}
                      </div>
                  </div>
                  <!-- end row -->                  

                  <div class="row">

                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label class="col-5 col-form-label">{{ __('staff/forms.stocks_has_expiration') }}</label>
                                <div class="col-7">
                                    <span class="switch switch-outline switch-icon switch-primary">
                                        <label>
                                            <input type="checkbox" name="has_expiration" v-model="product.has_expiration">
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-6 col-sm-6 col-xs-12" v-if="product.has_expiration">
                        <label>{{ __('staff/forms.stocks_expiration_date') }} </label>
                        <input
                            class="form-control {{ $errors->has('expiration_date') ? 'is-invalid' : ''}}"
                            type="date"
                            name="expiration_date"
                            v-bind:id="'expiration_date_' + index"
                            value="{{ old('expiration_date'), (isset($model) ? $model->expiration_date : '' ) }}"
                            v-model="product.expiration_date"
                        >
                        {!! $errors->first('expiration_date', '<div class="invalid-feedback">:message</div>') !!}
                        </div>

                  </div>

                  <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label class="col-5 col-form-label">{{ __('staff/forms.stocks_has_defective') }}</label>
                                <div class="col-7">
                                    <span class="switch switch-outline switch-icon switch-primary">
                                        <label>
                                            <input type="checkbox" name="has_defective" v-model="product.has_defective">
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-8 col-xs-12">
                          <div class="form-group row" style="margin-bottom:0px; padding-bottom: 0px;">
                              <label class="col-4 col-form-label">{{ __('staff/forms.stocks_is_active') }}</label>
                              <div class="col-8">
                                  <span class="switch switch-outline switch-icon switch-primary">
                                      <label>
                                          <input type="checkbox" name="is_active" v-model="product.is_active">
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

        </div>
		</div>
    <!-- end card -->

</div>
<div class="kt-portlet__foot">
    <div class="kt-form__actions">

        <a href="javascript:void(0)" class="btn btn-light-warning btn-sm mr-3 float-right" @click="addProduct">
            <i class="flaticon2-plus-1"></i>Add Product
        </a>

        <button type="submit" class="btn btn-primary" style="margin-top: 40px;">{{ __('staff/buttons.submit') }}</button>
        <button type="button"
                onclick="window.location.href='{{ route('staff.deliveries.index') }}'"
                class="btn btn-secondary"
                style="margin-top: 40px;">{{ __('staff/buttons.cancel') }}

        </button>
    </div>
</div>
