<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class posts extends Controller
{
    public function create()
    {
        return view('posts.create');
    }
}
