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

Route::get('/','LoginController@home');
Route::post('/addemail','LoginController@addEmail');
Route::post('/updaterole/{id}','LoginController@updateRole');
Route::get('/sign-in','AuthController@signin');
Route::get('/sign-in/redirect','AuthController@signinRedirect');
Route::get('/sign-out','AuthController@signout');
Route::get('/administration','LoginController@adminView');
Route::get('/modules','ModuleController@index');
Route::post('/createModule','ModuleController@createModule');
Route::get('/deleteModule/{module}','ModuleController@deleteModule');
Route::get('/updateModule/{module}','ModuleController@updateModule');
Route::patch('/update/{module}','ModuleController@update');


Route::get('/index','AdminController@index');
Route::get('/moduleSurveys','AdminController@moduleSurveys');
Route::get('/auth','AdminController@auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
