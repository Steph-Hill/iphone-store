<?php

use App\Http\Controllers\IphoneController;
use App\Http\Controllers\RelationController;
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

Route::get("/",[IphoneController::class,"index"]);

Route::get("/relation",[RelationController::class,"index"]);

Route::get("/relation/detail/{id}",[RelationController::class,"detail"]);
