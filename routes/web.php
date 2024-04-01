<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('verification');
});
Route::get('/login',[Logincontroller::Class,'verify']);
