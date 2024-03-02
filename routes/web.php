<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\locationcontroller;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\BookingEventController;
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
Route::get('/custform',function(){
    return view('custform');

});
Route::post('/custform',[CustomersController::class,'store'])->name('storecustomer');

Route::get('/bookingform',function(){
    return view('bookingform');

});

Route::get('/packageform',function(){
    return view('packageform');

});
Route::post('/packageform',[PackageController::class,'storepackage'])->name('storepackage');

Route::get('/locationform',function(){
    return view('locationform');

});
Route::post('/locationform',[locationcontroller::class,'storelocation'])->name('storelocation');

// Route::get('/feedbackform',function(){
//     return view('feedbackform');

// });

Route::get('/feedbackdisplay',[FeedbackController::class,'display']);
Route::get('/bookingdisplay',[BookingEventController::class,'display']);
Route::get('acceptedevent/{id}', [BookingEventController::class,'acceptevent']);

// Route::get('/acceptedevent/{$bid}',[BookingEventController::class,'rejected']);