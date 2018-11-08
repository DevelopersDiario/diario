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
	return view('layout/inicio');
});

//Route::get('login', 'AuthUsersController@login')->name('login');

//Auth::routes();
/*********/

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'PublicacionController@index');

//Route::get('/home', 'ImagesController@getGroups');

Route::post('home/post', 'PublicacionController@post');


Route::post('home/eliminarp', 'PublicacionController@eliminarp');


Route::post('home/store', 'ImagesController@store');
Route::post('home/changeCover', 'ImagesController@changeCover');

//Route::get('home', 'GrupoController@obtenerGruposHome');
//Route::post('home/createGrupo', 'GrupoController@createGrupo');

Route::get('grupos', 'GrupoController@index')->name('grupos');

Route::get('grupos', 'GrupoController@obtenerGrupos');

Route::post('grupos', 'GrupoController@createGrupo');
//Route::post('grupos/seguirGrupo', 'SeguirGrupoController@seguirGrupo');



Route::get('configuracion', 'ConfiguracionController@index')->name('configuracion');

//Route::get('configuracion', 'UpdateConfigController@index');
//Route::get('configuracion', 'UpdateConfigController@getInfo');
Route::post('configuracion', 'UpdateConfigController@updatePassword');
Route::post('configuracion/updateEmail', 'UpdateConfigController@updateEmail');
Route::post('configuracion/updateInfo', 'UpdateConfigController@updateInfo');
Route::post('configuracion/updateInfoAcademica', 'UpdateConfigController@updateInfoAcademica');
Route::post('configuracion/updateInfoSocial', 'UpdateConfigController@updateInfoSocial');





//Route::get('grupos-view', 'GruposViewsController@index')->name('grupos-view');

Route::get('grupos-view','GruposViewsController@index');
Route::post('grupos-view/seguirGrupo', 'SeguirGrupoController@seguirGrupo');
Route::post('grupos-view/dejarSeguirGrupo', 'SeguirGrupoController@dejarSeguirGrupo');
//Route::post('configuracion', 'ConfiguacionController@actualizarInfoP');






Route::get('/pruebas', 'PruebaController@index');