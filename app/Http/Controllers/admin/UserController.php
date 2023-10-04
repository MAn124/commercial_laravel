<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\UserRequest;


class UserController extends Controller
{
    private $model;
    public function __construct()   
    {
        $this->model = User::query();
    }

    public function create() {
        return view('admin.user.create');
    }
    public function post(UserRequest $request) {
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
    public function index() {
        $data = $this->model->paginate();
        return view('admin.user.index',[
            'data' => $data,
        ]);
    }
}
