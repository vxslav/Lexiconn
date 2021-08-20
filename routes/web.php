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

// Profiles / CRUD and Browse

Route::get('/profile', 'App\Http\Controllers\ProfileController@index')->middleware(['auth'])->name('profile');

Route::get('/create-profile', 'App\Http\Controllers\ProfileController@create')->middleware(['auth'])->name('create-profile');
Route::post('/create-profile/new', 'App\Http\Controllers\ProfileController@store')->middleware(['auth'])->name('create');

Route::get('/edit-profile/{id}', 'App\Http\Controllers\ProfileController@edit')->middleware(['auth'])->name('edit-profile');

Route::post('/edit-profile/update/{id}', 'App\Http\Controllers\ProfileController@update')->middleware(['auth'])->name('save-updates');

Route::get('/browse-profiles', 'App\Http\Controllers\UserController@index')->middleware(['auth'])->name('browse-profiles');
Route::get('/browse-profiles/{id}', 'App\Http\Controllers\UserController@show')->name('view-profile');

Route::get('update-profile/delete/{id}', 'App\Http\Controllers\ProfileController@destroy')->middleware(['auth'])->name('delete-profile');
Route::get('delete-user/{id}', 'App\Http\Controllers\UserController@destroy')->middleware(['auth'])->name('delete-user');

// Movies and TV 

Route::get('/movies', 'App\Http\Controllers\MoviesController@index')->name('movies.index');
Route::get('/movies/{id}', 'App\Http\Controllers\MoviesController@show')->name('movies.show');

Route::get('/tv', 'App\Http\Controllers\TVController@index')->name('tv.index');
Route::get('/tv/{id}', 'App\Http\Controllers\TVController@show')->name('tv.show');

// Articles

Route::get('/articles', 'App\Http\Controllers\ArticleController@index')->name('articles.index');
Route::get('/article/{id}', 'App\Http\Controllers\ArticleController@show')->middleware(['auth'])->name('article.show');

Route::get('/create-article', 'App\Http\Controllers\ArticleController@create')->middleware(['auth'])->name('articles.create');
Route::post('/articles/new', 'App\Http\Controllers\ArticleController@store')->middleware(['auth'])->name('article.store');
Route::get('/articles/{id}', 'App\Http\Controllers\ArticleController@edit')->middleware(['auth'])->name('article.edit');
Route::post('/articles/update/{id}', 'App\Http\Controllers\ArticleController@update')->middleware(['auth'])->name('article.update');
Route::get('/article/delete/{id}', 'App\Http\Controllers\ArticleController@destroy')->middleware(['auth'])->name('article.delete');



require __DIR__.'/auth.php';
