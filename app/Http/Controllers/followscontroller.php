<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class followscontroller extends Controller
{
    public function store(User $user)
    {
        return $user->username;
    }
}
