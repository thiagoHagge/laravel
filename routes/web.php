<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;


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

Route::get('/series', SeriesController::class)
    ->name('series_list');
Route::get('/series/create', [SeriesController::class, 'create'])
    ->name('create_series');
Route::post('/series/create', [SeriesController::class, 'store']);
Route::delete('/series/remove/{id}', [SeriesController::class, 'destroy'])
    ->name('delete_serie');
