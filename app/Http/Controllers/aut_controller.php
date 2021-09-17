<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Auth;

class aut_controller extends Controller
{
public function index()
{
    return view ('login');
}
public function proses_login(Request $request)
{
    request()->validate(
        [
            'username' =>' required',
            'password' => 'required',
        ]);
        $kredensil = $request->only('username' , 'password');
        if(Auth::attempt($kredensil)){
            $user= Auth::user();
        if($user->role == 'admin'){
            return redirect()->intended('admin');
        }else if($user->role == 'student'){
                return redirect()->intended('student');
        }
        return redirect()->intended('/');
    }
    return redirect('login');
}
}