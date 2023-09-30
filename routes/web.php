<?php

use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[AuthController::class,'redirect'])->name('welcome');
Route::get('/register', function() {
    return view('admin.auth.register');
});
Route::get('/register', [AuthController::class, 'getRegister'])->name('getRegister');
Route::post('/register', [AuthController::class, 'postRegister'])->name('postRegister');
Route::get('/login', [AuthController::class, 'getLogin'])->name('getLogin');
Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
Route::prefix('/admin')->group(function(){
    Route::get('/', function(){ return view('layout.master');});
    Route::prefix('/user')->group(function () {
        Route::get('/',[UserController::class,'index'])->name('getIndex');
        Route::get('/create', [UserController::class,'create'])->name('createUser');
        Route::post('/create-user', [UserController::class,'post'])->name('postUser');
    });
});