<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatsController;
use App\Http\Controllers\CacheController;
use App\Http\Middleware\Admin;
use App\Http\Controllers\ConsumptionController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cats', [CatsController::class, 'showCats']);
Route::get('/cats/add', [CatsController::class, 'showAddCatForm']);
Route::post('/cats/add', [CatsController::class, 'addCat']);
Route::get('/catsImage', [CatsController::class, 'showCatsImage']);
Route::post('/store-number', [CacheController::class, 'storeNumber']);
Route::get('/admin', [CatsController::class, 'admin'])->middleware([Admin::class]);
Route::get('/electricity-consumption-data', [ConsumptionController::class, 'getElectricityConsumptionData']);








