<?php

namespace App\Http\Controllers\Staff\Roles;

use App\Http\Controllers\Staff\BaseController as Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Roles\RoleStoreRequest;
use App\Services\Permissions\GetPermissions;
use App\Services\Roles\CreateRole;
use App\Services\Roles\GetRoleByid;
use App\Services\Roles\UpdateRole;
use App\Services\Roles\DeleteRole;
use App\Services\Roles\GetRoleHasPermissions;
use App\Services\Roles\GetRolePermissions;

class RoleController extends Controller
{
    /**
     * Initialization
     */
    public function __construct()
    {
        parent::__construct();
        // permissions
        $this->middleware('permission:roles-list', ['only' => ['index']]);
        $this->middleware('permission:roles-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:roles-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:roles-delete', ['only' => ['destroy']]);
        $this->middleware('permission:roles-view', ['only' => ['show']]);
    }      
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staff.roles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(GetPermissions $getPermissions)
    {
        $listPermissions = $getPermissions->execute(0);           
        return view('staff.roles.crud',compact('listPermissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleStoreRequest $roleStoreRequest, CreateRole $createRole)
    {
        $createRole->execute($roleStoreRequest->validated());
        return redirect()->route('staff.roles.index')->with('notification', [
              [
                  'type' => 'success',
                  'message' => __('staff/notifications.roles_created_successfully')
              ]
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  GetRoleById $getRoleById
     * @return \Illuminate\Http\Response
     */
    public function show($id, GetRoleById $getRoleById, GetRolePermissions $getRolePermissions)
    {
        $role = $getRoleById->execute($id);
        $rolePermissions = $getRolePermissions->execute($role->id);
        return view('staff.roles.show', compact('role','rolePermissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param App\Services\Roles\GetRoleById
     * @return \Illuminate\Http\Response
     */
    public function edit($id,GetRoleById $getRoleById, GetPermissions $getPermissions, GetRoleHasPermissions $getRoleHasPermissions)
    {
        $model = $getRoleById->execute($id);
        $listPermissions = $getPermissions->execute(0);   
        $rolePermissions = $getRoleHasPermissions->execute($model->id);
        return view('staff.roles.crud',compact('model','listPermissions','rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param App\Http\Requests\Roles\RoleStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update($id, RoleStoreRequest $request, UpdateRole $updateRole)
    {
        $updateRole->execute($id,$request->validated());
        return redirect()->route('staff.roles.index')->with('notification', [
            [
                'type' => 'success',
                'message' => __('staff/notifications.roles_updated_successfully')
            ]
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, DeleteRole $deleteRole)
    {
        $success = $deleteRole->execute($id);
        $response = [
            'success' => $success
        ];
        return response()->json($response);
    }
}
