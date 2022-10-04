<?php

namespace App\Services\Api\V1\Staff\Psgc;

use App\Models\Psgc;
use App\Models\User;

class GetPsgcList
{
    /**
     * @param $email
     * @return mixed
     */
    public function execute()
    {
        dd(Psgc::get());
        return Psgc::all();
    }
}
