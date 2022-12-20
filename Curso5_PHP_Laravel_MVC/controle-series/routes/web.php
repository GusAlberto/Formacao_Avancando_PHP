<?php

use App\Http\Controllers\EpisodesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SeasonsController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\Autenticador;
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

// ROTA INICIAL DA NOSSA APLICAÇÃO QUE REDIRECIONA PARA LOGIN
Route::get('/', function () {
    return redirect('/series');
})->middleware(Autenticador::class);

// ROTA PARA EXIBIR AS SÉRIES
Route::resource('/series', SeriesController::class);

// ROTA PARA CRIAR SÉRIES NA APLICAÇÃO
Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])
    ->name('seasons.index');

// ROTA PARA EXIBIR EPISÓDIOS DAS SÉRIES
Route::get('/seasons/{season}/episodes', [EpisodesController::class, 'index'])
    ->name('episodes.index');

// ROTA PARA MARCAR EPISÓDIOS COMO ASSISTIDOS
Route::post('/seasons/{season}/episodes', [EpisodesController::class, 'index'])
    ->name('episodes.update');

// ROTAS PARA LOGAR NA APLICAÇÃO
Route::get('/login', [LoginController::class, 'index'])
    ->name('login');
Route::post('/login', [LoginController::class, 'store'])
    ->name('signin');

// ROTA PARA DESLOGAR NA APLICAÇÃO
Route::get('/logout', [LoginController::class, 'logout'])
->name('logout');

// ROTAS PARA REGISTRAR NA APLICAÇÃO
Route::get('/register', [UsersController::class, 'create'])
    ->name('users.create');
Route::post('/register', [UsersController::class, 'store'])
    ->name('users.create');

/*
Route::resource('/series', SeriesController::class)
->except(['show']);
*/

/*
Route::resource('/series', SeriesController::class)
->except([
'index',
'create',
'store',
'destroy',
'edit',
'update',
]);
*/

/*
Route::controller(SeriesController::class)->group(function () {
Route::get('/series', 'index')->name('series.create');
Route::get('/series/criar', 'create')->name('series.create');
Route::post('/series/salvar', 'store')->name('series.store');
});
*/