<div class="kt-portlet__body">
    <div class="form-group">
        <h5 class="card-label">{{ __('staff/forms.users_details')  }}</h5>
    </div>
    <div class="form-group form-group-last">
        <label>{{ __('staff/forms.users_is_active') }}</label>
        <v-switch
            name="is_active"
            :options="isActive.options"
            v-model="isActive.value"
            class="{{ $errors->has('is_active') ? 'is-invalid' : '' }}"
            :initial=" {{ old('is_active', $model->details->is_active ?? 'null') }} "
        ></v-switch>
        {!! $errors->first('is_active', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        <label>{{ __('staff/forms.users_first_name') }}</label>
        <input
            type="text"
            name="first_name"
            class="form-control {{ $errors->has('first_name') ? 'is-invalid' : ''}}"
            value="{{ old('first_name', (isset($model) ? $model->details->first_name : '')) }}"
        >
        {!! $errors->first('first_name', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        <label>{{ __('staff/forms.users_last_name') }}</label>
        <input
            type="text"
            name="last_name"
            class="form-control {{ $errors->has('last_name') ? 'is-invalid' : ''}}"
            value="{{ old('last_name', (isset($model) ? $model->details->last_name : '')) }}"
        >
        {!! $errors->first('last_name', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        <label>{{ __('staff/forms.users_middle_name') }}</label>
        <input
            type="text"
            name="middle_name"
            class="form-control {{ $errors->has('middle_name') ? 'is-invalid' : ''}}"
            value="{{ old('middle_name', (isset($model) ? $model->details->middle_name : '')) }}"
        >
        {!! $errors->first('last_name', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        <label>{{ __('staff/forms.users_mobile') }}</label>
        <input
            type="text"
            name="mobile"
            class="form-control {{ $errors->has('mobile') ? 'is-invalid' : ''}}"
            value="{{ old('mobile', $model->details->mobile ?? '') }}"
        >        
    </div>
    <div class="form-group">
        <label>{{ __('staff/forms.users_address') }}</label>
        <textarea
            name="address"
            class="form-control {{ $errors->has('address') ? 'is-invalid' : ''}}"
            value=""
        >{{ old('address', (isset($model) ? $model->details->address : '')) }}</textarea>
        {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        <label>{{ __('staff/forms.users_email') }}</label>
        <input
            type="email"
            name="email"
            class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}"
            value="{{ old('email', (isset($model) ? $model->email : '')) }}"
        >
        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        <label>{{ __('staff/forms.users_password') }}</label>
        <input
            type="text"
            name="password"
            class="form-control {{ $errors->has('password') ? 'is-invalid' : ''}}"
            value=""
        >
        {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        <label>{{ __('staff/forms.users_role') }}</label>
        <select2
            name="role"
            initial="{{ old('role',  isset($model) ? (count($model->getRoleNames()) != 0) ? $model->getRoleNames()[0] : '' : ''  ) }}"
            :options.sync="role.options"
            placeholder="{{ __('staff/forms.users_select_role') }}"
            error="{{ $errors->first('role') }}"
        ></select2>
    </div>
</div>

<div class="kt-portlet__foot">
    <div class="kt-form__actions">
        <button type="submit" class="btn btn-primary">{{ __('staff/buttons.submit') }}</button>
        <button type="button" onclick="window.location.href='{{ route('staff.users.index') }}'" class="btn btn-secondary">{{ __('staff/buttons.cancel') }} </button>
    </div>
</div>
