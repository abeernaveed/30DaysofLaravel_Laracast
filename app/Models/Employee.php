<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees'; // specify the table name
    protected $fillable = [
        'name'
    ];

    public function jobs(){
        return $this->hasMany(Job::class);
    }
};