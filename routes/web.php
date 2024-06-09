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

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/find-doctor', function () {
    return view('find-doctor');
})->name('find-doctor');

Route::get('/find-doctor', function () {
    return view('find-doctor');
})->name('find-doctor');

Route::get('/center', function () {
    return view('center');
})->name('center');

Route::get('/health-package', function () {
    return view('health-package');
})->name('health.package');

Route::get('/company-profile', function () {
    return view('about-us.company-profile');
})->name('company.profile');

Route::get('/csr', function () {
    return view('about-us.csr');
})->name('csr');

Route::get('/customer-care', function () {
    return view('about-us.customer-care');
})->name('customer.care');

Route::get('/team-of-experts', function () {
    return view('about-us.team-of-experts');
})->name('experts.team');


