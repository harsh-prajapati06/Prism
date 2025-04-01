<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Redirect;

class UserController extends Controller
{
    public function viewUsers(Request $request)
    {
        $user = User::get();
        return view('admin.user.view', compact('user'));
    }

    public function addUsers(Request $request)
    {
        if ($request->isMethod('post')) {

            $user = new User;

            $photo = '';
            if ($request->file('photo')) {
                $image = $request->file('photo');
                $path = $image->getRealPath();
                $photo = time() . uniqid() . $image->getClientOriginalName();
                $destinationPath = env('IMAGE_UPLOAD_PATH') . 'profile';
                $image->move($destinationPath, $photo);
            }

            $user->name = $request->name;
            $user->mobile = $request->mobile;
            $user->email = $request->email;
            $user->role_id = $request->role_id;
            $user->user_name = $request->user_name;
            $user->password = Hash::make($request->password);
            $user->confirm_password = $request->confirm_password;
            $user->photo = $photo;
            $user->save();

            return redirect::to('admin/view_user')->with('message', 'User Add Successfully');
        }

        return view('admin.user.add');
    }

    public function editUsers(Request $request, $id)
    {
        $user = User::find($id);

        if ($request->isMethod('post')) {

            if ($request->file('photo')) {
                $image = $request->file('photo');
                $path = $image->getRealPath();
                $photo = time() . uniqid() . $image->getClientOriginalName();
                $destinationPath = env('IMAGE_UPLOAD_PATH') . 'profile';
                $image->move($destinationPath, $photo);
                $user->photo = $photo;
            }

            $user->name = $request->name;
            $user->role_id = $request->role_id;
            $user->mobile = $request->mobile;
            $user->email = $request->email;
            $user->user_name = $request->user_name;
            $user->password = Hash::make($request->password);
            $user->confirm_password = $request->confirm_password;
            $user->save();

            return redirect::to('admin/view_user')->with('message', 'User Edit Successfully');
        }

        return view('admin.user.edit', compact('user'));
    }

    public function deleteUsers(Request $request)
    {
        User::where('id', $request->id)->delete();
        return redirect::to('admin/view_user')->with('message', 'User Deleted Successfully');
    }
    
    public function changeUserStatus(Request $request)
    {
        User::where('id', $request->id)->update(['status'=>$request->status]);
        return redirect::to('admin/view_user')->with('message', 'User Status Changed Successfully');
    }
}
