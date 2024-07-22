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
/* Home Page */
Route::get('/',[SiteController::class,'index']);
Route::get('/policies',[SiteController::class,'policies']);

Route::prefix('/Department/{department}')->group(function(){
	Route::get('/',[SiteController::class,'dept']);
	Route::get('/teaching-staff',[SiteController::class,'teaching']);
	Route::get('/non-teaching',[SiteController::class,'nonTeaching']);
	Route::get('/facilities',[SiteController::class,'facilities']);
	Route::get('/scholars',[SiteController::class,'scholars']);
	Route::get('/ugstudents',[SiteController::class,'ugStudents']);
	Route::get('/alumni',[SiteController::class,'alumni']);
	Route::get('/former-academics',[SiteController::class,'former']);

	// Acadamics Page
	Route::get('/academics-schedule',[SiteController::class,'academics_schedule']);
	Route::get('/coursesoffered',[SiteController::class,'courses_offered']);

	//Research Page
	Route::get('/phdawarded',[SiteController::class,'phd_awarded']);
	Route::get('/journals',[SiteController::class,'journals']);
	Route::get('/conferences',[SiteController::class,'conferences']);
	Route::get('/projects',[SiteController::class,'projects']);
	Route::get('/consultancy',[SiteController::class,'consultancy']);
	Route::get('/patents',[SiteController::class,'patents']);


});




/* Administrator Page */
Route::get('/administration/hods',[SiteController::class,'hod']);
Route::get('/administration/dean_office',[SiteController::class,'dean_office']);
Route::get('/administration/former_deans',[SiteController::class,'former_deans']);

