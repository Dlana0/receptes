<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('main');
});

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');


Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/desserts', function () {
    return view('pages/desserts');
});
Route::get('/breakfasts', function () {
    return view('pages/breakfasts');
});
Route::get('/canned', function () {
    return view('pages/canned');
});
Route::get('/pastry', function () {
    return view('pages/pastry');
});
Route::get('/salads', function () {
    return view('pages/salads');
});

Route::get('/addrecipe', function () {
    return view('pages/addrecipe');
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
