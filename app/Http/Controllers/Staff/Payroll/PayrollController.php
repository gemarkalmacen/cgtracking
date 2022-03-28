<?php

namespace App\Http\Controllers\Staff\Payroll;

use App\Http\Controllers\Staff\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Payroll\ImportRequest;
use App\Services\Payroll\UploadPayroll;
use Illuminate\Support\Facades\Input;

class PayrollController extends Controller
{
    /**
     * Initialization
     */
    public function __construct()
    {
        parent::__construct();
        // permissions
        $this->middleware('permission:payroll-list', ['only' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staff.payroll.index');
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
        
        return view('staff.payroll.import',compact('imports'));
    }

    /**
     * load stocks
     * @return \Illuminate\Http\Response
     */
    public function load(ImportRequest $request, UploadPayroll $uploadPayroll)
    {

        $response = $uploadPayroll->execute($request->file);
        if( empty($response['errors']) ){
            $msg = [
                'type' => 'success',
                'message' => __('staff/notifications.payroll_import_successfully')
            ];
        }
        else{
            $msg = [
                'type' => 'error',
                'message' => __('staff/notifications.payroll_import_failed')
            ];
        }
        return redirect()->route('staff.payroll.payrollimport')->with('notification', [$msg])->with('import',$response);
    }
}
