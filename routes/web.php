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
    return view('home');
})->name('home');
Route::get('/services', function () {
    return view('service');
})->name('services');
Route::get('/works', function () {
    return view('work');
})->name('works');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/documentation', function () {
    return view('documentation.documentation');
})->name('documentation');
Route::post('/send', 'ContactFormController@postContactForm')->name('send');