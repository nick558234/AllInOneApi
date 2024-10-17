<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\CategoryController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/assets', [AssetController::class, 'index']);
Route::get('/test', function () {
    return response()->json(['message' => 'This is a test route']);
});
Route::post('assets', [AssetController::class, 'store']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::post('categories', [CategoryController::class, 'store']);
