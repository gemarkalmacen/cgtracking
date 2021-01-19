<div class="kt-portlet__body">
    <div class="form-group">
        <h5>{{ __('staff/forms.consultations_category_details') }}</h5>
    </div>    
    <div class="form-group">
        <label>{{ __('staff/forms.consultations_name') }} </label>
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
                onclick="window.location.href='{{ route('staff.consultations.index') }}'"
                class="btn btn-secondary">{{ __('staff/buttons.cancel') }}
        </button>    
    </div>
</div>


