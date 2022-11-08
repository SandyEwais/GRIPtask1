<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TransformationController;
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

Route::get('/home', function () {
    return view('index');
})->name('home');

Route::get('/customers',[CustomerController::class,'viewAllCustomers'])->name('view-customers');
Route::get('/customers/{customer}',[CustomerController::class,'viewSingleCustomer'])->name('view-customer');
Route::get('transfer/{customer}',[CustomerController::class,'showTransferForm'])->name('transferForm');
Route::post('transfer',[CustomerController::class,'transfer'])->name('transfer');


Route::get('/transformations',[TransformationController::class,'viewTransformationsHistory'])->name('transformations-history');
