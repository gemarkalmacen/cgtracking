<div class="kt-portlet__body">
    <div class="alert alert-secondary" role="alert">
        Download example import format!. <strong><a href="{{ route('staff.stocks.download') }}">import.xlsx</a></strong>
    </div>
    <div class="row">            
        <div class="col-md-6 col-sm-12 col-xs-12">                
            <div class="form-group">
                <label>{{ __('staff/forms.stocks_upload') }} </label>                
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="file" name="file" accept=".xlsx"/>                
                    <label class="custom-file-label" for="file">Choose file</label>                
                </div>
                {!! $errors->first('file', '<div class="invalid-feedback">:message</div>') !!}
            </div> 
        </div>        
    </div>
</div>
<div class="kt-portlet__foot">
    <div class="kt-form__actions">        
        <button type="submit" class="btn btn-primary" style="margin-top: 40px;">{{ __('staff/buttons.stocks_import') }}</button>        
    </div>
</div>
