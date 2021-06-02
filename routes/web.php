<?php

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

Auth::routes(['reset' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/catalog', [App\Http\Controllers\CatalogController::class, 'index'])->name('catalog');
Route::get('/category/{id}', [App\Http\Controllers\CatalogController::class, 'category'])->name('category');
Route::get('/product/{id}', [App\Http\Controllers\CatalogController::class, 'product'])->name('product');