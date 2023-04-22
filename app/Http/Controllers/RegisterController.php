<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index(){
        return view('registro');  //  return the the actual view
    }

    public function store(Request $request){
        //dd($_REQUEST);
        $this->validate($request, [
            'name' => 'required|min:5',
            'username' => 'required|unique:users|min:3|max:30',
            'email' => 'required|unique:users|email',
            'password' => 'required'
            
        ]);


        User::create([
            'name' => $request-> name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
         return redirect()->route('login');   //  redirect to the next web page
    }
}