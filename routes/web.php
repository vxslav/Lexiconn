<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/update-profile', 'App\Http\Controllers\ProfileController@index')->middleware(['auth'])->name('update-profile');
Route::post('/update-profile', 'App\Http\Controllers\ProfileController@store')->middleware(['auth'])->name('update-profile');
//Route::get('/edit-profile/{id}', 'App\Http\Controllers\ProfileController@edit')->middleware(['auth'])->name('edit');
//Route::get('/edit-profile/update/{id}', 'App\Http\Controllers\ProfileController@update')->middleware(['auth'])->name('edit-profile');


Route::get('/browse-profiles', 'App\Http\Controllers\UserController@index')->middleware(['auth'])->name('browse-profiles');;

Route::get('/my-profile', function(){
   return view('profile');
})->middleware(['auth'])->name('my-profile');

Route::get('update-profile/delete/{id}', 'App\Http\Controllers\ProfileController@destroy')->middleware(['auth'])->name('delete-profile');
Route::get('delete-user/{id}', 'App\Http\Controllers\UserController@destroy')->middleware(['auth'])->name('delete-user');

require __DIR__.'/auth.php';
