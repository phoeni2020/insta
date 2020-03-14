<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class proiflecontroller extends Controller
{
    public function profile($user)
    {
        $data =  User::findorfail($user);

        return view('profile',['data'=>$data]);
    }
     public function edit(\App\User $user)
     {
        return view('profiles.edit',compact('user'));
     }
}
