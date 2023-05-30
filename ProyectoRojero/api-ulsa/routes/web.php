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


// TEST ROUTES
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-orm',[App\Http\Controllers\PruebasController::class,'testOrm']);
Route::get('/articulo/test',[App\Http\Controllers\ArticleController::class,'test']);
Route::get('/categoria/test',[App\Http\Controllers\CategoryController::class,'test']);
Route::get('/user/test',[App\Http\Controllers\UserController::class,'test']);


//API ROUTES
Route::resource('/api/categorias', 'App\Http\Controllers\CategoryController');
Route::resource('/api/articulos', 'App\Http\Controllers\ArticleController');
