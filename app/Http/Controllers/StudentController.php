<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{

    public function form(){
        return view('student.login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password', 'usertype');

        if (Auth::attempt($credentials)) {

            return redirect()->intended('/');
        }
        return view('teacher.denied');
    }

    public function register(){

        $data=request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'usertype'=>['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user=new User();
        $pass=request('password');
        $pass=Hash::make('password');
        $user->name=request('name');
        $user->usertype=request('usertype');
        $user->email=request('email');
        $user->password=$pass;
        $user->save();
        return back();
    }


}






