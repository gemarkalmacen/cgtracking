<?php

namespace App\Services\Api\V1\Staff\Emvvalidations;

use App\Models\Emvvalidations;
use Spatie\QueryBuilder\QueryBuilder;

class GetEmvDatabaseMonitoringByHhId
{
    /**
     * Get the City by id
     */
    public function execute($id = null)
    {
        
        $data = Emvvalidations::where('hh_id', $id)->first();
        if(empty($data)){
            return false;
        }
        return $data;
    }
}