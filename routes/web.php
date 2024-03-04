<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\locationcontroller;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\BookeventController;
use App\Http\Controllers\ServiceseventController;
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
Route::get('/bookingdisplay',[BookeventController::class,'display']);

Route::get('acceptedevent/{id}', [BookeventController::class,'acceptevent']);
Route::get('rejectdevent/{id}', [BookeventController::class,'regectevent']);


Route::get('deletepackage/{id}',[PackageController::class,'deletepackage']);
Route::get('editpackage/{id}',[PackageController::class,'editpackage']);
Route::post('updatepackage/{id}',[PackageController::class,'updatepackage'])->name('updatepackage');


Route::get('/locationdisplay',[locationcontroller::class,'displayloc']);

Route::get('/packagedisplay',[PackageController::class,'display']);

// Route::get('editpackage/{pid}',[PackageController::class,'editpackage']);
// Route::post('/updatepackage/{pid}',[PackageController::class,'updatepackage'])->name('updatepackage');

// Route::get('/acceptedevent/{$bid}',[BookingEventController::class,'rejected']);

Route::get('/servicesform',[ServiceseventController::class,'index']);
Route::post('/servicesform',[ServiceseventController::class,'addservice'])->name('storeservice');
Route::get('/servicedisplay',[ServiceseventController::class,'show'])->name("displaydata");
// Route::get('/editservice',[ServiceseventController::class,'index']);
Route::get('/editservice/{id}',[ServiceseventController::class,'editservice']);
Route::post('/updateservice/{id}',[ServiceseventController::class,'updateservice'])->name('updateservice');
Route::get('/deleteservice/{id}',[ServiceseventController::class,'deleteservice']);
