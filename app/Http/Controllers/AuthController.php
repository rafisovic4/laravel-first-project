<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function registration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|min:3|unique:users,username',
            'password' => 'required|min:6|same:re_password',
            'file' => 'mimes:png,jpg,jpeg|',
            'policy' => 'accepted'
//            'username' => ['required', 'min:3', unique:['users' , 'username']]
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }

        $request['password'] = Hash::make($request['password']);


        //username
        //password
        $user = User::query()->create($request->all());
        Auth::login($user);

        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }

    public function auth(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|min:3',
            'password' => 'required|min:6'
        ]);
        if($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        if(!Auth::attempt($validator->validated())) {
            return back()->withErrors(['invalid' => 'Invalid credentials'])->withInput($request->all());
        }

        if(Auth::user()->role ==='banned') {
            Auth::logout();
            return redirect()->route('blocked');
        }
        return redirect()->route('home');


    }

}
