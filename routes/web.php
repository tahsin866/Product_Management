<?php

use App\Http\Controllers\Product_managementController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get ('/pages/prodcut_management',[Product_managementController::class, 'index']);
