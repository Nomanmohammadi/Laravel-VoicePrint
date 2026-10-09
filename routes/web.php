<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VoicePrintController;
Route::resource('voiceprints', VoicePrintController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/login', function(){
    return view('auth.login');
});

Route::get('/home', function(){
    return view('home');
});
