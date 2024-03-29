<?php

use Illuminate\Support\Facades\Route;

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
//Route pour acceder a la methode index qui affiche la liste des projets de ControleurProjet
//Route::get('/projets', 'ControleurProjet@index');

//Route::get('/projets', 'App\Http\Controllers\ControleurProjet@index')->name('projets.index');
Route::resource('/projets', 'App\Http\Controllers\ControleurProjet');

