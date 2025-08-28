<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobListingController;



Route::view('/','welcome', ['title' => 'Home Page']);
Route::view('/contact','contact', ['title' => 'Contact']);

Route::resource('jobs', JobListingController::class);