<?php

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('all-users',[HomeController::class,'index']);
Route::post('create-user',[HomeController::class,'create']);
Route::get('delete-user/{id}', [HomeController::class, 'destroy']);
