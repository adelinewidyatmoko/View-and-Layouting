<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

*/




Route::get('/profile', [UserController::class,'index']);
Route::get('/book' ,[BookController::class,'indexs']);
Route::get('/detail',[BookController:: class,'detail']); 
/*setelah sudah dr controller pasang command untuk ngeview , harus ada route dulu contoh nya kayak diatas */


