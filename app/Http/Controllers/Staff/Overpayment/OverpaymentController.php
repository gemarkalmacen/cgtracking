<?php

namespace App\Http\Controllers\Staff\Overpayment;

use App\Http\Controllers\Staff\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Overpayment\ImportRequest;
use App\Services\Overpayment\UploadOverpayment;
use Illuminate\Support\Facades\Input;

// use App\Http\Requests\Roles\RoleStoreRequest;

class OverpaymentController extends Controller
{
    /**
     * Initialization
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('permission:overpayment-list', ['only' => ['index']]);
    }

    public function index()
    {
        return view('staff.overpayment.index');
    }

    public function import(Request $request)
    {
        $imports = [];
        if( $request->session()->has('import') ) {
            $imports = $request->session()->get('import');
        }
        
        return view('staff.overpayment.import',compact('imports'));
    }

    public function load(ImportRequest $request, UploadOverpayment $uploadOverpayment)
    {

        $response = $uploadOverpayment->execute($request->file);
        if( empty($response['errors']) ){
            $msg = [
                'type' => 'success',
                'message' => __('staff/notifications.overpayment_import_successfully')
            ];
        }
        else{
            $msg = [
                'type' => 'error',
                'message' => __('staff/notifications.overpayment_import_failed')
            ];
        }
        return redirect()->route('staff.overpayment.overpaymentimport')->with('notification', [$msg])->with('import',$response);
    }
}
