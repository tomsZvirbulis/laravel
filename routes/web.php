<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;

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

Route::get('home', function() {
    return auth()->user();
});
// Route::get('/actor/{id}', [ActorController::class, 'index']);
// Route::get('/actor', [ActorController::class, 'index']);

// Route::get('/cities/{CountryId?}', [CityController::class, 'getCity']);

// Route::get('/country/{CountryId}', [CountryController::class, 'index']);