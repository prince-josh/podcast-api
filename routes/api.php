<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PodcastController;
use App\Http\Controllers\Api\EpisodeController;
use App\Http\Controllers\Api\AuthController;

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
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Public routes
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{category}/podcasts', [CategoryController::class, 'podcasts']);

Route::get('/podcasts', [PodcastController::class, 'index']);
Route::get('/podcasts/featured', [PodcastController::class, 'featured']);
Route::get('/podcasts/{podcast}', [PodcastController::class, 'show']);
Route::get('/podcasts/{podcast}/episodes', [PodcastController::class, 'episodes']);

Route::get('/episodes/{episode}', [EpisodeController::class, 'show']);