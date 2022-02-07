<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use auth;

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

    public function create() {
        return view ('Students.tools');
    }

    public function store(Request $request) {
        $this ->validate($request, [
            'name' => 'required',
            'chair' => 'required',
            'phone' => 'required',
            'data' => 'required'
        ]);
        
        //tenho que fazer as vallidoces 
        $student = Student::create([
            'created_by' => Auth::id(),
            'name' => $request->name,
            'chair' => $request->chair,
            'phone' => $request->phone,
            'data' => $request->data,
        ]);
         if ($student) {
             return response()->json(['sucess' => 'adcionado com sucesso']);
         }
    }
    // 856502409 - edson

}
