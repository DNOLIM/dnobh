<?php

use App\Http\Controllers\EcomController;
use Illuminate\Support\Facades\Route;

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

Route::get('/admin/dashboard',[EcomController::class,'index']->name('displayproduct');
Route::get('/admin/dashboard/create',[EcomController::class,'create'])->name('add');
Route::post('/formsaver',[EcomController::class,'store'])->name('save');
Route::get('/showproduct',[EcomController::class,'index'])->name('show');
Route::get('/editproduct/{id}',[EcomController::class,'edit'])->name('modify');
Route::post('/updateproduct/{id}',[EcomController::class,'update'])->name('change');
Route::get('/deleteproduct/{id}',[EcomController::class,'destroy'])->name('destroy');