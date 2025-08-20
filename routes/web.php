<?php

use Illuminate\Support\Facades\Route;
use App\Models\JobListing;



Route::get('/', function () {

    return view('welcome', [
        'title' => "Home"
    ]);
});

Route::get('/job/{id}', function($id) {
    $job = JobListing::find( $id );
    return view("job", [
        'title' => "Jobs",
        'job' => $job
    ]);
});

Route::get(uri: '/jobs', action: function () {
   
    return view(view: "jobs", data: [
        'title' => "Jobs",
        'jobs' => JobListing::all()
    ]);
});

Route::get('/contact', function() {
    return view('contact', ['title' => "Contact"]);
});

