<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('layout.master');
});
Route::get('/register', function() {
    return view('admin.auth.register');
});
Route::get('/login', [AuthController::class, 'getLogin'])->name('getLogin');
Route::post('/login', [AuthController::class, 'login'])->name('postLogin');