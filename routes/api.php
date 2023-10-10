<?php

use App\Http\Controllers\ProjectVersionController;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectsController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('signup',[AuthController::class,'signup']);
Route::post('login',[AuthController::class,'login']);


//projects
Route::resource('projects', ProjectsController::class);
//project version
Route::resource('projectVersion', ProjectVersionController::class);
Route::resource('task', TaskController::class);
