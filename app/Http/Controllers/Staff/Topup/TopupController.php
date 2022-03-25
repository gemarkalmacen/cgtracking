<?php

namespace App\Http\Controllers\Staff\Topup;

use App\Http\Controllers\Staff\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Topup\ImportRequest;
use App\Services\Topup\UploadTopup;
use Illuminate\Support\Facades\Input;

// use App\Http\Requests\Roles\RoleStoreRequest;

class TopupController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('permission:topup-list', ['only' => ['index']]);
    }

    public function index()
    {
        return view('staff.topup.index');
    }

    public function import(Request $request)
    {

        $imports = [];
        if( $request->session()->has('import') ) {
            $imports = $request->session()->get('import');
        }
        
        return view('staff.topup.import',compact('imports'));
    }

    public function load(ImportRequest $request, UploadTopup $uploadTopup)
    {

        $response = $uploadTopup->execute($request->file);
        if( empty($response['errors']) ){
            $msg = [
                'type' => 'success',
                'message' => __('staff/notifications.topup_import_successfully')
            ];
        }
        else{
            $msg = [
                'type' => 'error',
                'message' => __('staff/notifications.topup_import_failed')
            ];
        }
        return redirect()->route('staff.topup.topupimport')->with('notification', [$msg])->with('import',$response);
    }
}
