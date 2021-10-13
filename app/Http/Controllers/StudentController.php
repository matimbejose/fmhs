<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        return view('Students.index');
    }

    public function showStudents()
    {
        return response()->json(['students' => Student::all()]);
    }

    public function destroy($id) {
        $student = Student::find($id)->delete();

        if($student) {
            return response()->json(['sucess' => 'removido com sucesso']);
        } else {
            return response()->json(['sucess' => 'nao removido']);
        }
    }
}
