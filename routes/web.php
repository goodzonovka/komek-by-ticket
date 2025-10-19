<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/sessions', 'pages.sessions')->name('sessions');
Route::view('/pushkins-map', 'pages.pushkins_map')->name('pushkins_map');
Route::view('/cinema', 'pages.cinema')->name('cinema');
Route::view('/contacts', 'pages.contacts')->name('contacts');
