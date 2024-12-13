<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(Request $request){
        $attributes = $request->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);
        if(Auth::attempt($attributes)){
            $request->session()->regenerate();
            return redirect('/jobs')->with('success', 'You are now logged in');
        }
        return back()->withErrors(['email' => 'Invalid credentials']);
        // if(auth()->attempt([
        //     'email'=>$request->email,
        //     'password'=>$request->password
        // ])){
        // };
    }

    public function destroy(Request $request){

        Auth::logout();
        
        // Invalidate the session and regenerate token for security
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You are now logged out');
    }
}
