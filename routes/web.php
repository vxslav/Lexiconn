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

Route::get('/profile', 'App\Http\Controllers\ProfileController@index')->middleware(['auth'])->name('profile');

Route::get('/create-profile', 'App\Http\Controllers\ProfileController@create')->middleware(['auth'])->name('create-profile');
Route::post('/create-profile/new', 'App\Http\Controllers\ProfileController@store')->middleware(['auth'])->name('create');

Route::get('/edit-profile/{id}', 'App\Http\Controllers\ProfileController@edit')->middleware(['auth'])->name('edit-profile');

Route::post('/edit-profile/update/{id}', 'App\Http\Controllers\ProfileController@update')->middleware(['auth'])->name('save-updates');

Route::get('/browse-profiles', 'App\Http\Controllers\UserController@index')->middleware(['auth'])->name('browse-profiles');
Route::get('/browse-profiles/{id}', 'App\Http\Controllers\UserController@show')->name('view-profile');

Route::get('update-profile/delete/{id}', 'App\Http\Controllers\ProfileController@destroy')->middleware(['auth'])->name('delete-profile');
Route::get('delete-user/{id}', 'App\Http\Controllers\UserController@destroy')->middleware(['auth'])->name('delete-user');



require __DIR__.'/auth.php';
