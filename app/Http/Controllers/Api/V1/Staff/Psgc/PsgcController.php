<?php

namespace App\Http\Controllers\Api\V1\Staff\Psgc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Api\V1\Staff\Emvvalidations\EmvvalidationResource;

class PsgcController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:psgc-view', ['only' => ['show']]);
    }

    public function index()
    {
        dd("yow");
    }

}
