<?php

namespace App\Http\Controllers\Staff\Inquiry;

use App\Http\Controllers\Staff\BaseController as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class InquiryController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('permission:inquiry-list', ['only' => ['index']]);
    }

    public function index()
    {
        $breadcrumbs_main = 'Inquiry';
        $breadcrumbs_details = 'Search Beneficiary Details';
        return view('staff.inquiry.index',compact('breadcrumbs_main', 'breadcrumbs_details'));
    }
}
