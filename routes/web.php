<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpinionController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/master', function () {
    return view('master');
});
