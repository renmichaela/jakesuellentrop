<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::view('/', 'pages.welcome')->name('welcome');
Route::view('/chat', 'pages.chat')->name('chat');
Route::view('/components', 'pages.components')->name('components');

Route::get('/memes', 'MemeController@index')->name('memes.index');
Route::post('/memes', 'MemeController@upload')->name('memes.upload');

Route::name('tweet-to-json.')->prefix('tweet-to-json')->group(function() {
    Route::get('tweet', 'TweetToJsonController@index')->name('index');
    Route::get('tweet/get', 'TweetToJsonController@getTweet')->name('get');
});
