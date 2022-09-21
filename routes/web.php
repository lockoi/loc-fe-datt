<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DuanTTController;
use App\Http\Controllers\bainopController;
use App\Http\Controllers\hockyController;
use App\Http\Controllers\monhocController;
use App\Http\Controllers\lophocController;
use App\Http\Controllers\userController;
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
Route::group(['prefix'=>'/'],function(){
    Route::get('/', [DuanTTController::class, 'index']);
    // Route::group(['prefix'=>'theloai'],function(){

    // });
});


Route::group(['prefix'=>'admin'],function(){
    Route::get('/', [DuanTTController::class, 'admin']);
    Route::group(['prefix'=>'bainop'],function(){
        Route::get('ds', [bainopController::class, 'ds']);
        Route::get('them', [bainopController::class, 'them']);
        Route::get('sua', [bainopController::class, 'sua']);
    });
    Route::group(['prefix'=>'hocky'],function(){
        Route::get('ds', [hockyController::class, 'ds']);
        Route::get('them', [hockyController::class, 'them']);
        Route::get('sua', [hockyController::class, 'sua']);
    });
    Route::group(['prefix'=>'monhoc'],function(){
        Route::get('ds', [monhocController::class, 'ds']);
        Route::get('them', [monhocController::class, 'them']);
        Route::get('sua', [monhocController::class, 'sua']);
    });
    Route::group(['prefix'=>'lophoc'],function(){
        Route::get('ds', [lophocController::class, 'ds']);
        Route::get('them', [lophocController::class, 'them']);
        Route::get('sua', [lophocController::class, 'sua']);
    });
    Route::group(['prefix'=>'user'],function(){
        Route::get('ds', [userController::class, 'ds']);
        Route::get('thongtin', [userController::class, 'thongtin']);
        Route::get('capnhat', [userController::class, 'capnhat']);
        Route::get('them', [userController::class, 'them']);
        Route::get('sua', [userController::class, 'sua']);
    });
});
