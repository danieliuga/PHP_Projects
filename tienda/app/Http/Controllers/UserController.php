<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;

class UserController extends Controller
{
    public function index() {
        $users = \App\Models\User::all();
        return view('users', ['users' => $users]);
    }
}
