<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\V2\PostController as PostV2;


//Esta ruta sirce para poder tener un registro especifico
Route::apiResource('v1/post',PostV1::class)->only(['show','destroy'])->middleware('auth:sanctum');
//en esta otra ruta quiero tener acceso a todos
Route::apiResource('v1/posts',PostV1::class)->only(['index','show'])->middleware('auth:sanctum');


///version 2
//Esta ruta sirce para poder tener un registro especifico
Route::apiResource('v2/post',PostV2::class)->only(['show','destroy'])->middleware('auth:sanctum');
//en esta otra ruta quiero tener acceso a todos
Route::apiResource('v2/posts',PostV2::class)->only(['index','show'])->middleware('auth:sanctum');

///login de acceso como no esta el middelware tiene acceso
Route::post('login',[App\Http\Controllers\Api\LoginController::class,
        'login'
    ]);



