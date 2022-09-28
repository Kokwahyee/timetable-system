<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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
/*
    Common Resource Routes;
    index - shows all listing;
    show - show single listing
    create - show form to create new listing
    store - store new listing
    edit- show form to edit the listing
    update - update listing
    destroy - delete listin
*/
//testing git pushes

//All Listings
Route::get('/',[ListingController::class,'index']);

Route::get('/index1',[ListingController::class,'index1']);

//Show create form
Route::get('/listings/create',[ListingController::class,'create'])->middleware('auth');

//Store Listing Data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

//Show edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//Update
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

//Manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);



//Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('auth');

//Create New User
Route::post('/users', [UserController::class, 'store'])->middleware('auth');

//Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


/* Reference
//route with response
Route::get('/hello', function() {
    return response ('<h1>Hello World</h1>', 200)
        ->header('Content-Type', 'text/plain')
        ->header('foo', 'bar');
});

//route with respnse as well as wild card
Route::get('/posts/{id}', function($id){
    return response ('Post '. $id);
})->where('id','[0-9]+');//adding contraint with the function


Route::get('/search', function(Request $request) {
    return $request->name . ' ' . $request->city;
});
// http://127.0.0.1:8000/search?name=Brad&city=Suva
*/
