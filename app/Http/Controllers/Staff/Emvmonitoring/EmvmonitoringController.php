<?php

namespace App\Http\Controllers\Staff\Emvmonitoring;

use App\Http\Controllers\Staff\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Emvmonitoring\ImportRequest;
use App\Services\Emvmonitoring\UploadEmvmonitoring;
use Illuminate\Support\Facades\Input;

// use App\Http\Requests\Roles\RoleStoreRequest;

class EmvmonitoringController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('permission:emvmonitoring-list', ['only' => ['index']]);
    }

    public function index()
    {
        return view('staff.emvmonitoring.index');
    }

    public function import(Request $request)
    {
    
        $imports = [];
        if( $request->session()->has('import') ) {
            $imports = $request->session()->get('import');
        }
        return view('staff.emvmonitoring.import',compact('imports'));
    }

    public function load(ImportRequest $request, UploadEmvmonitoring $uploadEmvmonitoring)
    {
        $response = $uploadEmvmonitoring->execute($request->file);
        if( empty($response['errors']) ){
            $msg = [
                'type' => 'success',
                'message' => __('staff/notifications.emvmonitoring_import_successfully')
            ];
        }
        else{
            $msg = [
                'type' => 'error',
                'message' => __('staff/notifications.emvmonitoring_import_failed')
            ];
        }
        return redirect()->route('staff.emvmonitoring.emvmonitoringimport')->with('notification', [$msg])->with('import',$response);
    }
}
