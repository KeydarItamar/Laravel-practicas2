<?php

use App\Http\Controllers\PrimerControlador;
use App\Http\Controllers\signController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Ruta simple al signin
Route::get('/sign/signin', function () {
    return view('signin');
});

//ruta simple al signup
Route::get('/sign/signup', function () {
    return view('signup');
});

//ruta simple al signup
// Route::get('/sign/signup/{creacio}/{usuario}/{nou}', function ($creacio, $usuari, $nou) {
//     $frase = $creacio . ' '. $usuari . ' ' . $nou;
//     return view('signup')-> with('frase', $frase);
// });

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post/{id}', function ($id) {
    return 'El id introducido es : ' . $id;
});

Route::post('/login', [PrimerControlador::class, 'controlUsuaris'])->name('controlerEmail')->middleware('web','email');  

Route::get('/error', function () {
    return view('errorAcces');
})->name('errorAcces');

Route::get('/crearUsuari',function (){
    return view('crearUsuari');
})->name('/crearUsuari');

Route::get('/login',function(){
    return view('login');
})->name('web_login');

Route::post('/mostrarUsuario', [PrimerControlador::class, 'datosUsuario'])->middleware('web');