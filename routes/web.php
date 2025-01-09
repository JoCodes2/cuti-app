<?php

use Illuminate\Support\Facades\Route;

Route::get('/user', function () {
    return view('admin.User');
});

Route::get('/dashboard', function () {
    return view('admin.Dashboard');
});
