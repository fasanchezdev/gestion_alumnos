<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['name','last_name','dni','birthdate','sex','address','phone','email'];

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }
}

