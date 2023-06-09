<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function loginindex(Request $request){

        if(Auth::attempt($request->only('username','password','level'))){
            return redirect('/home');
        }
        return redirect('/login')->with('status', 'Gagal Login!!!');

        // dd($request->all());
    }

    public function logout(Request $request){

        Auth::logout();
        return redirect('/');

    }

    public function regisindex(){

        return view('register');
    }

    public function store(Request $request){

        user::create([
            'nama_member' => $request->nama_member,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'level' => $request->level,
            'remember_token' => Str::random(60),
        ]);
        return redirect('/login');
    }
}
