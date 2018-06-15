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
    return view('index');
});

Auth::routes();

//Vistas
Route::view('/decla' , 'declarations');

//controladores
Route::get('/home', 'HomeController@index')->name('home');




/**
 * Mostrar declaraciones
 */
Route::get('/declaraciones',function(){
    return view('createDeclaration');
});

/*
 * Agregar declaraciones
 */

Route::post('/declaracion', function (Request $request){

});

/*
 * Eliminar una declaracion
 */

Route::delete('/declaracion/{id}', function ($id){

});