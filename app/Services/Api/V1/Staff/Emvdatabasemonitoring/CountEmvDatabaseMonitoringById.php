<?php

namespace App\Services\Api\V1\Staff\Emvdatabasemonitoring;

use App\Models\Emvmonitoring;
use Spatie\QueryBuilder\QueryBuilder;

class CountEmvDatabaseMonitoringById
{
    /**
     * Get the City by id
     */
    public function execute($id = null)
    {
        $data = Emvmonitoring::count();
        if(empty($data)){
            return false;
        }
        return $data;
    }
}