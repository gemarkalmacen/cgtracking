<?php

namespace App\Http\Controllers\Staff\Archivedgranteelists;

use App\Http\Controllers\Staff\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Emvdatabase\ImportRequest;
use App\Services\Emvdatabase\UploadEmvdatabase;
use Illuminate\Support\Facades\Input;

// use App\Http\Requests\Roles\RoleStoreRequest;

class ArchivedgranteelistsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('permission:archivedgranteelists-list', ['only' => ['index']]);
    }

    public function index()
    {
        return view('staff.archivedgranteelists.index');
    }
}
