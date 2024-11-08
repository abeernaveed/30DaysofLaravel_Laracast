<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        $jobs = Job::with('employee')->latest()->simplePaginate(10);
        return view('jobs.index',['jobs'=>$jobs]);    
    }
    public function create(){
        return view('jobs.create');
    }
    public function show($id){
        $job = Job::find($id);
        return view('jobs.job',['job'=>$job]);    
    }
    public function store(){
    request()->validate([
        'title'=>['required','min:3'],
        'salary'=>['required'],
    ]);
    Job::create([
        'title'=>request('title'),
        'salary'=> request('salary'),
        'employee_id'=>1,
    ]);
    return redirect('/jobs');
    }
    public function edit($id){
        $job=Job::find($id);
        return view('jobs.edit',['job'=>$job]);    
    }
    public function update($id){

        request()->validate([
         'title'=>['required','min:3'],
         'salary'=>['required'],
        ]);

        // Authorization(on hold....)

        $job= Job::findorFail($id);
        $job->update([
          'title'=>request('title'),
         'salary'=> request('salary'),
        ]);
        return redirect("/jobs/".$job->id);
    }
    public function destroy($id){
        //authorize(on hold...)
        $job=Job::findorFail($id);
        $job->delete();
        return redirect('/jobs'); 
    }
}