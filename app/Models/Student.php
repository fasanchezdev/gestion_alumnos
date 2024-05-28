<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name','last_name','curso_id','dni','birthdate','address','phone','email'];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
