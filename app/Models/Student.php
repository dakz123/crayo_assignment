<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function standard()
    {
        return $this->belongsTo(Standard::class);
    }

    public function marks()
    {
        return $this->hasMany(Mark::class);
    }
}
