<?php

use App\Http\Controllers\SiteController;
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

Route::get('/',[SiteController::class,'index']);
Route::get('/Department/it',[SiteController::class,'it']);
Route::get('/Department/it/teaching-staff',[SiteController::class,'teaching']);
Route::get('/Department/it/non-teaching',[SiteController::class,'nonTeaching']);
Route::get('/Department/it/facilities',[SiteController::class,'facilities']);

/* Administrator Page */
Route::get('/administration/hods',[SiteController::class,'hod']);
Route::get('/administration/dean_office',[SiteController::class,'dean_office']);
Route::get('/administration/former_deans',[SiteController::class,'former_deans']);
