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




Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('challenge','ChallengesController');

Route::get('/', 'ChallengesController@home');

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

Route::get('challenges/login/{id}','ChallengesController@login')->name('loginme')->middleware('auth');
Route::post('challenges/login','ChallengesController@checkLogin')->name('checklogin')->middleware('auth');

Route::get('challenges/osint/{id}','ChallengesController@osint')->name('osint')->middleware('auth');
Route::post('challenges/osint','ChallengesController@checkAnswer')->name('checkans')->middleware('auth');

Route::get('challenges/quiz/{id}','ChallengesController@quiz')->name('quiz')->middleware('auth');
Route::post('challenges/quiz1','ChallengesController@checkAnswer1')->name('checkanswer1')->middleware('auth');
Route::post('challenges/quiz2','ChallengesController@checkAnswer2')->name('checkanswer2')->middleware('auth');
Route::post('challenges/quiz3','ChallengesController@checkAnswer3')->name('checkanswer3')->middleware('auth');
Route::post('challenges/quiz4','ChallengesController@checkAnswer4')->name('checkanswer4')->middleware('auth');
Route::post('challenges/quiz5','ChallengesController@checkAnswer5')->name('checkanswer5')->middleware('auth');

Route::get('challenges/popmeup/{id}','ChallengesController@popmeup')->name('popmeup')->middleware('auth');



Route::get('perfomance/{id}','PerfomanceController@not')->middleware('auth');
Route::post('perfomance/{id}','PerfomanceController@store')->name('storePerfomance')->middleware('auth');
//to redirect back when perfomance hit with a get request
