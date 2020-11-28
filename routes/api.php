<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/users', [\App\Http\Controllers\UsersController::class, 'index']);
Route::get('/users/{id}', [\App\Http\Controllers\UsersController::class, 'view']);
Route::post('/users', [\App\Http\Controllers\UsersController::class, 'create']);
Route::patch('/users/{id}', [\App\Http\Controllers\UsersController::class, 'update']);
Route::post('/users/auth', [\App\Http\Controllers\UsersController::class, 'auth']);

Route::get('publications/by_user/{user_id}', [\App\Http\Controllers\PublicationsController::class, 'userPublications']);

Route::get('publications', [\App\Http\Controllers\PublicationsController::class, 'index']);
Route::get('publications/{id}', [\App\Http\Controllers\PublicationsController::class, 'view']);
Route::post('publications', [\App\Http\Controllers\PublicationsController::class, 'create']);

Route::get('teams', [\App\Http\Controllers\TeamsController::class, 'index']);
Route::get('teams/by_user/{user_id}', [\App\Http\Controllers\TeamsController::class, 'userTeams']);
Route::post('teams', [\App\Http\Controllers\TeamsController::class, 'create']);
