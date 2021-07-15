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

Route::get('/browse-profiles', 'App\Http\Controllers\UserController@index')->middleware(['auth'])->name('browse-profiles');;

Route::get('/my-profile', function(){
   return view('profile');
})->middleware(['auth'])->name('my-profile');



require __DIR__.'/auth.php';
