<?php

namespace App\Services\Api\V1\Staff\Syncmonitoring;

use App\Exceptions\NotFoundException;
use App\Models\Syncmonitoring;
use App\Models\UserDetail;
use Spatie\QueryBuilder\QueryBuilder;
use Exception;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class GetSyncMonitoringListByDate
{
    public function execute($date)
    {
        $result = Syncmonitoring::select(
            'sm.user_id',
            DB::raw('COUNT(sm.user_id) AS total_count'),
            DB::raw('(SELECT 
            sync_counter
            FROM sync_monitoring 
            WHERE sync_monitoring.user_id = sm.user_id
            ORDER BY sync_at DESC 
            LIMIT 1) AS sync_counter'),
            DB::raw('(SELECT 
            pulldata_counter
            FROM sync_monitoring 
            WHERE sync_monitoring.user_id = sm.user_id
            ORDER BY sync_at DESC 
            LIMIT 1) AS pulldata_counter'),
            DB::raw('(SELECT 
            update_counter
            FROM sync_monitoring 
            WHERE sync_monitoring.user_id = sm.user_id
            ORDER BY sync_at DESC 
            LIMIT 1) AS update_counter'),
            'u.username', 
            'sm.sync_at')
        ->from('sync_monitoring AS sm')
        ->leftJoin('users AS u', 'u.id', '=', 'sm.user_id')
        ->whereDate('sm.sync_at', $date)
        ->groupBy('sm.user_id')
        ->get();

        return $result;
    }
}