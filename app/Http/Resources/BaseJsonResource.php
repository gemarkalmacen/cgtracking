<?php

namespace App\Http\Resources;

class BaseJsonResource
{
    /**
     * @var Illuminate\Http\Resources\Json\JsonResource $resource
     * @var any $data
     */
    protected $resource, $data;

    public function __construct($resource, $data)
    {
        $this->resource = $resource;
        $this->data = $data;
    }

    public function run()
    {
        if (empty($this->data))
            return response()->json(['data' => $this->data]);
        return new $this->resource($this->data);
    }
}
