<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});
// ruta para login del sistema
Route::get('usuario/login','UsuarioController@login');

Route::post('usuario/autenticar','UsuarioController@autenticar');
Route::get('usuario/logout','UsuarioController@logout');
Route::get('test','UsuarioController@test');

// ruta para poder acceder a la pagina principal del administrador
Route::get('administrador/home','AdministradorController@home');
Route::get('administrador/crear_usuario','AdministradorController@crear_usuario');
Route::post('administrador/almacenar_usuario','AdministradorController@alamacenar_usuario');
Route::get('administrador/ver_usuarios','AdministradorController@ver_usuarios');
Route::get('administrador/editar_usuario/{id}','AdministradorController@editar_usuario');
Route::post('administrador/editar_usuario','AdministradorController@actualizar_usuario');
Route::post('administrador/cambiar_password','AdministradorController@cambiar_password');
Route::get('administrador/eliminar_usuario/{id}','AdministradorController@eliminar_usuario');
Route::get('administrador/ver_usuario/{id}','AdministradorController@ver_usuario');

Route::post('administrador/subir_imagen_usuario','AdministradorController@subir_imagen_usuario');