<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class , 'home'])->name('welcome');

Route::get('/show/presto', [PublicController::class , 'showPresto'])->name('show.presto');
Route::get('/show/soundstorm', [PublicController::class , 'showSoundstorm'])->name('show.soundstorm');
Route::get('/show/menu', [PublicController::class , 'showMenu'])->name('show.menu');




// email

Route::get('/', [PublicController::class , 'contactUs'])->name('contact_us');
Route::post('/', [PublicController::class , 'sendEmail'])->name('send_email');
