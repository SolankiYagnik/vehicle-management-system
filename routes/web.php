<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\VehicleServiceController;
use App\Http\Controllers\CustomerVehicleServiceController;

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
    return view('auth.login');
});


Auth::routes();

Route::group(["prefix"=>'admin', 'middleware'=>['isadmin', 'auth']], function(){
    Route::get('/', [HomeController::class, 'index'])->name('admin');
    Route::get('/manage-user',[HomeController::class,'index'])->name('manage-user');
    Route::get('/add-user',[HomeController::class,'create'])->name('add-user');
    Route::post('/user-store',[HomeController::class,'store'])->name('store-user');
    Route::get('/user-edit/{id}',[HomeController::class,'edit'])->name('edit-user');
    Route::post('/user-update/{id}',[HomeController::class,'update'])->name('update-user');

    // category
    Route::get('/manage-category',[CategoryController::class,'index'])->name('manage-category');
    Route::get('/add-category',[CategoryController::class,'create'])->name('add-category');
    Route::post('/category-store',[CategoryController::class,'store'])->name('store-category');
    Route::get('/category-show/{id}',[CategoryController::class,'show'])->name('show-category');
    Route::get('/category-edit/{id}',[CategoryController::class,'edit'])->name('edit-category');
    Route::post('/category-update/{id}',[CategoryController::class,'update'])->name('update-category');
    Route::get('/category-destroy/{id}',[CategoryController::class,'destroy'])->name('destroy-category');

    // service
    Route::get('/manage-service',[VehicleServiceController::class,'index'])->name('manage-service');
    // Route::get('/add-category',[VehicleServiceController::class,'create'])->name('add-category');
    // Route::post('/category-store',[VehicleServiceController::class,'store'])->name('store-category');
    // Route::get('/category-show/{id}',[VehicleServiceController::class,'show'])->name('show-category');
    // Route::get('/category-edit/{id}',[VehicleServiceController::class,'edit'])->name('edit-category');
    // Route::post('/category-update/{id}',[VehicleServiceController::class,'update'])->name('update-category');
    // Route::get('/category-destroy/{id}',[VehicleServiceController::class,'destroy'])->name('destroy-category');


});


Route::group(["prefix"=>'user', 'middleware'=>['isuser', 'auth']], function(){
    Route::get('/', [CustomerController::class, 'index'])->name('customer');
    
    // Route::get('/service-add',[CustomerVehicleServiceController::class,'index'])->name('add-service');
    Route::get('/service-add',[CustomerVehicleServiceController::class,'create'])->name('add-service');
    Route::post('/service-store',[CustomerVehicleServiceController::class,'store'])->name('service');
    // Route::get('/lead-edit/{id}',[LeadController::class,'edit'])->name('edit-lead');
    // Route::post('/lead-update/{id}',[LeadController::class,'update'])->name('update-lead');

});

// => Update 26-03-2022 
// ------------------------------------------------------------
// => Vehicle Management System: 
// -> Theme-Integration = done 
// -> user login redirect issue = done 
// -> create table migration categories, services = done 
// -> category crud(create,read,update,delete) = done 
// -> user created service request form = done
// -> manage service request = done 
// ------------------------------------------------------------