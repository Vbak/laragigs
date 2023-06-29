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
Route::get('/', function () {
    return view('listings',[
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

// single listing
Route::get('/listing/{id}',function ($id){
    return view('listing',[
        'heading' => 'Listing',
        'listing' => Listing::find($id)
    ]);
});


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
