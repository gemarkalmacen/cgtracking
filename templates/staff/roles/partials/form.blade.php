<div class="kt-portlet__body">
    <div class="form-group">
        <h5 class="card-label">{{ __('staff/forms.roles_details')  }}</h5>
    </div>
    <div class="form-group">
        <label>{{ __('staff/forms.roles_name') }}</label>
        <input
            type="text"
            name="name"
            class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}"
            value="{{ old('name', (isset($model) ? $model->name : '')) }}"
        >
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
    </div>       
    <div class="form-group">
        <label>{{ __('staff/forms.roles_manage_permissions') }}</label>
        <br/>
        <table class="table table-stripped table-hover">
            @foreach($listPermissions as $permission)               
                <tr>
                    <td>                        
                        @if(!$permission->parent_id)
                            <strong>{{ ucwords($permission->name) }}</strong>
                        @else                            
                            <span style="margin-left:25px;"> {{$permission->name}} </span>
                        @endif
                    </td>                   
                    <td>
                        <div class="checkbox-inline">
                            <label class="checkbox checkbox-square">
                                @php
                                    $checked = '';
                                    if( array_key_exists( $permission->id,$rolePermissions ) ) {
                                        $checked = 'checked="checked"';
                                    }                                    
                                @endphp
                                <input type="checkbox" data-parent="{{$permission->parent_id}}" name="permission[]" value="{{$permission->name}}" id="{{$permission->id}}" class="styled pcheck" {{ $checked }}>
                                <span></span>
                                 {!! ($permission->parent_id == 0) ? '<h5>'.$permission->description.'</h5>' :  $permission->description ?? '' !!} 
                            </label>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

<div class="kt-portlet__foot">
    <div class="kt-form__actions">
        <button type="submit" class="btn btn-primary">{{ __('staff/buttons.submit') }}</button>
        <button type="button" onclick="window.location.href='{{ route('staff.roles.index') }}'" class="btn btn-secondary">{{ __('staff/buttons.cancel') }} </button>
    </div>
</div>
