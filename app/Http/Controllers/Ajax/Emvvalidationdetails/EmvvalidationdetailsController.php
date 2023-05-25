<?php

namespace App\Http\Controllers\Ajax\Emvvalidationdetails;

use App\Http\Controllers\Controller;
use App\Services\Emvvalidationdetails\GetListingEmvvalidationsDetails;
use App\Services\Emvvalidationdetails\GetListingEmvvalidationsDetailsList;
use App\Services\Emvvalidationdetails\UpdateEmvOcv;
use App\Services\Emvvalidationdetails\UpdateEmvCard;



use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportUser;
use App\Exports\ExportData;
use App\Exports\EmvMultiSheetExport;
use App\Exports\ExportOcv;
use App\Models\User;


use App\Services\Emvvalidationdetails\details;

class EmvvalidationdetailsController extends Controller
{

    /**
     * Get products
     *
     * @param GetListingUsers $getListingUsers
     * @return \Illuminate\Http\JsonResponse
     */


     public function listing(GetListingEmvvalidationsDetailsList $getListingEmvvalidationsDetailsList)
     {

        $records = $getListingEmvvalidationsDetailsList->execute();
        return response()->json($records);

        
     }

    public function search(Request $request, GetListingEmvvalidationsDetails $getListingEmvvalidationsDetails)
    {
        // $records = $request->$getListingEmvvalidationsDetails->execute();
        // return response()->json($records);

        $records = $getListingEmvvalidationsDetails->execute($request->id);
        return response()->json($records);


    }
    public function exportemv(Request $request){
        return Excel::download(new ExportData, 'users-data.xlsx');
    }

    public function export_user(Request $request){


        return (new EmvMultiSheetExport)->download('Validated data [' . date('Y-m-d H-i-s') . '].xlsx');

       
        // return Excel::download(new ExportData, 'Validated data [' . date('Y-m-d H-i-s') . '].xlsx');
    }

    public function updatecard(Request $request,UpdateEmvCard $updateEmvCard)
    {
       $records = $updateEmvCard->execute($request);
       return response()->json($records);
    }

    public function update(Request $request,UpdateEmvOcv $updateEmvOcv)
    {
       $records = $updateEmvOcv->execute($request);
       return response()->json($records);
    }
    public function updatemain(Request $request,UpdateEmvCard $updateEmvCard)
    {

        // if ($request->file('file') == null) {
        //     $file = "";
        // }else{
        //    $file = $request->file('imgUpload1')->store('images');  
        // }



        $file = $request->file('file');
        $file->store('public/test/');
        
        
        $records = $updateEmvCard->execute($request);
        return response()->json($records);
    }

    public function updateocv(Request $request,UpdateEmvOcv $updateOcvCard)
    {
        $records = $updateOcvCard->execute($request);
        return response()->json($records);
     }
}
