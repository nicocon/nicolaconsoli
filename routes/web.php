<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/chi-sono', 'pages.about')->name('about');
Route::view('/progetti', 'pages.projects')->name('projects');
Route::view('/playground', 'pages.playground')->name('playground');
Route::view('/contatti', 'pages.contacts')->name('contacts');

Route::view('/progetti/amiataflow', 'pages.projects.amiataflow')->name('projects.amiataflow');
Route::view('/progetti/nohavolley', 'pages.projects.nohavolley')->name('projects.nohavolley');
Route::view('/progetti/nicolaconsoli', 'pages.projects.nicolaconsoli')->name('projects.nicolaconsoli');