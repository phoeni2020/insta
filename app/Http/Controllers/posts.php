<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class posts extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'cptian'=>'required',
            'image'=>['required','image']
        ]);

        $imgpath = request('image')->store('uploads','public');
        $image =Image::make(public_path("storage/{$imgpath}"))->fit(1200,1200);
        $image->save();
        auth()->user()->posts()->create(
            [
            'cptian'=>$data['cptian'],
             'image'=>$imgpath
            ]);
        return redirect('/profile/'.auth()->user()->id);
    }

    public function show(\App\Post $post)
    {
        return view('posts.post',['post'=>$post]);
    }
}
