<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = [
        'grade',
        'section'
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function scopeByGrade($query, $grade)
    {
        return $query->where('grade', $grade);
    }

    public function scopeBySection($query, $section)
    {
        return $query->where('section', $section);
    }
}
