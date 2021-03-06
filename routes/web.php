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

// Route::get('/', 'PagesController@index');

// Route::post('index/send', 'IndexEmailController@send');
Route::get('/', 'IndexController@index');

Route::post('index/send', 'IndexController@send');

Route::get('pages/about-me', 'PagesController@about');

Route::get('pages/contact', 'PagesController@contact');

Route::post('sendemail/send', 'SendEmailController@send');

Route::get('pages/blog-posts', 'PagesController@blog');

Route::post('subscribe/send', 'SubscribeController@send');
