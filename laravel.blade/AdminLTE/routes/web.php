<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastController;



Route::get('/', function () {
    return view('layouts.main')
    ;}
);

Route::get('/table', function () {
    return view('table')
    ;}
);
Route::get('/data-table', function () {
    return view('datatable')
    ;}
);

Route::get('/cast', [CastController::class, 'index']);
Route::get('/cast/create', [CastController::class, 'create']);
Route::post('/cast', [CastController::class, 'store']);
Route::get('/cast/{cast_id}', [CastController::class, 'show']);
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);
Route::put('/cast/{cast_id}', [CastController::class, 'update']);
Route::delete('/cast/{cast_id}', [CastController::class, 'destroy']);