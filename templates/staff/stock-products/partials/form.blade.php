<div class="kt-portlet__body">

      <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">

            <div class="row">
                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <label>{{ __('staff/forms.stock_products_stock_code') }}
                          <a
                              href="#"
                              class="btn btn-icon btn-light-primary btn-circle mr-2 btn-xs"
                              data-toggle="popover"
                              title=""
                              data-content="And here's some amazing content. It's very engaging. Right?"
                              data-original-title="Delivery details"
                              style="margin-left: 10px;"
                              id="btn_question_delivery"
                              data-html="true"
                          >
														<i class="fas fa-question"></i>
													</a>
                    </label>
                    <input
                        class="form-control {{ $errors->has('stock_code') ? 'is-invalid' : ''}}"
                        type="text"
                        name="stock_code"
                        id="stock_code"
                        value="{{ (isset($model) ? $model->stock_code : old('stock_code')) }}"
                        readonly
                    >
                    {!! $errors->first('stock_code', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <label>{{ __('staff/forms.stock_products_brand_name') }} </label>
                    <input
                        class="form-control {{ $errors->has('brand_name') ? 'is-invalid' : ''}}"
                        type="text"
                        name="brand_name"
                        id="brand_name"
                        value="{{ (isset($model) ? $model->brand_name : old('brand_name')) }}"
                        required
                    >
                    {!! $errors->first('brand_name', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <label>{{ __('staff/forms.stock_products_description') }} </label>
                    <textarea
                        class="form-control {{ $errors->has('description') ? 'is-invalid' : ''}}"
                        name="description"
                        id="description"
                        required
                    >{{ (isset($model) ? $model->description : old('description')) }}</textarea>
                    {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <label>{{ __('staff/forms.stock_products_category') }} </label>
                    <select2
                        name="sub_category_id"
                        initial="{{ (isset($model) ? $model->sub_category_id : old('sub_category_id')) }}"
                        id="sub_category_id"
                        :options.sync="sub_category.options"
                        placeholder="{{ __('staff/forms.stock_products_select_category') }}"
                        error="{{ $errors->first('sub_category_id') }}"
                        required
                    >
                    </select2>
                    {!! $errors->first('sub_category_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <label>{{ __('staff/forms.stock_products_srp') }} </label>
                    <input
                        class="form-control {{ $errors->has('srp') ? 'is-invalid' : ''}}"
                        type="number"
                        name="srp"
                        id="srp"
                        value="{{ (isset($model) ? $model->srp : old('srp')) }}"
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
                    <label>{{ __('staff/forms.stock_products_quantity') }} </label>
                    <input
                        class="form-control {{ $errors->has('quantity') ? 'is-invalid' : ''}}"
                        type="number"
                        name="quantity"
                        id="quantity"
                        value="{{ (isset($model) ? $model->quantity : old('quantity')) }}"
                        required
                    >
                    {!! $errors->first('quantity', '<div class="invalid-feedback">:message</div>') !!}
                </div>

                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                    <label>{{ __('staff/forms.stock_products_unit') }} </label>
                    <input
                        class="form-control {{ $errors->has('unit') ? 'is-invalid' : ''}}"
                        type="text"
                        name="unit"
                        id="unit"
                        value="{{ (isset($model) ? $model->unit : old('unit')) }}"
                    >
                    {!! $errors->first('unit', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <label>{{ __('staff/forms.stock_products_cost') }} </label>
                    <input
                        class="form-control {{ $errors->has('cost') ? 'is-invalid' : ''}}"
                        type="number"
                        name="cost"
                        value="{{ (isset($model) ? $model->cost : old('cost')) }}"
                    >
                    {!! $errors->first('cost', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <!-- end row -->

            <div class="row">

                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                    <label>{{ __('staff/forms.stock_products_size') }} </label>
                    <input
                        class="form-control {{ $errors->has('size') ? 'is-invalid' : ''}}"
                        type="text"
                        name="size"
                        id="size"
                        value="{{ (isset($model) ? $model->size : old('size')) }}"
                    >
                    {!! $errors->first('size', '<div class="invalid-feedback">:message</div>') !!}
                </div>

                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                    <label>{{ __('staff/forms.stock_products_color') }} </label>
                    <input
                        class="form-control {{ $errors->has('color') ? 'is-invalid' : ''}}"
                        type="text"
                        name="color"
                        id="color"
                        value="{{ (isset($model) ? $model->color : old('color')) }}"
                    >
                    {!! $errors->first('color', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group row">
                        <label class="col-5 col-form-label">{{ __('staff/forms.stock_products_has_promo') }}</label>
                        <div class="col-7">
                            <span class="switch switch-outline switch-icon switch-primary">
                                <label>
                                    <input type="checkbox" name="has_promo" {{ (isset($model) ? (($model->has_promo == 1) ? 'checked' : '') : '') }}>
                                    <span></span>
                                </label>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group row">
                        <label class="col-5 col-form-label">{{ __('staff/forms.stock_products_has_defective') }}</label>
                        <div class="col-7">
                            <span class="switch switch-outline switch-icon switch-primary">
                                <label>
                                    <input type="checkbox" name="has_defective" {{ (isset($model) ? (($model->has_defective == 1) ? 'checked' : '') : '') }}>
                                    <span></span>
                                </label>
                            </span>
                        </div>
                    </div>
                </div>



            </div>
            <!-- end row -->

            <div class="row">

              <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group row">
                      <label class="col-5 col-form-label">{{ __('staff/forms.stock_products_has_expiration') }}</label>
                      <div class="col-7">
                          <span class="switch switch-outline switch-icon switch-primary">
                              <label>
                                  <input type="checkbox" name="has_expiration" v-model="has_expiration" {{ (isset($model) ? (($model->has_expiration == 1) ? 'checked' : '') : '') }}>
                                  <span></span>
                              </label>
                          </span>
                      </div>
                  </div>
              </div>

              <div class="form-group col-md-6 col-sm-6 col-xs-12" v-if="has_expiration">
                <label>{{ __('staff/forms.stock_products_expiration_date') }} </label>
                <input
                    class="form-control {{ $errors->has('expiration_date') ? 'is-invalid' : ''}}"
                    type="date"
                    name="expiration_date"
                    id="expiration_date"
                    value="{{ (isset($model) ? $model->expiration_date : old('expiration_date')) }}"
                >
                {!! $errors->first('expiration_date', '<div class="invalid-feedback">:message</div>') !!}
              </div>

            </div>

            <div class="row">
                <div class="col-md-5 col-sm-8 col-xs-12">
                    <div class="form-group row" style="margin-bottom:0px; padding-bottom: 0px;">
                        <label class="col-4 col-form-label">{{ __('staff/forms.stock_products_is_active') }}</label>
                        <div class="col-8">
                            <span class="switch switch-outline switch-icon switch-primary">
                                <label>
                                    <input type="checkbox" name="is_active" {{ (isset($model) ? (($model->is_active == 1) ? 'checked' : '') : '') }}>
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
<div class="kt-portlet__foot">
    <div class="kt-form__actions">

        <!-- <a href="javascript:void(0)" class="btn btn-light-warning btn-sm mr-3 float-right" @click="addProduct">
            <i class="flaticon2-plus-1"></i>Add Product
        </a> -->

        <button type="submit" class="btn btn-primary" style="margin-top: 40px;">{{ __('staff/buttons.submit') }}</button>
        <button type="button"
                onclick="window.location.href='{{ route('staff.stocks.index') }}'"
                class="btn btn-secondary"
                style="margin-top: 40px;">{{ __('staff/buttons.cancel') }}

        </button>
    </div>
</div>
