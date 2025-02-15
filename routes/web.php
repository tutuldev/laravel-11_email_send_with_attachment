<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('send-email',[EmailController::class,'sendEmail']);

Route::get('contct',[EmailController::class,'contactForm']);
Route::POST('contct',[EmailController::class,'sendContactEmail'])->name('contact');
