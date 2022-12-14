<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[FrontController::class,'index']);
Route::get('show/{id}',[FrontController::class,'show']);
Route::get('register',[FrontController::class,'register']);

Route::get('login',[FrontController::class,'login']);
Route::get('logout',[FrontController::class,'logout']);

Route::post('postregsiter',[FrontController::class,'store']);
Route::post('postlogin',[FrontController::class,'postlogin']);

Route::get('beli/{idmenu}',[CartController::class,'beli']);
Route::get('hapus/{idmenu}',[CartController::class,'hapus']);
Route::get('tambah/{idmenu}',[CartController::class,'tambah']);
Route::get('kurang/{idmenu}',[CartController::class,'kurang']);

Route::get('cart',[CartController::class,'cart']);
Route::get('batal',[CartController::class,'batal']);
Route::get('checkout',[CartController::class,'checkout']);

Route::get('admin',[AuthController::class,'index']);
Route::post('admin/postlogin',[AuthController::class,'postlogin']);

