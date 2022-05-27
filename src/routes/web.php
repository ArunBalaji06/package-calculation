<?php

use  DevPac\Calculation\App\Http\Controllers\CalculationController;

Route::get('/calculation', function(){
    echo 'Do any calculation with this package';
});

Route::get('/addition/{a}/{b}',[CalculationController::class,'add']);
Route::get('/subtraction/{a}/{b}',[CalculationController::class,'subtract']);
Route::get('/product/{a}/{b}',[CalculationController::class,'multiply']);

