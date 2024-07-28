<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgressController;


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/auth/check', [AuthController::class, 'checkUser']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

Route::get('gallery', [GalleryController::class, 'gallery']);
Route::get('progress', [ProgressController::class, 'progress']);
Route::get('news', [NewsController::class, 'index']);
Route::get('news/{uuid}', [NewsController::class, 'show']);

Route::prefix('admin')->group(function () {
  Route::apiResource('progress', ProgressController::class);
  Route::apiResource('gallery', GalleryController::class);
  Route::apiResource('news', NewsController::class);
  Route::post('gallery/update/{id}', [GalleryController::class, 'update']);
});
