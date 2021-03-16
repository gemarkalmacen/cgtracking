<?php

namespace App\Http\Controllers\Staff\Otcpayroll;

use App\Http\Controllers\Staff\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Otcpayroll\ImportRequest;
use App\Services\Otcpayroll\UploadOtcpayroll;
use Illuminate\Support\Facades\Input;

// use App\Http\Requests\Roles\RoleStoreRequest;

class OtcpayrollController extends Controller
{
    /**
     * Initialization
     */
    public function __construct()
    {
        parent::__construct();
        // permissions
        $this->middleware('permission:otcpayroll-list', ['only' => ['index']]);
        $this->middleware('permission:otcpayroll-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:otcpayroll-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:otcpayroll-delete', ['only' => ['destroy']]);
        $this->middleware('permission:otcpayroll-view', ['only' => ['show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staff.otcpayroll.index');
    }

    /**
     * Import otcpayroll
     * @return \Illuminate\Http\Response
     */
    public function import(Request $request)
    {

        $imports = [];
        if( $request->session()->has('import') ) {
            $imports = $request->session()->get('import');
        }
        
        return view('staff.otcpayroll.import',compact('imports'));
    }

    /**
     * load stocks
     * @return \Illuminate\Http\Response
     */
    public function load(ImportRequest $request, UploadOtcpayroll $uploadOtcpayroll)
    {

        $response = $uploadOtcpayroll->execute($request->file);
        // if( ($response['totalRow'] ==  $response['insert'])  AND empty($response['errors']) ){
        if( empty($response['errors']) ){
            $msg = [
                'type' => 'success',
                'message' => __('staff/notifications.otcpayroll_import_successfully')
            ];
        }
        else{
            $msg = [
                'type' => 'error',
                'message' => __('staff/notifications.otcpayroll_import_failed')
            ];
        }
        return redirect()->route('staff.otcpayroll.otcpayrollimport')->with('notification', [$msg])->with('import',$response);
    }
}
