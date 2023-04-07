<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UploadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/post/create', [PostController::class, 'create'] );
Route::put('/post/update/{id}', [PostController::class, 'update'] );
Route::delete('/post/delete/{id}', [PostController::class, 'delete'] );
Route::get('/post/all', [PostController::class, 'select'] );


Route::post('/upload/image', [UploadController::class, 'upload Image'] );
