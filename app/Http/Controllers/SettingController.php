<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Session;

class SettingController extends Controller
{
    function users() {
        $users = User::all();

        return View('Setting.list', compact('users'));
    }

    function confirm_delete(Request $request) {
        $user = User::find($request->id);

        return View('Setting.delete', compact('user'));
    }

    function delete($id) {
        $user = User::find($id);
        $user->delete();

        Session::flash('delete', 'success');
        Session::flash('user_name', $user->name);

        return redirect('/Setting/Index');
    }

    function user_permission() {
        $users = User::all();

        return View('Setting.permission', compact('users'));
    }

    function get_roles_list(Request $request) {
        $roles = Role::all();
        $user = User::find($request->user_id);

        $role_arr = [];

        foreach ($roles as $role) {
            $role_arr[$role->role_type] = [
                "id" => $role->id,
                "isCheck" => ""
            ];
        }

        $role_arr[$user->role->role_type]["isCheck"] = "checked";
        // return $role_arr;
        return View('Setting.roles', compact('role_arr', 'user'));
    }

    function change_role(Request $request) {
        $user = User::find($request->user_id);
        $user->role_id = $request->role_id;
        $user->save();

        return redirect('/Setting/Index');
    }
}
