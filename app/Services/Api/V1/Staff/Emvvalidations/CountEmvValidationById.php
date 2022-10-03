<?php

namespace App\Services\Api\V1\Staff\Emvvalidations;

use App\Models\Emvvalidations;
use Spatie\QueryBuilder\QueryBuilder;

class CountEmvValidationById
{
    /**
     * Get the City by id
     */
    public function execute($id = null)
    {
        $data = Emvvalidations::count();
        if(empty($data)){
            return false;
        }
        return $data;
    }
}