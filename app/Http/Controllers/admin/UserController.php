<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Pagination\Paginator;

class UserController extends Controller
{
    private $model;
    public function __construct()   
    {
        $this->model = User::query();
    }
    public function index() {
        $data = $this->model->get();
        return view('admin.user.index',[
            'data' => $data,
        ]);
    }
    public function create() {
        return view('admin.user.create');
    }
    public function post(Request $request) {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'avatar' => $request->avatar,
            'phone' => $request->phone,
            'address' => $request->address,
            'role' => $request->role,
        ]);
        return view('admin.user.index');
    }
}