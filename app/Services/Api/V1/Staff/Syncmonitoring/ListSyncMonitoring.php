<?php

namespace App\Services\Api\V1\Staff\Syncmonitoring;

use App\Exceptions\NotFoundException;
use App\Models\Syncmonitoring;
use Exception;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ListSyncMonitoring
{
    public function execute($request = null)
    {
        $data = DB::table('sync_monitoring')
        ->leftJoin('users_details', 'sync_monitoring.user_id', '=', 'users_details.user_id')
        ->select(
            'sync_monitoring.*',
            DB::raw('CONCAT_WS(" ", users_details.first_name, users_details.last_name) as validators'),
        )
        ->get();
        // $users = DB::table('users')->distinct()->get();
        return $data;
    }
}