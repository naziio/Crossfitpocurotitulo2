<?php

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

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/', function () {
    return view('welcome');
    });

Route::get('/tabla' , 'HomeController@tabla');

});
Route::get('/home', [
    'uses' => 'HomeController@index',
    'as'   => 'home'
]);
Route::get('/', [
    'uses' => 'Admin\NoticiaController@show',
    'as'   => 'home'
]);
Route::group(['middleware' => 'auth'], function () {

    Route::get('account', function () {
        return view('account');
    });

    Route::get('account/password', 'AccountController@getPassword');
    Route::post('account/password', 'AccountController@postPassword');

    Route::get('account/edit-profile', 'AccountController@editProfile');
    Route::put('account/edit-profile', 'AccountController@updateProfile');





    Route::resource('bio', 'BioUserController');

    Route::resource('comparar', 'CompararController');

    //Route::resource('maqueta','MaquetaController');

    Route::resource('wodfijo','WodFijoController');
    //Route::resource('pago', 'PagoController');
    Route::resource('comparar', 'CompararController');


    Route::get('evaluacion/habilitar/edit', 'EvaluacionController@habilitaredit');
    Route::put('evaluacion/habilitar/edit', 'EvaluacionController@habilitarupdate');

    Route::get('evaluacion/completa','EvaluacionController@completa');

    Route::get('evaluacion/completa/{id}',[
        'as' => 'evaluacion.completa',
        'uses' => 'EvaluacionController@completa'
    ]);


    Route::resource('evaluacion', 'EvaluacionController');



    Route::group(['prefix'=>'admin','namespace'=>'Admin', 'middleware' => 'role:user'], function(){


        Route::resource('noticia', 'NoticiaController');
        Route::resource('users', 'AdminController');
        Route::resource('woddiario', 'WodDiarioController');
        Route::resource('subirwod', 'SubirWodController');
        Route::resource('pago', 'PagoController');
        Route::resource('tipopago', 'TipoPagoController');








    });



});