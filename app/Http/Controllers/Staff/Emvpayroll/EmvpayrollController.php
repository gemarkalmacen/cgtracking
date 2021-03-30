<?php

namespace App\Http\Controllers\Staff\Emvpayroll;

use App\Http\Controllers\Staff\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Emvpayroll\ImportRequest;
use App\Services\Emvpayroll\UploadEmvpayroll;
use Illuminate\Support\Facades\Input;

// use App\Http\Requests\Roles\RoleStoreRequest;

class EmvpayrollController extends Controller
{
    /**
     * Initialization
     */
    public function __construct()
    {
        parent::__construct();
        // permissions
        $this->middleware('permission:emvpayroll-list', ['only' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staff.emvpayroll.index');
    }

    /**
     * Import granteelists
     * @return \Illuminate\Http\Response
     */
    public function import(Request $request)
    {

        $imports = [];
        if( $request->session()->has('import') ) {
            $imports = $request->session()->get('import');
        }
        
        return view('staff.emvpayroll.import',compact('imports'));
    }

    /**
     * load stocks
     * @return \Illuminate\Http\Response
     */
    public function load(ImportRequest $request, UploadEmvpayroll $uploadEmvpayroll)
    {

        $response = $uploadEmvpayroll->execute($request->file);
        if( empty($response['errors']) ){
            $msg = [
                'type' => 'success',
                'message' => __('staff/notifications.emvpayroll_import_successfully')
            ];
        }
        else{
            $msg = [
                'type' => 'error',
                'message' => __('staff/notifications.emvpayroll_import_failed')
            ];
        }
        return redirect()->route('staff.emvpayroll.emvpayrollimport')->with('notification', [$msg])->with('import',$response);
    }
}
