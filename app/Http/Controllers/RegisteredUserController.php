<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(Request $request){
        $request->validate([
            'name'=> 'required|string|min:3',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:4|confirmed'
        ]);

        $user = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password
        ]);

        Auth()->login($user);
        // dd(request()->all());

        return redirect('/')->with('success', 'Your account has been created');
    }
    
}
