<?php

namespace App\Http\Controllers\Staff\Granteelists;

use App\Http\Controllers\Staff\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Granteelists\ImportRequest;
use App\Services\Granteelists\UploadGranteelists;

// use App\Http\Requests\Roles\RoleStoreRequest;

class GranteelistController extends Controller
{
    /**
     * Initialization
     */
    public function __construct()
    {
        parent::__construct();
        // permissions
        $this->middleware('permission:granteelists-list', ['only' => ['index']]);
        $this->middleware('permission:granteelists-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:granteelists-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:granteelists-delete', ['only' => ['destroy']]);
        $this->middleware('permission:granteelists-view', ['only' => ['show']]);
    }      
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('asd');
        // return view('staff.roles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create(GetPermissions $getPermissions)
    // {
        // $listPermissions = $getPermissions->execute(0);           
        // return view('staff.roles.crud',compact('listPermissions'));
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(RoleStoreRequest $roleStoreRequest, CreateRole $createRole)
    // {
        // $createRole->execute($roleStoreRequest->validated());
        // return redirect()->route('staff.roles.index')->with('notification', [
        //       [
        //           'type' => 'success',
        //           'message' => __('staff/notifications.roles_created_successfully')
        //       ]
        // ]);
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  GetRoleById $getRoleById
     * @return \Illuminate\Http\Response
     */
    // public function show($id, GetRoleById $getRoleById, GetRolePermissions $getRolePermissions)
    // {
    //     $role = $getRoleById->execute($id);
    //     $rolePermissions = $getRolePermissions->execute($role->id);
    //     return view('staff.roles.show', compact('role','rolePermissions'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param App\Services\Roles\GetRoleById
     * @return \Illuminate\Http\Response
     */
    // public function edit($id,GetRoleById $getRoleById, GetPermissions $getPermissions, GetRoleHasPermissions $getRoleHasPermissions)
    // {
        // $model = $getRoleById->execute($id);
        // $listPermissions = $getPermissions->execute(0);   
        // $rolePermissions = $getRoleHasPermissions->execute($model->id);
        // return view('staff.roles.crud',compact('model','listPermissions','rolePermissions'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param App\Http\Requests\Roles\RoleStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function update($id, RoleStoreRequest $request, UpdateRole $updateRole)
    // {
        // $updateRole->execute($id,$request->validated());
        // return redirect()->route('staff.roles.index')->with('notification', [
            // [
                // 'type' => 'success',
                // 'message' => __('staff/notifications.roles_updated_successfully')
            // ]
        // ]);
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id, DeleteRole $deleteRole)
    // {
        // $success = $deleteRole->execute($id);
        // $response = [
            // 'success' => $success
        // ];
        // return response()->json($response);
    // }

    /**
     * Import granteelists
     * @return \Illuminate\Http\Response
     */
    public function import(Request $request)
    {
        $imports = [];
        if( $request->session()->has('import') ) {
            $imports = $request->session()->get('import');
        }
        return view('staff.granteelists.import',compact('imports'));
    }

    /**
     * load stocks
     * @return \Illuminate\Http\Response
     */
    public function load(ImportRequest $request, UploadGranteelists $uploadGranteelists)
    {
        $response = $uploadGranteelists->execute($request->file);
        if( ($response['totalRow'] ==  $response['insert'])  AND empty($response['errors']) ){
            $msg = [
                'type' => 'success',
                'message' => __('staff/notifications.stocks_import_successfully')
            ];
        }
        else{
            $msg = [
                'type' => 'error',
                'message' => __('staff/notifications.stocks_import_failed')
            ];
        }
        return redirect()->route('staff.granteelists.import')->with('notification', [$msg])->with('import',$response);
    }
}
