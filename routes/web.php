<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', function ($name) {
    return "Hello, " . htmlspecialchars($name) . " Welcome to Laravel 12 Bootcamp!";
});
