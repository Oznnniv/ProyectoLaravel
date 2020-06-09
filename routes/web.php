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
//Route::view('/borrado', 'delete')->name('deleteee');
//Route::view('/', 'welcome')->name('Bienvenido');
//Route::view('/bienvenidos', 'welcomedos')->name('Bienvenidos');
//Route::view('/nosotros', 'about')->name('Nosotros');
//Route::view('/contacto', 'contact')->name('Contacto');
//Route::view('/productos', 'product')->name('Productos');
//Route::view('/estado', 'status')->name('Cuenta');
//Route::view('/pagos', 'payment')->name('Pagos');
//Route::view('/pagoss', 'pagos')->name('Pagoss');
//Route::view('/servicios', 'servicios')->name('Servicios');
//Route::view('/', 'services')->name('Servicio');
//Route::view('/aaaaaaaaa', 'temporaluno')->name('Temporal1');
//Route::view('/temporal2', 'temporaldos')->name('Temporal2');
//Route::view('/temporal3', 'temporaltres')->name('Temporal3');
//Route::view('/agregar', 'agregar')->name('Agregar');
//Route::view('/suscriptores', 'subs')->name('Supcriptores');
//Route::view('/suscripción', 'sus')->name('Supcripciones');
//Route::view('/datos', 'data')->name('Datos');


Auth::routes();



Route::resource('/servicio', 'ServicioController')->except('show')->middleware('auth');
Route::get('/servicio/{servicio}/details', 'ServicioController@details')->name('servicio.details')->middleware('auth');
Route::get('/servicio/{servicio}/mensaje', 'ServicioController@detailss')->name('servicio.detailss')->middleware('auth');
Route::get('/servicios', 'ServicioController@indexx');


Route::get('/bienvenido', 'HomeController@index')->name('Inicio')->middleware('auth');
Route::get('/suscriptores', 'UserController@index')->middleware('auth');
Route::get('/suscriptores/{id}/detail', 'UserController@show')->middleware('auth');
Route::get('/suscriptores/{id}/message', 'UserController@message')->middleware('auth');
Route::get('/suscriptores/{id}/historial', 'PagoController@detailss')->middleware('auth');



//Route::get('{id}/historial', 'UserController@shows');
Route::get('/servicioss', 'ServicioController@indexxx')->middleware('auth');
Route::resource('{id}/estado', 'PagoController')->except('show')->middleware('auth');
Route::get('{id}/historial', 'PagoController@details')->name('servicio.details')->middleware('auth');


//Route::view('/serviciosajax', '/suscriptor/serviciosajax');
//Route::view('/servicios', '/nadie/index');


//Route::view('/historial', 'historial');

Route::resource('/', 'SuscripciónController');

/*Route::get('/suscriptores/{id}/detail', function ($id) {
    $users = DB::table('users')
        ->where('id', $id)
        ->first();
})->name("servicio.details");*/