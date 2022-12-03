<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\FormationsController;
use App\Http\Controllers\api\PhpFormationsController;
use App\Http\Controllers\api\JsFormationsController;


Route::get('/',[ FormationsController::class,'index']);
Route::get('/php', [PhpFormationsController::class,'index']);
Route::get('/javascript', [JsFormationsController::class,'index']);