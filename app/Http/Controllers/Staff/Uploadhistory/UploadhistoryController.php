<?php

namespace App\Http\Controllers\Staff\Uploadhistory;

use App\Http\Controllers\Staff\BaseController as Controller;
use Illuminate\Http\Request;
// use App\Http\Requests\Otcpayroll\ImportRequest;
// use App\Services\Otcpayroll\UploadHistory;
use Illuminate\Support\Facades\Input;

// use App\Http\Requests\Roles\RoleStoreRequest;

class UploadhistoryController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('permission:uploadhistory-list', ['only' => ['index']]);
        $this->middleware('permission:uploadhistory-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:uploadhistory-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:uploadhistory-delete', ['only' => ['destroy']]);
        $this->middleware('permission:uploadhistory-view', ['only' => ['show']]);
    }

    public function index()
    {
        return view('staff.uploadhistory.index');
        // dd("Upload history");
    }

    public function load(ImportRequest $request, UploadOtcpayroll $uploadOtcpayroll)
    {

        $response = $uploadOtcpayroll->execute($request->file);
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
