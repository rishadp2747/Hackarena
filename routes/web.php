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
    return view('pages.home',['title'=>'Home']);
});


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('challenge','ChallengesController');

Route::get('/challenges/findme/{id}','ChallengesController@findme')->name('findme')->middleware('auth');

Route::get('/challenges/base/{id}','ChallengesController@base')->name('base')->middleware('auth');

Route::post('/challenges/updation/{id}','PerformanceController@store')->name('storePerformance')->middleware('auth');


