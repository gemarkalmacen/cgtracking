<?php

namespace App\Http\Controllers\Staff\Archivednonemv;

use App\Http\Controllers\Staff\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Emvdatabase\ImportRequest;
use App\Services\Emvdatabase\UploadEmvdatabase;
use Illuminate\Support\Facades\Input;

// use App\Http\Requests\Roles\RoleStoreRequest;

class ArchivednonemvController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('permission:archivednonemv-list', ['only' => ['index']]);
    }

    public function index()
    {
        return view('staff.archivednonemv.index');
    }
}
