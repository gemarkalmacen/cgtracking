<?php

namespace App\Http\Controllers\Staff\Emvdatabase;

use App\Http\Controllers\Staff\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Emvdatabase\ImportRequest;
use App\Services\Emvdatabase\UploadEmvdatabase;
use Illuminate\Support\Facades\Input;

// use App\Http\Requests\Roles\RoleStoreRequest;

class EmvdatabaseController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('permission:emvdatabase-list', ['only' => ['index']]);
        $this->middleware('permission:emvdatabase-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:emvdatabase-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:emvdatabase-delete', ['only' => ['destroy']]);
        $this->middleware('permission:emvdatabase-view', ['only' => ['show']]);
    }

    public function index()
    {
        
        return view('staff.emvdatabase.index');
    }

    public function import(Request $request)
    {
    
        $imports = [];
        if( $request->session()->has('import') ) {
            $imports = $request->session()->get('import');
        }
        return view('staff.emvdatabase.import',compact('imports'));
    }

    public function load(ImportRequest $request, UploadEmvdatabase $uploadEmvdatabase)
    {
        $response = $uploadEmvdatabase->execute($request->file);
        if( empty($response['errors']) ){
            $msg = [
                'type' => 'success',
                'message' => __('staff/notifications.emvdatabase_import_successfully')
            ];
        }
        else{
            $msg = [
                'type' => 'error',
                'message' => __('staff/notifications.emvdatabase_import_failed')
            ];
        }
        return redirect()->route('staff.emvdatabase.emvdatabaseimport')->with('notification', [$msg])->with('import',$response);
    }
}
