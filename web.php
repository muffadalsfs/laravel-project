<?php


 use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
Route::post('list',[StudentController::class,'mail']);
Route::view ('send','send-email');






