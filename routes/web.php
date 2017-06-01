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
    return view('home.index');
});
Route::get('/shop', function () {
    return view('shop.shop');
});

Route::get('/characters_online', 'Character\CharacterController@online_players_all');
Route::get('/characters_profile', 'CharacterController@player_profile');
Route::get('/characters_search', 'CharacterController@search_player');
