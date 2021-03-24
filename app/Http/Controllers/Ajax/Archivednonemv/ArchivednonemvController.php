<?php

namespace App\Http\Controllers\Ajax\Archivednonemv;

use App\Http\Controllers\Controller;
use App\Services\Archivednonemv\GetListingArchivedNonemv;
use App\Models\Archivegranteelist;

class ArchivednonemvController extends Controller
{

    /**
     * Get products
     *
     * @param GetListingUsers $getListingUsers
     * @return \Illuminate\Http\JsonResponse
     */
    public function listing(GetListingArchivedNonemv $getListingArchivedNonemv)
    {
        $records = $getListingArchivedNonemv->execute();
        return response()->json($records);
    }

}
