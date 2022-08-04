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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function() {
    return view('home');
});

Route::get('/APropos', function() {
    return view('apropos');
});

Route::get('/bts', function() {
    return view('bts');
});

Route::get('/Parcours', function() {
    return view('parcours');
});

Route::get('/Projets', function() {
    return view('projets');
});

Route::get('/Veille', function() {
    return view('veille');
});

Route::get('/Certifications', function() {
    return view('certifications');
});

Route::get('/Contact', function() {
    return view('contact');
});
