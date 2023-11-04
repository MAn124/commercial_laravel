<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\brand;
use App\Http\Requests\BrandRequest;

class BrandController extends Controller
{
    private $model;
    public function __construct()
    {
        $this->model = Brand::query();
    }
    public function index() {
        $data = $this->model->paginate();
        return view('admin.brand.index',[
            'data' => $data,
        ]);
    }
    public function create() {
        return view('admin.brand.create');
    }
    public function postBrand(BrandRequest $request) {
        Brand::create([
            'brand_name' => $request->name,
            'brand_description' => $request->description,
        ]);
        return view('admin.brand.index');
    }
}
