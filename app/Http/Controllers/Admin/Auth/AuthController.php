<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Redirect;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            if ($request->user_name) {
                $user = User::where('user_name', $request->user_name)->where('status', 1)->first();
                if (!empty($user)) {
                    $check_pass = User::where('user_name', $request->user_name)->where('status', 1)->where('confirm_password', $request->password)->first();
                    if (!empty($check_pass)) {
                        session()->put('id', $check_pass->id);
                        session()->put('name', $check_pass->name);
                        session()->put('mobile', $check_pass->mobile);
                        session()->put('email', $check_pass->email);
                        session()->put('user_name', $check_pass->user_name);
                        session()->put('role_id', $check_pass->role_id);
                        session()->put('photo', $check_pass->photo);
                        $role_name = getRoleName($check_pass->role_id);
                        session()->put('role_name', $role_name->name);

                        return redirect::to('admin')->with('message', 'Login Successfully');
                    } else {
                        return redirect::to('admin/login')->with('error', 'The provided credentials do not match our records.');
                    }
                } else {
                    return redirect::to('admin/login')->with('error', 'User Not Found');
                }
            }
        }

        return view('admin.auth.login');
    }

    public function logout()
    {
        session()->flush(); // Clear all session data
        return redirect()->route('admin.login');
    }
}
