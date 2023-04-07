<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/add', function () {
    return view('product/add');
});

Route::get('/product/edit/{id}', [ProductController::class, 'getProduct']);


Route::get('/product/all',[ProductController::class, 'showAllProduct2']);

Route::post('/product/api/add',[ProductController::class, 'insert']);
Route::get('/product/api/delete/{id}',[ProductController::class, 'delete']);

