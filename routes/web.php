<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpinionController;

Route::get('/', function () {
    return view('welcome');
});
