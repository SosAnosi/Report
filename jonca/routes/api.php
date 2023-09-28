<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/caAnnee', [MainController::class, 'caAnnee']);
Route::post('/camois', [MainController::class, 'Camois']);
Route::post('/default', [MainController::class, 'pardefaut']);
Route::post('/topten', [MainController::class, 'topten']);
Route::post('/default', [MainController::class, 'pardefaut']);

Route::get('/pivot', [MainController::class, 'pivotdata']);
Route::get('/cronCa', [MainController::class, 'cronCa']) ->name('cronCa');
Route::get('/toptenCron', [MainController::class, 'toptenCron']) ->name('toptenCron');
Route::get('/defaultlist', [MainController::class, 'DefaultList']) ->name('DefaultList');
Route::get('/test', [MainController::class, 'test']) ->name('test');
