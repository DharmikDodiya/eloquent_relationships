<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = Role::with('users')->find($id)->users;
        //return $user;
        return view('manytomany.showuser',['data' => $user]);
    }
    public function getData(){
        $data = User::paginate(15);
        return view('manytomany.showalluser',compact('data'));
    }

    public function show($id)
    {
        $role = User::with('roles')->find($id)->roles;
        //return $role;
        return view('manytomany.showrole',['data' => $role]);
    }

}
