<?php

use Illuminate\Support\Facades\Route;



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