<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

use App\Http\Controllers\BikeController;

Route::get('/', function () {
    return view('welcome');
});



Route::view ('adduser','adduser');
// Route::post('use', [usercontroller::class, 'class']); // Route to handle form submission
// route::post('/store-student', [StudentController::class, 'student']);
Route::get('/bikes', [BikeController::class, 'index'])->name('bikes.index');



// routes/web.php


Route::post('/store-student', [StudentController::class, 'store'])->name('student.store');
Route::get('/home', [StudentController::class, 'home'])->name('home');
Route::get('/show-data', [StudentController::class, 'showData'])->name('show.data');
