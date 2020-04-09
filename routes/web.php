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

Route::get('challenges/letherlogin/{id}', 'ChallengesController@letHerLogin')->name('letherlogin')->middleware('auth');
Route::get('challenges/letherforgot/{id}', 'ChallengesController@letHerForgot')->name('letherforgot')->middleware('auth');
Route::post('challenges/letherforgot', 'ChallengesController@letHerCheck')->name('lethercheck')->middleware('auth');

Route::get('challenges/whoami/{id}','ChallengesController@whoAmI')->name('whoami')->middleware('auth');

Route::get('challenges/chessboard/{id}','ChallengesController@chessBoard')->name('chessboard')->middleware('auth');
Route::post('challenges/chessboard','ChallengesController@checkBoard')->name('checkboard')->middleware('auth');


Route::get('challenges/secretmessage/{id}','ChallengesController@secretmessage')->name('secretmessage')->middleware('auth');
Route::post('challenges/secretmessage','ChallengesController@checkMessage')->name('checkmessage')->middleware('auth');

Route::get('challenges/injection/{id}','ChallengesController@injection')->name('injection')->middleware('auth');
Route::post('challenges/injection','ChallengesController@checkInjection')->name('checkinjection')->middleware('auth');





Route::post('perfomance/{id}','PerfomanceController@store')->name('storePerfomance')->middleware('auth');
//to redirect back when perfomance hit with a get request
Route::get('perfomance/{id}', function () {
    return redirect()->back();
});




Route::get('who', function () {
    return view('pages.who',['title'=>'Home', 'id' => '1']);
});


Route::get('base', function () {
    return view('pages.base',['title'=>'Home', 'id' => '1']);
});