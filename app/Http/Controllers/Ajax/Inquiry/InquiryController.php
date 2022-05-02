<?php

namespace App\Http\Controllers\Ajax\Inquiry;

use App\Http\Controllers\Controller;
use App\Services\Inquiry\GetPayroll;
use App\Services\Inquiry\GetGranteelist;

class InquiryController extends Controller
{

    /**
     * Get products
     *
     * @param GetListingUsers $getListingUsers
     * @return \Illuminate\Http\JsonResponse
     */
    public function search(GetPayroll $getPayroll, GetGranteelist $getGranteelist)
    {
        $request_id = request('id');
        $records_getPayroll = $getPayroll->execute($request_id);
        $records_getGranteelist = $getGranteelist->execute($request_id);
        
        return response()->json([
            'payroll' => $records_getPayroll,
            'granteelist' => $records_getGranteelist
        ]);
    }

}