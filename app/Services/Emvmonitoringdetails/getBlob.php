<?php

namespace App\Services\Emvmonitoringdetails;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Emvdatabasemonitoringdetails;

class getBlob
{
    /**
     * Get list of roles execution
     *
     * @return array
     */
    public function execute()
    {
        $query = Emvdatabasemonitoringdetails::select(['current_cash_card_picture'])->first();

        return $query;
    }
}
