<?php
namespace App\Services\Emvmonitoringdetails;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Emvvalidationdetails;
use App\Models\Role;

class GetListingEmvmonitoringdetails
{
    /**
     * Get list of roles execution
     *
     * @return array
     */
    public function execute()
    {
        $query = Emvvalidationdetails::select(['*'])
                // ->filter(Request2::only('search', 'trashed', 'sort', 'tab'))
                // ->sort(Request2::only('sort'))
                ->paginate(6)
                ->fragment('Emvvalidationdetails')
                // ->get()
                ;

        return $query;
    }
}
