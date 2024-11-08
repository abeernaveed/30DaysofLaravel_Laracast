<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use  HasFactory;
    // Name of Table in Database.
    protected $table = 'tags';
    // Data to store in DB from outside. The below fields will be inserted.
    protected $fillable=['name'];

    public function jobs(){
        return $this->belongsToMany(Job::class);
    }
}