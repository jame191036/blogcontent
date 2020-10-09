<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index(){
        return view('users.index')
        ->with('users',user::all());
    }
}
