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


Route::group(['namespace' => 'App\Http\Controllers\Product'], function () {
    Route::get('/', 'IndexController')->name('product.index');
    Route::get('/products/create', 'CreateController')->name('product.create');
    Route::post('/', 'StoreController')->name('product.store');
    Route::delete('/{product}', 'DeleteController')->name('product.delete');
    Route::get('/products/{product}/edit', 'EditController')->name('product.edit');
    Route::patch('/products/{product}Up', 'UpdateController')->name('product.update');
});
Route::group(['namespace' => 'App\Http\Controllers\Color', 'prefix' => 'colors'], function () {
    Route::get('/', 'IndexController')->name('color.index');
    Route::get('/create', 'CreateController')->name('color.create');
    Route::post('/', 'StoreController')->name('color.store');
    Route::get('/{color}/edit', 'EditController')->name('color.edit');
    Route::patch('/{color}', 'UpdateController')->name('color.update');
    Route::delete('/{color}', 'DeleteController')->name('color.delete');
});
Route::group(['namespace' => 'App\Http\Controllers\Size', 'prefix' => 'sizes'], function () {
    Route::get('/', 'IndexController')->name('size.index');
    Route::get('/create', 'CreateController')->name('size.create');
    Route::post('/', 'StoreController')->name('size.store');
    Route::get('/{size}/edit', 'EditController')->name('size.edit');
    Route::patch('/{size}', 'UpdateController')->name('size.update');
    Route::delete('/{size}', 'DeleteController')->name('size.delete');
});
Route::group(['namespace' => 'App\Http\Controllers\Material', 'prefix' => 'materials'], function () {
    Route::get('/', 'IndexController')->name('material.index');
    Route::get('/create', 'CreateController')->name('material.create');
    Route::post('/', 'StoreController')->name('material.store');
    Route::get('/{material}/edit', 'EditController')->name('material.edit');
    Route::patch('/{material}', 'UpdateController')->name('material.update');
    Route::delete('/{material}', 'DeleteController')->name('material.delete');
});
Route::group(['namespace' => 'App\Http\Controllers\Category', 'prefix' => 'categories'], function () {
    Route::get('/', 'IndexController')->name('category.index');
    Route::get('/create', 'CreateController')->name('category.create');
    Route::post('/', 'StoreController')->name('category.store');
    Route::get('/{category}/edit', 'EditController')->name('category.edit');
    Route::patch('/{category}', 'UpdateController')->name('category.update');
    Route::delete('/{category}', 'DeleteController')->name('category.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
