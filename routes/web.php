<?php

use Illuminate\Support\Facades\Route;

Route::get('/listings', 'ListingController@index');
Route::post('/listings', 'ListingController@store');
Route::get('/about', 'ListingController@about');

Route::get('/', function () {
    return view('welcome');
});
