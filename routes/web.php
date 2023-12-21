<?php

use App\Http\Controllers\piezasController;
use App\Http\Controllers\ayuda_tecnicosController;
use App\Http\Controllers\UserSettingsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuscripcionController;


use Illuminate\Support\Facades\Auth;

//Ruta de inicio
Route::get('/', function () {
    return view('welcome');
});

// Ruta para las piezas
Route::resource('/piezas', piezasController::class);

//Ruta de inicio de sesion
Route::get ('/home', function(){
    $user = \Auth::user();
    return view('home', ['user'=>$user]);
})->middleware(['auth', 'verified'])->name('home');

// Ruta sobre nosotros
Route::get ('/nosotros', function(){
    $user=\Auth::user();
    return view('nosotros', ['user'=>$user]);
})->name('nosotros');

//Ruta ayuda tecnicos
Route::get ('/ayuda_tecnicos', function(){
    $user=\Auth::user();
    return view('ayuda_tecnicos', ['user'=>$user]);
})->name('ayuda_tecnicos');

//Ruta del formulario
Route::get('/ayuda_tecnicos', [ayuda_tecnicosController::class, 'index'])->name('ayuda_tecnicos');
Route::post('/ayuda_tecnicos', [ayuda_tecnicosController::class, 'store']);

//Ruta para salir
Route::get('/logout', function (){
    Auth::logout();
    return view('welcome');
})->name('logout');

//Ruta registrarse
Route::get('/register', function (){
    return view('auth.register');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Editar perfil
Route::get('/NewPassword',  [UserSettingsController::class,'NewPassword'])->name('NewPassword')->middleware('auth');
Route::post('/change/password',  [UserSettingsController::class,'changePassword'])->name('changePassword');
Route::delete('/delete-account', 'App\Http\Controllers\UserSettingsController@destroy')->name('delete-account')->middleware('auth');



//Ruta para la suscripcion del boletin
Route::post('/tabla_suscripciones', [SuscripcionController::class, 'store'])->name('tabla_suscripciones.store');