<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\ProductsController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('testing', function(){
    return 'testowanie aplikacji';
});

Route::post('add_product', [ProductsController::class, 'Add_product']);