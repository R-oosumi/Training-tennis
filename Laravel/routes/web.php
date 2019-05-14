<?php

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


Route::get('reslist', 'ReservationListController@index')->middleware('auth');

Route::get('newres', 'NewReservationController@add');
Route::post('newres', 'NewReservationController@create');

Route::get('editres', 'EditReservationController@edit');
Route::post('editres', 'EditReservationController@update');

Route::get('deleteres', 'DeleteReservationController@delete');
Route::post('deleteres', 'DeleteReservationController@remove');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
