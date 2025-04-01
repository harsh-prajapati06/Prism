<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Redirect;

class RoleController extends Controller
{
    public function viewRoles(Request $request)
    {
        $role = Role::get();
        return view('admin.role.view', compact('role'));
    }

    public function addRoles(Request $request)
    {
        if ($request->isMethod('post')) {
            $role = new Role;
            $role->name = $request->name;
            $role->save();

            return redirect::to('admin/view_role')->with('message', 'Role Add Successfully');
        }

        return view('admin.role.add');
    }

    public function editRoles(Request $request, $id)
    {
        $role = Role::find($id);

        if ($request->isMethod('post')) {
            $role->name = $request->name;
            $role->save();

            return redirect::to('admin/view_role')->with('message', 'Role Edit Successfully');
        }

        return view('admin.role.edit', compact('role'));
    }

    public function deleteRoles(Request $request)
    {
        Role::where('id', $request->id)->delete();
        return redirect::to('admin/view_role')->with('message', 'Role Deleted Successfully');
    }
    
    public function changeRoleStatus(Request $request)
    {
        Role::where('id', $request->id)->update(['status'=>$request->status]);
        return redirect::to('admin/view_role')->with('message', 'Role Status Changed Successfully');
    }
}
