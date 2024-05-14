<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divition extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function cursos()
    {
        return $this->belongsTo(Curso::class);
    }

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }
}
