<?php

namespace App\Http\Controllers\Ajax\Inquiry;

use App\Http\Controllers\Controller;
use App\Services\Inquiry\GetPayroll;
use App\Services\Inquiry\GetGranteelist;
use App\Services\Payroll\GetListingPayrollByHHId;
use App\Services\Inquiry\GetNonemv;
use App\Services\Inquiry\GetEmv;

class InquiryController extends Controller
{

    /**
     * Get products
     *
     * @param GetListingUsers $getListingUsers
     * @return \Illuminate\Http\JsonResponse
     */
    public function search(GetPayroll $getPayroll, GetGranteelist $getGranteelist,GetNonemv $getNonemv,GetEmv $getEmv)
    {
        $request_id = request('id');
        $records_getPayroll = $getPayroll->execute($request_id);
        $records_getGranteelist = $getGranteelist->execute($request_id);
        $records_getNonemv = $getNonemv->execute($request_id);
        $records_getEmv = $getEmv->execute($request_id);

        return response()->json([
            'payroll' => $records_getPayroll,
            'granteelist' => $records_getGranteelist,
            'nonemv' => $records_getNonemv,
            'emv' => $records_getEmv,
        ]);
    }

    public function listing(GetListingPayrollByHHId $getListingPayrollByHHId)
    {
        $request_id = request('hh_id');
        $data = $getListingPayrollByHHId->execute($request_id);
        return response()->json($data);
    }
}