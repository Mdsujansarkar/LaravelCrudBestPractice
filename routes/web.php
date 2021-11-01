<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [TodoController::class, 'index']);

/**
 * Register Controller
 * 
 */

Route::post('register', [TodoController::class, 'create'])->name('register');
Route::get('register/image', [TodoController::class, 'image'])->name('image');

Route::post('register/image/upload', [TodoController::class, 'imageUpload'])->name('image.upload');
Route::get('content', [TodoController::class, 'contentView'])->name('content');
