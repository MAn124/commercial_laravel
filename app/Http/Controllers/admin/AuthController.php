<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class AuthController extends Controller
{
    public function getLogin() {
        if(Auth::check()) {
            return view('admin.index');
        } else {
            return view('auth.login');
        }
    }
    public function postLogin(Request $request) {
        $login = [
            'email' => $request->email,
            'password' => $request->password,
            'role' => 1,
            'status' => 1,
        ];
       if(Auth::attempt($login)) {
            return redirect('auth.index');
       }
    }
    public function getRegister() {
        return view('auth.register');
    }
    public function postRegister(AuthRequest $request) {
        User::create([
            'name' => $request->userName,
            'email' => $request->email,
            'pasword' => $request->password,
        ]);
        return redirect()->view('auth.login');
    }
    public function redirect() {
        return view('auth.login');
    }
}
