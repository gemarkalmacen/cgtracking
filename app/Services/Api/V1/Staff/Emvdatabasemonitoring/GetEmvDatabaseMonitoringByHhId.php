<?php

namespace App\Services\Api\V1\Staff\Emvdatabasemonitoring;

use App\Models\Emvmonitoring;
use Spatie\QueryBuilder\QueryBuilder;

class GetEmvDatabaseMonitoringByHhId
{
    /**
     * Get the City by id
     */
    public function execute($id = null)
    {
        
        $data = Emvmonitoring::where('hh_id', $id)->first();
        if(empty($data)){
            return false;
        }
        return $data;
    }
}