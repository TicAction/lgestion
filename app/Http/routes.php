<?php
use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::auth();

Route::get('/home', 'HomeController@index');


//route pour la liste des enfants

Route::group(['prefix'=>'admin','middleware'=>'admin'], function(){

    Route::resource('enfant','KidController');
    Route::get('code','KidController@code');
    Route::resource('profil','ProfilController');
    Route::get('profil/create/{id}','ProfilController@create');
    Route::resource('devoir','HomeworkController');
    Route::resource('formulaire','FormHomeworkController');
    Route::resource('comportement','BehaviorController');
    Route::get('comportement/create/{id}','BehaviorController@create');
    Route::get('comportement/liste/{id}','BehaviorController@liste');
    Route::resource('group','GroupController');
    Route::get('liste/parent','KidController@guardian');
    Route::get('backend','Admin\BackendController@index');
    Route::resource('observation','ObservationController');
    Route::resource('horaire','ScheduleController');
    Route::resource('ecole','SchoolController');
    Route::resource('document','FileController');
});



//Route administration
Route::get('/admin/login','Admin\AuthController@showLoginForm');
Route::post('/admin/login','Admin\AuthController@login');
Route::get('/admin/logout','Admin\AuthController@logout');
// Registration Routes...
Route::get('admin/register', 'Admin\AuthController@showRegistrationForm');
Route::post('admin/register', 'Admin\AuthController@register');

// Password reset
Route::post('admin/password/reset', 'Admin\AuthController@register');

Route::get('/admin','AdminController@index');
Route::get('/admin/homework','AdminController@homework');
Route::get('/admin/fhomework','AdminController@fhomework');


