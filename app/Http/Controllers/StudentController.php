<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // show all student
    public function index()
    {
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    //view to create new student
    public function create()
    {
        return view('students.create');
    }

    //create new student
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
        ];
        $this->validate($request, $rules);

        $student = Student::create($request->all());
        return redirect()->route('home');
    }

    //show just one student
    public function show($student)
    {
        $student = Student::findOrFail($student);
        return view('students.show',['student'=>$student]);
    }

    //view to edit exist student
    public function edit($student)
    {
        $student = Student::findOrFail($student);
        return view('students.edit',['student'=>$student]);
    }

    // updating exist student
    public function update(Request $request, $student)
    {
        $rules = [
            'name' => 'max:255',
        ];
        $this->validate($request, $rules);

        $student = Student::findOrFail($student);
        $student->fill($request->all());
        if (!$student->isClean())
            $student->save();
        return redirect()->route('home');
    }

    public function destroy($student)
    {
        $student = Student::findOrFail($student);
        $student->delete();
        return redirect()->route('home');
    }

}
