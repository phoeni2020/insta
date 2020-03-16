<?php

namespace App\Http\Controllers;
use \App\User;
use \App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Intervention\Image\Facades\Image;
class proiflecontroller extends Controller
{
     public function create()
    {
       $id =  auth()->id();
        return view('profiles.create',compact('id'));
    }
     public function save($id)
    {

        $data = request()->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>['required','image'],
            'link'=>''
        ]);
        $imgpath = request('image')->store('uploads','public');
        $image =Image::make(public_path("storage/{$imgpath}"))->fit(150,150);
        $image->save();
        auth()->user()->profile()->create([
            'title'=>$data['title'],
            'description'=>$data['description'],
            'link'=>$data['link'],
            'image'=>$imgpath
        ]);
        return redirect("profile/".auth()->id());
    }
     public function profile(User $user)
    {
        return view('profile',compact('user'));
    }
     public function edit(User $user)
     {
         $this->authorize('update',$user->profile);
        return view('profiles/edit',compact('user'));
     }
     public function update(User $userid)
     {
        $this->authorize('update',$userid->profile);
        $data  = request()->validate([
            'title'=>'required',
            'description'=>'required',
            'link'=>'',
            'image'=>'image'
        ]);
        if(request('image'))
        {
            $imgpath = request('image')->store('uploads','public');
            $image =Image::make(public_path("storage/{$imgpath}"))->fit(1000,1000);
            $image->save();
            $imagearr = ['image'=>$imgpath];
        }

         auth()->user()->profile->update(array_merge($data,$imagearr ?? []));
        return redirect("/profile/{$userid->id}");
     }
}
