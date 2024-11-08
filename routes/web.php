<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;  

//Static Pages
Route::view('/', 'home');
Route::view('/contact', 'contact');

//Jobs CRUS
//Make a group of Job Controller
Route::controller(JobController::class)->group(function(){
    Route::get('/jobs', 'index');
    Route::get('/jobs/create',  'create' );
    Route::post('/jobs',  'store');
    Route::patch('/jobs/{id}',  'update');
    Route::delete('/jobs/{id}',  'destroy');
    Route::get('/job/{id}/edit',  'edit');
    Route::get('/jobs/{id}',  'show');
});