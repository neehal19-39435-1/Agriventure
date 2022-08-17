<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\ProductController;

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

Route::get('/Registration', function () {
    return view('Farmer.registration');
})->name('reg');

Route::get('/Login', function () {
    return view('Farmer.login');
})->name('farmerlogin');

Route::get('/navbar', function () {
    return view('Layouts.navbar.navbar');
})->name('navbar');

Route::get('/dash', function () {
    return view('Layouts.dashboard.dashboard');
})->name('dashboard')->middleware("farmerValid");

Route::get('/product', function () {
    return view('Farmer.product');
})->name('product')->middleware("farmerValid");


Route::post('/Registration',[FarmerController::class, 'signUp'])->name('farmersignUp');
Route::post('/Login',[FarmerController::class, 'signIn'])->name('farmersignIn');
Route::post('/product',[ProductController::class, 'addProducts'])->name('product')->middleware("farmerValid");
Route::get('/viewproduct',[ProductController::class, 'card'])->name('viewproduct')->middleware("farmerValid");
Route::get('/balcony',[ProductController::class, 'Balcony'])->name('balcony')->middleware("farmerValid");
Route::get('/rooftop',[ProductController::class, 'Rooftop'])->name('rooftop')->middleware("farmerValid");
Route::get('/moneyplant',[ProductController::class, 'Money_plant'])->name('moneyplant')->middleware("farmerValid");
Route::get('/equipments',[ProductController::class, 'Agricultural_equipments'])->name('equipments')->middleware("farmerValid");
Route::get('/delete',[ProductController::class, 'ProductdelList'])->name('delete')->middleware("farmerValid");
Route::get('/delete/{id}',[ProductController::class, 'productdel'])->name('del')->middleware("farmerValid");
Route::get('/UpdateProduct',[ProductController::class, 'updatelist'])->name('UpdateProduct')->middleware('farmerValid');
Route::get('/UpdateProduct/{id}',[ProductController::class, 'productUp'])->name('productUp')->middleware('farmerValid');
Route::post('/ProductinfoUpdate',[ProductController::class, 'prodInfoUp'])->name('productInfoUp')->middleware('farmerValid');