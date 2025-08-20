<?php

use App\Models\Employer;
use Illuminate\Support\Facades\Route;
use App\Models\JobListing;



Route::get('/', function () {

    return view('welcome', [
        'title' => "Home"
    ]);
});
Route::get(uri:'/jobs/create', action: function(){
    return view(view: 'jobs.create', data: [
        'title'=> 'Create a Job'
    ]);
});

Route::get('/job/{id}', function($id) {
    $job = JobListing::find( $id );
    return view("jobs.show", [
        'title' => "Jobs",
        'job' => $job
    ]);
});

Route::get(uri: '/jobs', action: function () {
   $joblistings = JobListing::with('employer')->paginate(10);
    return view(view: "jobs.index", data: [
        'title' => "Jobs",
        'jobs' => $joblistings
    ]);
});



Route::get('/contact', function() {
    return view('contact', ['title' => "Contact"]);
});

