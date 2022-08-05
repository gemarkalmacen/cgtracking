<?php

namespace App\Http\Controllers\Api\V1\Staff\Emvdatabase;

use App\Http\Controllers\Staff\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Emvdatabase\ImportRequest;
use App\Services\Emvdatabase\UploadEmvdatabase;
use Illuminate\Support\Facades\Input;

// use App\Http\Requests\Roles\RoleStoreRequest;

class EmvdatabaseController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('permission:api-emvdatabase-list', ['only' => ['index']]);
    }

    public function index()
    {
        
    }

}
