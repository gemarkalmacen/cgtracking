<?php

namespace App\Services\Api\V1\Staff\Syncmonitoring;

use App\Models\Syncmonitoring;
use Illuminate\Support\Facades\DB;

class GetSyncMonitoringListByDate
{
    public function execute()
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
            DB::raw('MAX(sm.sync_at) as sync_at')
        )
            ->from('sync_monitoring AS sm')
            ->leftJoin('users AS u', 'u.id', '=', 'sm.user_id')
            ->groupBy('sm.user_id')
            ->orderBy('u.username')
            ->get();

        return $result;
    }
}
