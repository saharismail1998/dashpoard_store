<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\checkoutcontroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Products;
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

// Route::get('dashpoard', function () {
//     return view('dashpord.dashpord');
// });

Route::get('dashpoard', [DashboardController::class,'index'])->name('dashboard');

Route::get('store', function () {
    return view('layouts.store');
});

Route::get('/', function () {
    return view('store.home');
});


Route::get('checkout', [checkoutcontroller::class,'create'])->name('notification');
Route::get('/products', [Products::class,'index'])->name('products');
Route::get('/products/{category}/{name?}', [Products::class,'show']);

Route::get('/admin/category', [CategoriesController::class,'index'])->name('ListCategory');
Route::get('/admin/category/create', [CategoriesController::class,'create'])->name('add category');
Route::get('/admin/category/{id}', [CategoriesController::class,'show'])->name('ListoneCategory');
Route::post('/admin/category', [CategoriesController::class,'store'])->name('store');
Route::delete('/admin/category/{id}', [CategoriesController::class,'destroy'])->name('delete');
Route::get('/admin/category/{id}/edit', [CategoriesController::class,'edit'])->name('edit');
Route::put('/admin/category/{id}', [CategoriesController::class,'update'])->name('update');
