<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\Request;
use App\Models\User;
class AuthController extends Controller
{
    public function getLogin() {

        return view('admin.auth.login');
    }
    public function postLogin() {
      
    }
    public function getRegister() {
        return view('admin.auth.register');
    }
    public function postRegister(AuthRequest $request) {
        User::create([
            'name' => $request->userName,
        ]);
    }
}
