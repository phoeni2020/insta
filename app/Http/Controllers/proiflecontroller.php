<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class proiflecontroller extends Controller
{
     public function profile(User $user)
    {
        return view('profile',compact('user'));
    }
     public function edit(User $user)
     {
        if(!($user->id ==auth()->id()))
         {
             exit("USER ID LOGGED IN MUST BE LIKE ID OF UPDATED USER");
         }
        return view('profiles/edit',compact('user'));
     }
     public function update(User $userid)
     {
         if(!($userid->id ==auth()->id()))
         {
             exit("USER ID LOGGED IN MUST BE LIKE ID OF UPDATED USER");
         }
        $data  = request()->validate([
            'title'=>'required',
            'description'=>'required',
            'link'=>'url',
            'image'=>['required','image']
        ]);
        $userid->profile->update($data);
        return redirect("/profile/{$userid->id}");
     }
}
