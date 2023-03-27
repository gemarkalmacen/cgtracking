<?php
namespace App\Services\ReasonUnclaimed;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Reasonunclaimed;





class GetReasonUnclaimed
{
    public function execute()
    {
      $query = Reasonunclaimed::all();
      return $query;
    }
}
