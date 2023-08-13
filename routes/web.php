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

Route::get('/', 'App\Http\Controllers\PizzaController@homepage');
Route::get('/pizza/orders', 'App\Http\Controllers\OrderController@index')->name('pizza.orders')->middleware('auth');
Route::get('/pizza/orders/{id}', 'App\Http\Controllers\OrderController@show')->middleware('auth');
Route::get('/pizza/create', 'App\Http\Controllers\PizzaController@create')->name('pizza.create');
Route::get('/pizza/{id}', 'App\Http\Controllers\PizzaController@details');
Route::post('/pizza', 'App\Http\Controllers\OrderController@store')->name('pizza.store');
Route::delete('/pizza/orders/{id}', 'App\Http\Controllers\OrderController@destroy')->name('pizza.destroy')->middleware('auth');

Auth::routes([
    'register' => true
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
