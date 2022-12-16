<?php

use App\Http\Controllers\SeriesController;
use App\Models\Series;
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
    return redirect('/series');
});


Route::resource('/series', SeriesController::class);

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