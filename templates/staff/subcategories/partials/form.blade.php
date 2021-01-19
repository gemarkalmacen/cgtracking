<div class="kt-portlet__body">
    <div class="form-group">
        <h5>{{ __('staff/forms.categories_category_details') }}</h5>
    </div>    
    <div class="form-group">
        <label>{{ __('staff/forms.subcategories_category') }} </label>
        <select2
            name="category_id"
            initial="{{ old('category_id', $model->category_id ?? '') }}"
            v-model="category.value"
            :options.sync="category.options"
            placeholder="Select category"
            error="{{ $errors->first('category_id') }}"
        ></select2>
        {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        <label>{{ __('staff/forms.subcategories_subcategory') }} </label>
        <select2
            name="parent_category_id"
            initial="{{ old('parent_category_id', $model->parent_category_id ?? '') }}"
            v-model="subcategory.value"
            :options.sync="subcategory.options"
            placeholder="Select category"
            error="{{ $errors->first('parent_category_id') }}"
        ></select2>
        {!! $errors->first('parent_category_id', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        <label>{{ __('staff/forms.subcategories_name') }} </label>
        <input
            type="text"
            class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}"
            name="name"
            value="{{ old('name'), (isset($model) ? $model->name : '' ) }}"
        >
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="kt-portlet__foot">
    <div class="kt-form__actions">
        <button type="submit" class="btn btn-primary">{{ __('staff/buttons.submit') }}</button>
        <button type="button"
                onclick="window.location.href='{{ route('staff.subcategories.index') }}'"
                class="btn btn-secondary">{{ __('staff/buttons.cancel') }}
        </button>    
    </div>
</div>


