<?php

use Illuminate\Support\Facades\Route;

//Changes
Route::get("/", function () {
    return view('admin.dashboard');
}) ->name('dashboard');
