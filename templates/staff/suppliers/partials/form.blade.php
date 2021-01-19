<div class="kt-portlet__body">
    <div class="form-group">
        <h5>{{ __('staff/forms.suppliers_details') }}</h5>
    </div>    
    <div class="form-group">
        <label>{{ __('staff/forms.suppliers_code') }} </label>
        <input
            type="text"
            class="form-control {{ $errors->has('code') ? 'is-invalid' : ''}}"
            name="code"
            value="{{ old('code',(isset($model) ? $model->code : '' )) }}"            
        >
        {!! $errors->first('code', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        <label>{{ __('staff/forms.suppliers_name') }} </label>
        <input
            type="text"
            class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}"
            name="name"
            value="{{ old('name',(isset($model) ? $model->name : '' )) }}"
        >
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        <label>{{ __('staff/forms.suppliers_email') }} </label>
        <input
            type="text"
            class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}"
            name="email"
            value="{{ old('email', (isset($model) ? $model->email : '' )) }}"
        >
        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        <label>{{ __('staff/forms.suppliers_contact') }} </label>
        <input
            type="text"
            class="form-control {{ $errors->has('contact_number') ? 'is-invalid' : ''}}"
            name="contact_number"
            value="{{ old('contact_number', (isset($model) ? $model->contact_number : '' )) }}"
        >
        {!! $errors->first('contact_number', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        <label>{{ __('staff/forms.suppliers_address') }} </label>
        <input
            type="text"
            class="form-control {{ $errors->has('address') ? 'is-invalid' : ''}}"
            name="address"
            value="{{ old('address', (isset($model) ? $model->address : '' )) }}"
        >
        {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        <label>{{ __('staff/forms.suppliers_tin') }} </label>
        <input
            type="text"
            class="form-control {{ $errors->has('tin') ? 'is-invalid' : ''}}"
            name="tin"
            value="{{ old('tin', (isset($model) ? $model->tin : '' )) }}"
        >
        {!! $errors->first('tin', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="kt-portlet__foot">
    <div class="kt-form__actions">
        <button type="submit" class="btn btn-primary">{{ __('staff/buttons.submit') }}</button>
        <button type="button"
                onclick="window.location.href='{{ route('staff.suppliers.index') }}'"
                class="btn btn-secondary">{{ __('staff/buttons.cancel') }}
        </button>    
    </div>
</div>


