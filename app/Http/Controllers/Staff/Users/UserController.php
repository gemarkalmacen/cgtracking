<?php

namespace App\Http\Controllers\Staff\Users;

use App\Http\Controllers\Staff\BaseController as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Users\UserStoreRequest;
use App\Services\Users\CreateUser;
use App\Services\Users\GetUserById;
use App\Services\Users\UpdateUser;
use App\Services\Users\DeleteUser;

class UserController extends Controller
{
    /**
     * Initialization
     */
    public function __construct()
    {
        parent::__construct();
        // permissions
        $this->middleware('permission:users-list', ['only' => ['index']]);
        $this->middleware('permission:users-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:users-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:users-delete', ['only' => ['destroy']]);
        $this->middleware('permission:users-view', ['only' => ['show']]);
    }      
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staff.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.users.crud');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $userStoreRequest, CreateUser $createUser)
    {
        $createUser->execute($userStoreRequest->validated());
        return redirect()->route('staff.users.index')->with('notification', [
              [
                  'type' => 'success',
                  'message' => __('staff/notifications.users_created_successfully')
              ]
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  GetUserById $getUserById
     * @return \Illuminate\Http\Response
     */
    public function show($id, GetUserById $getUserById)
    {
        $user = $getUserById->execute($id);
        return view('staff.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param App\Services\Users\GetUserById
     * @return \Illuminate\Http\Response
     */
    public function edit($id,GetUserById $getUserById)
    {
        $model = $getUserById->execute($id);
        return view('staff.users.crud',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param App\Http\Requests\Users\UserStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update($id, UserStoreRequest $request, UpdateUser $updateUser)
    {
        $updateUser->execute($id,$request->validated());
        return redirect()->route('staff.users.index')->with('notification', [
            [
                'type' => 'success',
                'message' => __('staff/notifications.users_updated_successfully')
            ]
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, DeleteUser $deleteUser)
    {
        $success = $deleteUser->execute($id);
        $response = [
              'success' => $success
        ];
        return response()->json($response);
    }
}
