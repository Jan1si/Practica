<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(StoreUserRequest $request){
        $role = Role::all();
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role_id = $role->find(1)->id;
        $user->save();
        return redirect()->back();
    }
    public function login(AuthUserRequest $request){
        $password = $request->input('password');
        $email = $request->input('email');
        if(Auth::attempt([
            'email' => $email,
            'password' => $password,
        ]))
            return redirect()->route('profile');
        else  return redirect()->back()->withErrors(['password' => 'Непревельный логин или пароль']);
    }
    public function logout(Request $request){

    }
}
