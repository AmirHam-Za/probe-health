<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/home-collection', function () {
    return view('home-collection');
})->name('home-collection');
Route::get('/find-test', function () {
    return view('find-test');
})->name('find-test');
Route::get('/find-doctor', function () {
    return view('find-doctor');
})->name('find-doctor');
Route::get('/find-doctor', function () {
    return view('find-doctor');
})->name('find-doctor');
