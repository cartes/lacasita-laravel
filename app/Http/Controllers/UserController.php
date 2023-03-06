<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use DataTables;

class UserController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $users = User::all();

            return DataTables::of($users)
                ->addColumn('action', function($user) {
                    $editUrl = route('users.edit', $user->id);
                    $btn = '<a href="'.$editUrl.'" class="btn-primary"><i class="fa fa-pencil"></i></a>';
                    return $btn;
                })
                ->make(true);
        }

        return view('users.index');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Roles
     */

    public function roles()
    {
        $roles = Role::all();

        return view('users.roles', compact('roles'));
    }

}
