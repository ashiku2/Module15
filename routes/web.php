<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});


//Task 1 starts
Route::get('/form', [FormController::class, 'index']);
Route::post('/form', [FormController::class, 'register']);
//Task 1 ends

//Task 2 starts
Route::get('/home', [FormController::class, 'redirect']);
//Task 2 ends

//Task 5 starts
Route::resource('product',ProductController::class);
//Task 5 ends

//Task 6 starts
Route::post("/form", ContractController::class);
//Task 6 ends

//Task 7 starts
Route::resource('Post', PostController::class);
//Task 7 ends

//Task 8 starts
Route::get('/task8',[FormController::class, 'BladeView']);
