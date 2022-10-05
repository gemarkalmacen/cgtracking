<?php

namespace App\Services\Api\V1\Staff\Emvvalidations;

use App\Models\Emvmonitoring;
use App\Models\Emvvalidations;
use Spatie\QueryBuilder\QueryBuilder;

class UpdaterEmvValidation
{
    /**
     * Get the City by id
     */
    public function execute($id = null)
    {
        $data = Emvvalidations::whereNotNull('validated_at')->get();
        if(empty($data)){
            return false;
        }
        return $data;
    }
}