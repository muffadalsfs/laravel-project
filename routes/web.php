<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::view('from','form');
Route::post('route',[StudentController::class,'retrun']);
// Route::view('home','home');
Route::get('list',[StudentController::class,'list']);
Route::get('delete/{id}',[StudentController::class,'delete']);
Route::get('edit/{id}',[StudentController::class,'edit']);
Route::put('edit-student/{id}',[StudentController::class,'update']);