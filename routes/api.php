<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Studentcontroller;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
 Route::get("/test",function(){
    return["name"=>'muffadal','channel'=>'aqm heroes'];
 });
 Route::get('/tests',[Studentcontroller::class,'list']);
 Route::post('/tests',[Studentcontroller::class,'addstudent']);