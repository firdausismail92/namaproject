<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)

    {
        $request->validate(rules:[
            'user_name' => 'required|string|min:5|max:20',
            'user_email' => 'required|email|unique:users,email',
            'user_password' => 'required',
        ]);

        User::create([
        'name' => $request->user_name,
        'email'=> $request->user_email,
        'password'=> $request->user_password,
        ]);
        
    
    
    return back();

    }
}
