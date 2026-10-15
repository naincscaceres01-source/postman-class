<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function withEnrollments()
    {
        $students = Student::with('enrollments')->get();
        return response()->json($students, 200);
    }
}
