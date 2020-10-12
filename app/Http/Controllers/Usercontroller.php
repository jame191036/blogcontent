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

    public function makeadmin(User $user){
        $user->role='admin';
        $user->save();
        session()->flash('success','Status changed Successfully');
        return redirect(route('user.index'));
    }

}
