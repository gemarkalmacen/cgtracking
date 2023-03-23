<?php
namespace App\Services\RelationshipGrantee;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Relationshiptograntee;





class GetRelationshipGrantee
{
    public function execute()
    {
      $query = Relationshiptograntee::all();
      return $query;
    }
}
