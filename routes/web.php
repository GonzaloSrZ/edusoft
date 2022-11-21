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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/aprender', function () {
    return view('aprender');
})->name('aprender');

Route::get('/evaluacion/index', function () {
    return '/evaluacion/index.htm';
})->name('evindex');


Route::get('/practicar', function () {
    return view('practica');
})->name('practicar');

Route::get('/evaluar', function () {
    return view('evaluacion');
})->name('evaluar');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
