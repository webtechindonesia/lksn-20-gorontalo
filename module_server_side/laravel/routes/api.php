<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix('auth')->namespace('auth')->group(function () {
    
    Route::get('user', 'AuthController@user')->middleware('auth:api');
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
});

Route::get('vote', 'VoteController@index');
Route::get('poll', 'PollController@index');
Route::get('choice', 'ChoiceController@index');
Route::post('submitVote', 'VoteController@store');