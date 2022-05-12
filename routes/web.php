<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'home'] )->name('home');
Route::get('/project', [PublicController::class, 'project'] )->name('project');
Route::get('/employee', [PublicController::class, 'employee'] )->name('employee');
Route::get('/date', [PublicController::class, 'date'] )->name('date');
Route::get('/multiple', [PublicController::class, 'multiple'] )->name('multiple');


