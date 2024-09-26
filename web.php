<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\uploadController;




Route::view ('upload','upload');
Route::post('upload',[uploadController::class,'upload']);
Route::get('list',[uploadController::class,'list']);