<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'auth'], function()
{
     
    Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index']);
    Route::get('/institutes', [App\Http\Controllers\InstituteController::class, 'index']);
    Route::get('/institutes/add', [App\Http\Controllers\InstituteController::class, 'redirectinst']);
    Route::post('/institutes/add', [App\Http\Controllers\InstituteController::class, 'addinstitute']);
    Route::get('/veiwdegree/{id}', [App\Http\Controllers\ViewDegreeController::class, 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
