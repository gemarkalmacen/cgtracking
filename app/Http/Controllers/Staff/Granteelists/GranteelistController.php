<?php

namespace App\Http\Controllers\Staff\Granteelists;

use App\Http\Controllers\Staff\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Granteelists\ImportRequest;
use App\Services\Granteelists\UploadGranteelists;
use Illuminate\Support\Facades\Input;

// use App\Http\Requests\Roles\RoleStoreRequest;

class GranteelistController extends Controller
{
    /**
     * Initialization
     */
    public function __construct()
    {
        parent::__construct();
        // permissions
        $this->middleware('permission:granteelists-list', ['only' => ['index']]);
        $this->middleware('permission:granteelists-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:granteelists-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:granteelists-delete', ['only' => ['destroy']]);
        $this->middleware('permission:granteelists-view', ['only' => ['show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staff.granteelists.index');
    }

    /**
     * Import granteelists
     * @return \Illuminate\Http\Response
     */
    public function import(Request $request)
    {
        /**
         * [POST] Form which will submit the file
         */

        $imports = [];
        if( $request->session()->has('import') ) {
            $imports = $request->session()->get('import');
        }
        
        return view('staff.granteelists.import',compact('imports'));
    }

    /**
     * load stocks
     * @return \Illuminate\Http\Response
     */
    public function load(ImportRequest $request, UploadGranteelists $uploadGranteelists)
    {

        $response = $uploadGranteelists->execute($request->file);
        // if( ($response['totalRow'] ==  $response['insert'])  AND empty($response['errors']) ){
        if( empty($response['errors']) ){
            $msg = [
                'type' => 'success',
                'message' => __('staff/notifications.stocks_import_successfully')
            ];
        }
        else{
            $msg = [
                'type' => 'error',
                'message' => __('staff/notifications.stocks_import_failed')
            ];
        }
        return redirect()->route('staff.granteelists.import')->with('notification', [$msg])->with('import',$response);
    }
}
