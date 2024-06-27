<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SinhVienController;

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
    return view('welcome');
});
Route::get('list-product', [ProductController::class, 'showProduct']);
Route::get('thongtinsv', [SinhVienController::class, 'infomation']);

//slug 
Route::get('get-product/{id}', [ProductController::class, 'getProduct']);
//params
//http://127.0.0.1:8000/update-product?id=1&name=abc&price=1000
Route::get('update-product', [ProductController::class, 'updateProduct']);