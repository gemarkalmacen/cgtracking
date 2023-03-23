<?php
namespace App\Services\Psgc;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Psgc;





class GetPsgc
{
    public function execute()
    {
      $query = Psgc::all();
      return $query;
    }
}
