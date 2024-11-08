<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Job extends Model{
    use  HasFactory;
    // Name of Table in Database.
    protected $table = 'job_listing';
    // Data to store in DB from outside. The below fields will be inserted.
    protected $fillable=['employee_id','title','salary'];
    // protected $guard=[];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}