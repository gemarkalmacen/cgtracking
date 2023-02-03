<?php
namespace App\Services\Emvvalidationdetails;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;
use App\Models\Othercardvalidation;




class GetEmvDetailsById
{
    public function execute($id)
    {

        $query = Othercardvalidation::where('id', $id)->get();
        return $query; 
    }
}
