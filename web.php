<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('adduser');
});



Route::view ('adduser','adduser');

Route::post('/store-student', [StudentController::class, 'use']);
Route::get('list', [StudentController::class, 'list']);
Route::get('delete/{id}', [StudentController::class, 'delete']);
// Route::get('/bikes', [BikeController::class, 'index'])->name('bikes.index');



// // routes/web.php


// Route::post('/store-student', [StudentController::class, 'store'])->name('student.store');
// Route::get('/home', [StudentController::class, 'home'])->name('home');
// Route::get('/show-data', [StudentController::class, 'showData'])->name('show.data');