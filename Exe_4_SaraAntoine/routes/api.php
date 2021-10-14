<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ConsultationController;
use App\Http\Controllers\Api\ProjetController;
use App\Http\Controllers\Api\DocumentController;
use App\Http\Controllers\Api\PersonneController;
use App\Http\Controllers\Api\TherapieController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::resource('consultations', ConsultationController::class);
Route::get('personnes/{id}/{fieldname}', [PersonneController::class, 'showPersonneWithField']);

/*
/api/consutations => Get
/api/consutations => post
/api/consutations/id => Get
/api/consutations/id => patch
/api/consutations/id => delete
*/

Route::resource('projets', ProjetController::class);

Route::resource('documents', DocumentController::class);

Route::resource('personnes', PersonneController::class);

Route::resource('therapies', TherapieController::class);

