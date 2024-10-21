<?php

use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\RegisterController;
//use App\Http\Controllers\AjaxController;
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/fetch', [ProductController::class, 'fetchProducts'])->name('products.fetch');
Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/products/update/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');



/*
Route::get('/', function () {
  return view('template/home',array("pg"=>1));
});

Route::get('/about', function () {
   return view('template/about',array("pg"=>2));
});

Route::get('/contact', function () {
  return view('template/contact',array("pg"=>3));
});

Route::get('/service', function () {
  return view('template/service',array("pg"=>3));
});

Route::get('/blog', function () {
  return view('template/blog',array("pg"=>4));
});
*/

