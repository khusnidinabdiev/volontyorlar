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

Auth::routes();

//HomeController
Route::get('/home', 'HomeController@index')
->name('home');
Route::get('/home/add','HomeController@add')
->name('add');
Route::post('/home/send','HomeController@send')
->name('send');


//TalkController
// Route::post('/home/talk','TalkController@talk')
// ->name('talk');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
