<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use Hash;
use Session;

class LoginController extends Controller
{
    //
    public function show()
    {
        return view('login');
    }

    public function ShowRegister()
    {
        return view('register');
    }

    public function Register(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|max:400',
            'password' =>'required',
        ]);
        // dd($request);
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            // $user->password = $request->password;
            $user->save();

            Auth::login($user);
            return redirect('/student/view');
            // dd($user);
    }
    public function Login(Request $request)
    {
        $val = $request->validate([
            "email" => 'required|email',
            "password" => 'required'
        ]);
        $logincredentials = $request->only('email','password');

        // dd(Auth::check());
        // dd($request);
        if (Auth::attempt($logincredentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/student/view');
        }
        return back();
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
       return redirect()->route('student.loginview');

    }
}
