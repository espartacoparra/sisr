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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'security','middleware'=>'auth'],function(){
//Proyectos de largo plazo
Route::resource('/user','ProjectController');
Route::get('/user/p/propuestos','ProjectController@propuestos');
Route::get('/user/p/aprobados','ProjectController@aprobados');
Route::get('/user/p/finalizados','ProjectController@finalizados');
Route::get('/user/p/cobrados','ProjectController@cobrados');
Route::get('/user/{id}/ver','ProjectController@ver');
Route::get('/user/p/{id}/cambiarp','ProjectController@cambiarp'
);
Route::get('/user/p/{id}/cambiara','ProjectController@cambiara');
Route::get('/user/p/{id}/cambiarf','ProjectController@cambiarf');
Route::get('/user/p/{id}/cambiarc','ProjectController@cambiarc');
//imagenes
Route::get('/user/p/{id}/addimg','ProjectController@addimg');
Route::get('/user/p/{id}/delimg','ProjectController@delimg');
Route::get('/user/p/{id}/{name}/deleteimg','ProjectController@deleteimg');
Route::post('/user/p/{id}/updateimg','ProjectController@updateimg');
//planos
Route::get('/user/p/{id}/addplan','ProjectController@addplan');
Route::get('/user/p/{id}/delplan','ProjectController@delplan');
Route::post('/user/p/{id}/updateplan','ProjectController@updateplan');
Route::get('/user/p/{id}/{name}/deleteplan','ProjectController@deleteplan');
//contratos
Route::get('/user/p/{id}/addcontract','ProjectController@addcontract');
Route::get('/user/p/{id}/delcontract','ProjectController@delcontract');
Route::post('/user/p/{id}/updatecontract','ProjectController@updatecontract');
Route::get('/user/p/{id}/{name}/deletecontract','ProjectController@deletecontract');

//Proyectos de largo plazo
});


Route::get('p',function(){
	return view('p');
});