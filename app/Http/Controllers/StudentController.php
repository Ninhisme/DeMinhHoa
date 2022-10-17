<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    
    public function index(){
        $students = Student::all();//select * from Product
        return view('student.student_manage', ['students' => $students]);
    }

    public function create(){
        return view('student.add');
    }

    public function get_all_student(Request $request){
        $fullname = $request->txtFullname;
        $birthday = $request->dtBirthday;
        $address = $request->txtAdress;
        


        Student::create([
            'fullname' => $fullname,
            'birthday' => $birthday,
            'address' => $address
        ]);
        
        return redirect('/student');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->fullname = $request->txtFullname;
        $student->birthday = $request->dtBirthday;
        $student->address = $request->txtAdress;
        $student->update();
        return redirect('/student');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/student');
    }
}
