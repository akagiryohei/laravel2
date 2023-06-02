<?php

// ルートの宣言

use Illuminate\Support\Facades\Route;

// 使うcontrollerの宣言

use App\Http\Controllers\GoodController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;


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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::resources([
//     'goods'=>'GoodController',
//     'products'=>'ProductController',
//     'purchases'=>'PurchaseController',
//     'reviews'=>'ReviewController',
//     'users'=>'UserController',
// ]);

//productの登録をするためのページへのルート
Route::get('/product/db/{id}',[ProductController::class,'producteditdate'])->name('product_edit.date');

Route::resource('products', 'ProductController');


