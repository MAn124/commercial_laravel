<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;

use App\Models\User;
class AuthController extends Controller
{
    public function getLogin() {

        return view('auth.login');
    }
    public function postLogin(Request $request) {
      $email = $request->userName;
      $password = $request->password;
      if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->view('layout.master');
        } else {
            return redirect()->view('auth.login');
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
}
