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

Route::get('/', 'LoginController@home');
Route::get('/sign-in', 'AuthController@signin');
Route::get('/sign-in/redirect', 'AuthController@signinRedirect');
Route::get('/sign-out', 'AuthController@signout');
Route::get('/auth', 'AdminController@auth');

Route::group(['middleware' => ['check']], function () {
    Route::group(['middleware' => ['roles:admin']], function () {
        Route::post('/addemail', 'LoginController@addEmail');
        Route::post('/updaterole/{id}', 'LoginController@updateRole');
        Route::get('/administration', 'LoginController@adminView');
        Route::post('/createModule', 'ModuleController@createModule');
        Route::get('/deleteModule/{module}', 'ModuleController@deleteModule');
        Route::get('/updateModule/{module}', 'ModuleController@updateModule');
        Route::patch('/update/{module}', 'ModuleController@update');
        Route::get('/modules', 'ModuleController@index');
    });

    Route::group(['middleware' => ['roles:darbuotojas,admin']], function () {
        Route::post('/activate-form', 'SelfAssessmentController@activateForm');
        Route::get('/delete-activate', 'SelfAssessmentController@deleteActivate');
        Route::get('/employeeMenu', 'AdminController@employeeView');
        Route::get('/assessmentReport', 'SelfAssessmentController@report');
        Route::get('/reportView/{report}', 'SelfAssessmentController@reportView');
    });

    Route::group(['middleware' => ['roles:mokytojas,admin']], function () {
        Route::get('/assessment', 'SelfAssessmentController@assessment')->middleware('form.active');
        Route::post('/saveQuali', 'QualificationController@saveQuali');
        Route::patch('/storeAssessment', 'SelfAssessmentController@storeAssessment');
    });

    Route::group(['middleware' => ['roles:moksleivis,admin']], function () {
        Route::get('/survey/{module}', 'SurveyController@survey');
        Route::post('/saveSurvey/{module}', 'SurveyController@saveSurvey');
        Route::get('/moduleSurveys', 'AdminController@moduleSurveys');
    });
    Route::group(['middleware' => ['roles:darbuotojas,mokytojas,admin']], function () {
        Route::get('/self-assessment', 'SelfAssessmentController@activateView');
        Route::get('/qualification', 'QualificationController@index');
    });

    
    Route::get('/restriction', 'AdminController@restriction')->middleware('roles:moksleivis,darbuotojas,mokytojas,admin');
});
