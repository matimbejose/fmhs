<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        return view('Users.tools');
    }


    public function showUsers() {
        return response()->json(['users' => User::all()]);
    }

    public function create() {
        return view('Users.create');
    }


}
