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
    return view('home/index');
});

Route::get('pages/about-me', function () {
    return view('pages/about-me');
});

Route::get('pages/contact-us', function () {
  return view('pages/contact-us');
});

Route::get('pages/contact', 'PagesController@contact');

Route::post('sendemail/send', 'SendEmailController@send');

Route::get('pages/blog-posts', function () {
  return view('pages/blog-posts');
});
