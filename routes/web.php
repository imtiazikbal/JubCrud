<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('/createCategory', [CategoryController::class, 'createCategory']);
Route::post('/createProduct', [ProductController::class, 'createProduct']);
Route::post('/delteProduct/{id}', [ProductController::class, 'delteProduct']);
Route::post('/updateproduct/{id}', [ProductController::class, 'updateproduct']);
Route::get('/dataForEdit/{id}', [ProductController::class, 'dataForEdit']);
Route::get('/showProduct', [ProductController::class, 'showProduct']);
Route::get('/ProductAdd', [CategoryController::class, 'ShowCategory']);

Route::view('cCreate','category.create');
