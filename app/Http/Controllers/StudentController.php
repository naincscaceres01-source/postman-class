<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return response()->json($students);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'student_code' => 'required | unique:students ',
            'name' => 'required',
            'email' => 'required',
            'semester' => 'required',
            'status' => 'required',
        ]);

        $student = Student::create($request->all());
        return response()->json($student, 201);
    }
}



