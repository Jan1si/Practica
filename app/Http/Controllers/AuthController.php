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
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->ipassword);
        $user->role_id = $role->find(1)->id;
        $user->save();
        return redirect()->back();
    }
    public function login(AuthUserRequest $request){
        $password = $request->password;
        $email = $request->email;
        if(Auth::attempt([
            'email' => $email,
            'password' => $password,
        ]))
            return redirect()->route('profile');
        else  return redirect()->back()->withErrors(['password' => 'Непревельный логин или пароль']);
    }
    public function logout(){
        if(Auth::check()){
            Auth::logout();
            return redirect()->route('index');
        }
    }
}
