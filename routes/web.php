<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;

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
    return view('pages.home',['title'=>'Home']);
});


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('challenge','ChallengesController');

Route::get('challenges/findme/{id}', 'ChallengesController@findme')->name('findme')->middleware('auth');

Route::post('perfomance/{id}','PerfomanceController@store')->name('storePerfomance')->middleware('auth');

//to redirect back when perfomance hit with a get request
Route::get('perfomance/{id}', function () {
    return redirect()->back();
});