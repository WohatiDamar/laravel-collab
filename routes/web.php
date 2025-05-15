<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LlamaController;


// Route::get('/products', [ProductController::class, 'index']);
// Route::get('/products/create', [ProductController::class, 'create']);
// Route::get('/products/{id}', [ProductController::class, 'show']);
// Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
// Route::post('/products', [ProductController::class, 'store']);
// Route::put('/products/{id}', [ProductController::class, 'update']);
// Route::delete('/products/{id}', [ProductController::class, 'destroy']);
Route::resource('products', ProductController::class);
Route::get('/chatbot', function () {
    return view('chatbot');
});

Route::post('/ask-llama', [LlamaController::class, 'ask']);
Route::get('/react', function () {
    return view('react');
});



