<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\LabTestController;
use App\Http\Controllers\Api\MedicineController;
use App\Http\Controllers\Api\HealthcardController;


Route::group(['middleware' => 'api'], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('refresh', [AuthController::class, 'refresh']);
});


Route::group(['middleware' => ['api', 'jwt.auth']], function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('user-profile', [AuthController::class, 'userProfile']);
    Route::get('/healthcards/card-holder-ids', [HealthcardController::class, 'getAllCardHolderIds']);
    Route::get('/doctors', [DoctorController::class, 'getAllDoctors']);
    Route::get('/medicines', [MedicineController::class, 'getAllMedicines']);
    Route::get('/lab-tests', [LabTestController::class, 'getAllTests']);
});
