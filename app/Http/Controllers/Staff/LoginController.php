<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Staff\BaseController as Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Staff panel login page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth('users')->check()) {
            return redirect()->route('staff.dashboard');
        }
        return view('staff.login');
    }
}
