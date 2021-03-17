<?php

namespace App\Http\Controllers\Ajax\Archivedgranteelists;

use App\Http\Controllers\Controller;
use App\Services\Archivedgranteelists\GetListingArchivedGranteelist;
use App\Models\Archivegranteelist;

class ArchivedgranteelistsController extends Controller
{

    /**
     * Get products
     *
     * @param GetListingUsers $getListingUsers
     * @return \Illuminate\Http\JsonResponse
     */
    public function listing(GetListingArchivedGranteelist $getListingArchivedGranteelist)
    {
        $records = $getListingArchivedGranteelist->execute();
        return response()->json($records);
    }

}
