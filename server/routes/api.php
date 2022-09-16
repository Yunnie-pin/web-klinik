<?php

use App\Http\Controllers\BidangPemeriksaanController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

// Route::get('/user/reg', function () {
//     return '';
// });

Route::controller(UserController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
    Route::prefix('/user')->group(function () {
        Route::middleware('auth:sanctum')->group(function () {
        });
    });
});

Route::controller(PasienController::class)->group(function () {
    Route::prefix('/pasien')->group(function () {
        Route::get('/', 'getPasien');
        Route::get('/{id}', 'getPasien');
        Route::post('/', 'addPasien'); // bila ada request id_pasien maka row akan diupdate
        Route::delete('/', 'deletePasien');
    });
});


Route::controller(BidangPemeriksaanController::class)->group(function () {
    Route::prefix('/bidang-pemeriksaan')->group(function () {
        Route::get('/', 'getBidangPemeriksaan');
        Route::get('/{id}', 'getBidangPemeriksaan');
        Route::post('/', 'addBidangPemeriksaan');
        Route::delete('/', 'deleteBidangPemeriksaan');
    });
});
