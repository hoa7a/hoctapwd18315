<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TinController;

// Base url : http://127.0.0.1:8000

Route::get('test', function(){
    echo '123';
});

Route::get('/', function(){
    echo 'Trang chủ';
});

Route::get('list-product', [ProductController::class, 'showProduct']);

Route::get('get-product/{id}/{name?}', [ProductController::class, 'getProduct']);

Route::get('update-product', [ProductController::class, 'updateProduct']);

//list sinhvien
Route::get('list-sv', [TinController::class, 'thongtinsv']);
