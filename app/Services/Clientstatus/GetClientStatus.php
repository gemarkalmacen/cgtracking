<?php
namespace App\Services\Clientstatus;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Clientstatus;





class GetClientStatus
{
    public function execute()
    {
      $query = Clientstatus::all();
      return $query;
    }
}
