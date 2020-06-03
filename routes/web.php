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

Route::view('/', 'pages.welcome')->name('welcome');

Route::view('/chat', 'pages.chat')->name('chat');

Route::name('tweet-to-json.')->prefix('tweet-to-json')->group(function() {
    Route::get('tweet', 'TweetToJsonController@index')->name('index');
    Route::get('tweet/get', 'TweetToJsonController@getTweet')->name('get');
});
