<?php

namespace App\Http\Controllers\Staff\Nonemv;

use App\Http\Controllers\Staff\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Granteelists\ImportRequest;
use App\Services\Granteelists\UploadGranteelists;
use Illuminate\Support\Facades\Input;

// use App\Http\Requests\Roles\RoleStoreRequest;

class NonemvController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->middleware('permission:nonemv-list', ['only' => ['index']]);
        $this->middleware('permission:nonemv-create', ['only' => ['create', 'store']]);
    }

    public function index()
    {
        return view('staff.granteelists.index');
    }

    public function import(Request $request)
    {
        $imports = [];
        if( $request->session()->has('import') ) {
            $imports = $request->session()->get('import');
        }
        
        return view('staff.nonemv.import',compact('imports'));
    }

    // public function load(ImportRequest $request, UploadGranteelists $uploadGranteelists)
    // {

    //     $response = $uploadGranteelists->execute($request->file);
    //     // if( ($response['totalRow'] ==  $response['insert'])  AND empty($response['errors']) ){
    //     if( empty($response['errors']) ){
    //         $msg = [
    //             'type' => 'success',
    //             'message' => __('staff/notifications.nonemv_import_successfully')
    //         ];
    //     }
    //     else{
    //         $msg = [
    //             'type' => 'error',
    //             'message' => __('staff/notifications.nonemv_import_failed')
    //         ];
    //     }
    //     return redirect()->route('staff.granteelists.nonemvimport')->with('notification', [$msg])->with('import',$response);
    // }
}
