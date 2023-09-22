<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Models\User;
class AuthController extends Controller
{
    public function getLogin() {

        return view('admin.auth.login');
    }
    public function postLogin(AuthRequest $request) {
        User::create([
            
        ]);
    }
}
