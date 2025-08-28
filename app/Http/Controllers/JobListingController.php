<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobListing;

class JobListingController extends Controller
{
    public function index(){
        $joblistings = JobListing::with('employer')->latest()->paginate(10);
        return view(view: 'jobs.index', data: [
            'title' => "Jobs",
            'jobs' => $joblistings
        ]);
    }
    public function create(JobListing $job){
        return view(view: 'jobs.create', data: 
            [
                'title'=> 'Create a Job'
            ]
        );
    }
    public function show(JobListing $job){
        return view("jobs.show", 
      [
                'title' => "Jobs",
                'job' => $job
            ]
        );
    }
    public function store(Request $request){
        $request->validate([
            'title' => ['required','min:3'],
            'salary' => ['required'],
        ]);
        $job = JobListing::create(
            [
                'title' => $request->input('title'),
                'salary' => $request->input('salary'),
                'employer_id' => 1
            ]);
        $job->save();

        return view("jobs.show", [
            'title' => "Jobs",
            'job' => $job
        ]);
    }
    public function edit(JobListing $job){
        return view("jobs.edit", [
            'title' => "Edit Job",
            'job' => $job
        ]);
    }
    public function update(Request $request, JobListing $job){
        request()->validate([
            'title' => ['required','min:3'],
            'salary' => ['required'],
        ]);
        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);

        return redirect('/jobs/' . $job->id);
    }
    public function destroy(JobListing $job){
        $job->delete();

        return redirect('/jobs');
    }
}
