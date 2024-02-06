<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;
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
// All listings
Route::get('/', [\App\Http\Controllers\ListingController::class,'index']);



//Show create form
Route::get('/listings/create',[\App\Http\Controllers\ListingController::class,'create'])
->middleware('auth');
//Store the create form
Route::post('/listings',[\App\Http\Controllers\ListingController::class,'store'])->middleware('auth');

//Manage Listings
Route::get('/listings/manage',[\App\Http\Controllers\ListingController::class,'manage'])->middleware('auth');

//Show Edit form
Route::get('/listings/{listing}/edit',[\App\Http\Controllers\ListingController::class,'edit'])->middleware('auth');

// Submit Edited form
Route::put('/listings/{listing}',[\App\Http\Controllers\ListingController::class,'update'])->middleware('auth');

//Delete listing
Route::delete('/listings/{listing}',[\App\Http\Controllers\ListingController::class,'destroy'])->middleware('auth');

// This one must be last because it checks the brackets
// single listing
Route::get('/listings/{listing}', [\App\Http\Controllers\ListingController::class,'show']);

/**
 * Routes for Users here
 */
//Show register form
Route::get('/register',[\App\Http\Controllers\UserController::class,'create'])->middleware('guest');

//Create new user
Route::post('/users',[\App\Http\Controllers\UserController::class,'store']);

//Log out user
Route::post('/logout',[\App\Http\Controllers\UserController::class,'logout'])->middleware('auth');

//Show log in form
Route::get('/login',[\App\Http\Controllers\UserController::class,'login'])->name('login')->middleware('guest');

Route::post('/users/authenticate',[\App\Http\Controllers\UserController::class,'authenticate']);













// Examples for Routers
//Route::get('/posts/{id}',function ($id){
//
//    return response('Post '.$id);
//})->where('id','[0-9]+');
//
//
//Route::get('/search',function (Request $request ){
//$name = $request->name;
//$city = $request->city;
//});
