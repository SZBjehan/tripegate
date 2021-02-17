<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\orderController; 
use App\Http\Controllers\productController;
use App\Http\Controllers\productsellController;
use App\Http\Controllers\orderCountryController;

use App\Http\Controllers\searchController;


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

Auth::routes();

Route::get('db', 'Product@checkDB');

Route::get('/show-all-order',[orderController::class,'show']);
Route::get('/highest-amount-order',[productController::class,'show']);
Route::get('/highest-selling-order',[productsellController::class,'show']);
Route::get('/country-wise-order',[orderCountryController::class,'show']);

Route::get('/search',[searchController::class,'search']);
