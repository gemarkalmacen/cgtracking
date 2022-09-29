<?php

namespace App\Http\Controllers\Staff\Psgc;

use App\Http\Controllers\Staff\BaseController as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\Psgc\ImportRequest;

class PsgcController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('permission:psgc-list', ['only' => ['index']]);
    }

    public function index()
    {
        $breadcrumbs_main = 'PSGC';
        $breadcrumbs_details = 'Lists';
        return view('staff.psgc.index',compact('breadcrumbs_main', 'breadcrumbs_details'));
    }

    public function import(Request $request)
    {
        $breadcrumbs_main = 'PSGC';
        $breadcrumbs_details = 'Import';

        $imports = [];
        if( $request->session()->has('import') ) {
            $imports = $request->session()->get('import');
        }
        
        return view('staff.psgc.import',compact('imports', 'breadcrumbs_main', 'breadcrumbs_details'));
    }

    public function load(ImportRequest $request, UploadPayroll $uploadPayroll)
    {

        $response = $uploadPayroll->execute($request->file);
        if( empty($response['errors']) ){
            $msg = [
                'type' => 'success',
                'message' => __('staff/notifications.psgc_import_successfully')
            ];
        }
        else{
            $msg = [
                'type' => 'error',
                'message' => __('staff/notifications.psgc_import_failed')
            ];
        }
        return redirect()->route('staff.psgc.psgcimport')->with('notification', [$msg])->with('import',$response);
    }
}
