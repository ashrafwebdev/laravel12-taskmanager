<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', function ($name) {
    return "Hello, " . htmlspecialchars($name) . " Welcome to Laravel 12 Bootcamp!";
});
// simple route
Route::get('/about', function(){
    return "About Page";
});

// route with parameter
Route::get('/user/{id}', function($id){
    return "User ID: " . htmlspecialchars($id);
});

// route with optional parameter
Route::get('/greet/{name?}', function($name = 'Guest'){
    return "Hello " . htmlspecialchars($name);
});

// named route
Route::get('/profile', function(){
    return "Your Profile ";
})->name('profile');

// redirect route
Route::get('/dashboard', function(){
    return redirect()->route('profile');
});

Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Route groups
Route::prefix('admin')->group(function(){
    Route::get('/dashboard',function(){
        return "Admin dashboard";
    });
    Route::get('/users',function(){
        return "Admin Users";
    });
});
