<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
   $users = User::all();

    return view('home',compact('users'));
});

Route::post('/register-user', [UserController::class,'store'])->name('user.register');
