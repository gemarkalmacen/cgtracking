<?php

namespace App\Services\Api\V1\Staff\Syncmonitoring;

use App\Exceptions\NotFoundException;
use App\Models\Syncmonitoring;
use Spatie\QueryBuilder\QueryBuilder;
use Exception;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateSyncmonitoring
{
    public function execute($request = null)
    {
        DB::beginTransaction();
        try {
            
            $sync_monitoring = new Syncmonitoring;
            $sync_monitoring->sync_counter = $request->sync_counter;
            $sync_monitoring->update_counter = $request->update_counter;
            $sync_monitoring->pulldata_counter = $request->pulldata_counter;
            $sync_monitoring->psgc_counter = $request->psgc_counter;
            $sync_monitoring->user_id = $request->user_id;
            $sync_monitoring->updated_at = null;
            
            if($sync_monitoring->save()){
                DB::commit();
                return $request->all();
            }

        } catch (Exception $ex) {
            DB::rollBack();
            print_r($ex->getMessage());
            throw new NotFoundException('Issue on getting the data. Contact admin for more info.', 404);
        }
    }
}