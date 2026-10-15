<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Student;

class Enrollment extends Model
{
    protected $fillable = [
        'course_name',
        'period',
        'enrollment_date',
        'status',
        'student_id',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
