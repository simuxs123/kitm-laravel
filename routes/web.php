<?php

use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/sign-in','AuthController@signin');
Route::get('/sign-in/redirect','AuthController@signinRedirect');
Route::get('/sign-out','AuthController@signout');
Route::get('/auth','AdminController@auth');
Route::get('/index','AdminController@index');

Route::group(['middleware' => ['roles:admin']], function() {
    Route::post('/addemail','LoginController@addEmail');
    Route::post('/updaterole/{id}','LoginController@updateRole');
    Route::get('/administration','LoginController@adminView');
    Route::post('/createModule','ModuleController@createModule');
    Route::get('/deleteModule/{module}','ModuleController@deleteModule');
    Route::get('/updateModule/{module}','ModuleController@updateModule');
    Route::patch('/update/{module}','ModuleController@update');
});

Route::group(['middleware' => ['roles:moksleivis,admin,mokytojas,darbuotojas']], function() {
    Route::get('/modules','ModuleController@index');
    Route::get('/survey/{module}','SurveyController@survey');
    Route::post('/saveSurvey/{module}','SurveyController@saveSurvey');
    Route::get('/moduleSurveys','AdminController@moduleSurveys');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
