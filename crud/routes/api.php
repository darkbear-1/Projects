<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\SubdomainsController;

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

Route::group(['prefix' => 'auth'], function() {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('reset-password-request', [AuthController::class, 'resetPasswordRequest']);
    Route::post('reset-password', [AuthController::class, 'resetPassword']);
    Route::get('email-verification', [AuthController::class, 'verify']);
    Route::post('resend-verification', [AuthController::class, 'resendVerificationEmail']);

    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('logout', [AuthController::class, 'logout']);
        Route::get('profile', [AuthController::class, 'profile']);
    });
});

Route::post('update', [TasksController::class, 'update']);
Route::post('add', [TasksController::class, 'add']);
Route::post('delete', [TasksController::class, 'delete']);
Route::post('status', [TasksController::class, 'status']);
Route::post('clear', [TasksController::class, 'clearComplete']);
Route::get('tasks', [TasksController::class, 'tasks']);
