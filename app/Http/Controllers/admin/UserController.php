<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;

class UserController extends Controller
{
    private $model;
    public function __construct()   
    {
        $this->model = User::query();
    }
    public function index() {
        $data = $this->model->get()->paginate();
        return view('admin.user.index',[
            'data' => $data,
        ]);
    }
}
