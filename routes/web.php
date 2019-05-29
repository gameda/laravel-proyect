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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/profile/{user}', 'ProfileController@index')->name('profile.show');







/*
Route::get('/usuarios', function () {
    return "usuarios";
});

//Usuarios nuevos != usuarios/[0-9]+


Route::get('/usuario/nuevo', function () {
    return "Crear usuario nuevo";
});

Route::get('/usuario/{id}', function ($id) {
    return "Monstrando detalle del usuario: {$id}";

})->where('id', '[0-9]+');


Route::get('/saludo/{name}/{nick?}', function ($name, $nick) {
    return "Bienvenido  {$name}, tu apodo es {$nick}";

});

Route::get('/saludo/{name}/{nick?}', function ($name, $nick = null) {

	if($nick){
	    return "Bienvenido  {$name}, tu apodo es {$nick}";

	}
	else {
		return "Bienvenido  {$name}";
	}

});*/
