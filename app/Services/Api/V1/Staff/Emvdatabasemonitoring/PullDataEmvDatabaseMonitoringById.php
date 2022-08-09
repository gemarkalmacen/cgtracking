<?php

namespace App\Services\Api\V1\Staff\Emvdatabasemonitoring;

use App\Models\Emvmonitoring;
use Spatie\QueryBuilder\QueryBuilder;

class PullDataEmvDatabaseMonitoringById
{
    /**
     * Get the City by id
     */
    public function execute($id = null)
    {
        $data = Emvmonitoring::where('id', '>', $id)->limit(500)->get();
        if(empty($data)){
            return false;
        }
        return $data;
    }
}