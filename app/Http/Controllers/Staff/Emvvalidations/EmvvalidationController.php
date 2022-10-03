<?php

namespace App\Http\Controllers\Staff\Emvvalidations;

use App\Http\Controllers\Staff\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Emvvalidations\ImportRequest;
use App\Services\Emvvalidations\UploadEmvvalidations;
use Illuminate\Support\Facades\Input;

// use App\Http\Requests\Roles\RoleStoreRequest;

class EmvvalidationController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('permission:emvvalidations-list', ['only' => ['index']]);
    }

    public function index()
    {
        return view('staff.emvvalidations.index');
    }

    public function import(Request $request)
    {
    
        $imports = [];
        if( $request->session()->has('import') ) {
            $imports = $request->session()->get('import');
        }
        return view('staff.emvvalidations.import',compact('imports'));
    }

    public function load(ImportRequest $request, UploadEmvvalidations $uploadEmvvalidations)
    {
        $response = $uploadEmvvalidations->execute($request->file);
        if( empty($response['errors']) ){
            $msg = [
                'type' => 'success',
                'message' => __('staff/notifications.emvvalidations_import_successfully')
            ];
        }
        else{
            $msg = [
                'type' => 'error',
                'message' => __('staff/notifications.emvvalidations_import_failed')
            ];
        }
        return redirect()->route('staff.emvvalidations.emvvalidationsimport')->with('notification', [$msg])->with('import',$response);
    }
}
