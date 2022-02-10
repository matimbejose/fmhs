<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use auth;

class StudentController extends Controller
{
    public function index() {
        return view('Students.tools');
    }

    public function create() {
        return view('Students.create');
    }

    public function edit($id) {
        
    }

    // public function showStudents()
    // {
    //     return response()->json(['students' => Student::all()]);
    // }

    // 856502409 - edson

}
