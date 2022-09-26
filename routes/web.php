<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\ModulSurveyController;
// use App\Http\Controllers\User\gagal;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// public routes (lp)

// tempat route utk authenticated and verified user
Route::group(['middleware' => ['auth', 'verified']], function () {
    // admin routes
    Route::group(['middleware' => ['admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/', DashboardController::class)->name('dashboard');
        
        Route::group(['prefix' => 'konfig'], function () {
            // user module
            Route::resource('/user', UserController::class)->except('show');
        });
    });
    // registered laznas routes
    Route::group(['prefix' => 'survey', 'as' => 'survey.'], function () {
        Route::resource('/user', UserController::class)->only(['update', 'edit']);
        Route::get('/', UserDashboardController::class)->name('user.dashboard');
        Route::get('/soal', [ModulSurveyController::class, 'index']);
        Route::post('/submitsoal', [ModulSurveyController::class, 'submit'])->name('user.submitsoal');
        Route::get('/preview/{tahun}', [ModulSurveyController::class, 'previewSoal']);
        Route::get('/cetak-hasil/{tahun}', [ModulSurveyController::class, 'cetakHasil']);
    });
});
