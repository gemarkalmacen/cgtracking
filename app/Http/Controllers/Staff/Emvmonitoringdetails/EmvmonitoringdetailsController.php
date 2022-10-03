<?php

namespace App\Http\Controllers\Staff\Emvmonitoringdetails;

use App\Http\Controllers\Staff\BaseController as Controller;
use Illuminate\Http\Request;
use App\Services\Emvmonitoringdetails\GetListingEmvmonitoringdetails;
use Illuminate\Support\Facades\Input;

// use App\Http\Requests\Roles\RoleStoreRequest;

class EmvmonitoringdetailsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('permission:emvmonitoringdetails-list', ['only' => ['index']]);
    }

    public function index()
    {
        $breadcrumbs_main = 'Validated Accounts';
        $breadcrumbs_details = '-';
        return view('staff.emvmonitoringdetails.index', ['data_object' => ''], compact('breadcrumbs_main', 'breadcrumbs_details'));
    }

}
