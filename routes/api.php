<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\PrescriptionsController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\AuthController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 //Route middleware(['auth:sanctum'])->group function(){
 Route::apiResources([
    'appointments'=>AppointmentController::class,
    'doctors'=>DoctorsController::class,
    'patients'=>PatientsController::class,
    'payments'=>PaymentsController::class,
    'prescriptions'=>PrescriptionsController::class,
    'reviews'=>ReviewsController::class,
 ]);
 Route::post('/signup',[AuthController::class,'signup']);
 Route::post('/login',[AuthController::class,'Login']);
 Route::post('/reviews',[AuthController::class,'reviews']);
//};
 
 



//}