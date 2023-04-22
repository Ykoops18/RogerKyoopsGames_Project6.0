<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
    return view('login');   //  return the the actual view 
    }

    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (!auth()->attempt ($request->only('email','password'))){
            return back() ->with('mensaje','Credenciales incorrectas');
        }
        return redirect()->route('post.index' , auth()->user()->username);//  redirect to the next web page
    }
}
