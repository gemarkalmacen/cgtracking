<?php

namespace App\Http\Controllers\Staff\Emvvalidationdetails;

use App\Http\Controllers\Staff\BaseController as Controller;
use Illuminate\Http\Request;
use App\Services\Emvvalidationdetails\GetListingEmvvalidationsdetails;
use App\Services\Emvvalidationdetails\GetListingEmvvalidationsdetailsList;
use Illuminate\Support\Facades\Input;

// use App\Http\Requests\Roles\RoleStoreRequest;

class EmvvalidationdetailsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('permission:emvvalidationdetails-list', ['only' => ['index']]);
    }

    public function index()
    {
        $breadcrumbs_main = 'Validated Accounts';
        $breadcrumbs_details = '-';
        return view('staff.emvvalidationdetails.index', ['data_object' => ''], compact('breadcrumbs_main', 'breadcrumbs_details'));
    }

    public function show(Request $request, GetListingEmvvalidationsdetails $getListingEmvvalidationsDetails)
    {
      

        

        $records = $getListingEmvvalidationsDetails->execute($request->id);
        // return response()->json($records);
        $breadcrumbs_main = 'Validated Accounts';
        $breadcrumbs_details = '-';
        return view('staff.emvvalidationdetails.show', ['data_object' => $records], compact('breadcrumbs_main', 'breadcrumbs_details'));


    }

}
