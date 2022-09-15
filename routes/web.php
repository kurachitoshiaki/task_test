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

Route::get('tests/test', 'App\Http\Controllers\TestController@index');

Route::group(['prefix' => 'contact', 'middleware' => 'auth'], function(){

    Route::get('index', 'App\Http\Controllers\ContactFormController@index')->name('contact.index');
    Route::get('create', 'App\Http\Controllers\ContactFormController@create')->name('contact.create');
    Route::post('store', 'App\Http\Controllers\ContactFormController@store')->name('contact.store');
  

  });
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
