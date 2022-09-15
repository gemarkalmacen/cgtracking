<?php
namespace App\Services\Emvmonitoringdetails;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Emvdatabasemonitoringdetails;
use App\Models\Role;
use Illuminate\Support\Facades\Request;

class GetListingEmvmonitoringdetails
{
    /**
     * Get list of roles execution
     *
     * @return array
     */
    public function execute()
    {
        $query = Emvdatabasemonitoringdetails::select(['*'])
                // ->filter(Request2::only('search', 'trashed', 'sort', 'tab'))
                // ->sort(Request2::only('sort'))
                // ->filter(Request::only('search'))
                ->filter( Request::all('filter') )
                ->paginate(6)
                ;

        // dd($query);

        return $query;
    }
}
