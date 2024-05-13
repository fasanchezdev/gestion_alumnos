<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function divition()
    {
        return $this->belongsTo(Divition::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
