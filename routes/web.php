<?php

use App\Http\Controllers\loginController;

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
Route::get('/', function () {return view('home');});

// Route::get('/', function () {return view('home');})->middleware('auth');

// //Login
// Route::get('/login',[loginController::class,'index'])->name('login')->middleware('guest');
// Route::post('/login',[loginController::class,'authenticate']);
// Route::post('/logout',[loginController::class,'logout']);

// //register
// Route::post('/register','registerController@store');
// Route::get('/register','registerController@index')->middleware('guest');

//Master  Item
Route::get('/masteritem', 'masteritemController@index');
    //create
    Route::get('/masteritem/forminput', 'masteritemController@create'); 
    Route::post('/masteritem/input', 'masteritemController@store');
    //sort
    Route::post('/masteritem/search', 'masteritemController@show');
    //edit
    Route::get('/masteritem/{id}', 'masteritemController@edit');
    Route::patch('/masteritem/{id}', 'masteritemController@update');
    //delete
    Route::delete('/masteritem/{id}', 'masteritemController@destroy');


//Master  Lokasi
Route::get('/masterlokasi', 'masterlokasiController@index');
    //Create
    Route::get('/masterlokasi/forminput', 'masterlokasiController@create'); 
    Route::post('/masterlokasi/input', 'masterlokasiController@store');
    //sort
    Route::post('/masterlokasi/search', 'masterlokasiController@show');
    //edit
    Route::get('/masterlokasi/{id}', 'masterlokasiController@edit');
    Route::patch('/masterlokasi/{id}', 'masterlokasiController@update');
    //delete
    Route::delete('/masterlokasi/{id}', 'masterlokasiController@destroy');

//Transaction
Route::get('/transaction', 'transactionController@index');

