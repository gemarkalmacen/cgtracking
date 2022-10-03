<?php

namespace App\Services\Api\V1\Staff\Emvvalidations;

use App\Models\Emvvalidations;
use Spatie\QueryBuilder\QueryBuilder;

class PullDataEmvValidationById
{
    /**
     * Get the City by id
     */
    public function execute($id = null)
    {
        $data = Emvvalidations::where('id', '>', $id)->limit(500)->get();
        if(empty($data)){
            return false;
        }
        return $data;
    }
}