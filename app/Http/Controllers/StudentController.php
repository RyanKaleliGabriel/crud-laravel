<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\School;

class StudentController extends Controller
{
    //

    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }
    public function create($id)
    {
        $school = School::query()->where('id', $id)->first();
        return view('students.create', compact('school'));
    }
    public function store(Request $request)
    {
        $student = Student::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'school_id'=>$request->id
        ]);
        return \Redirect ::route('studenthome')->with('success', 'Student Created');
    }
    public function show($id)
    {
        $student = Student::query()->where('id', $id)->first();
        return view('students.show', compact('student'));
    }
    public function edit($id)
    {
        $student = Student::query()->where('id', $id)->first();
        return view('students.edit', compact('student'));
    }

    public function update(Request $request)
    {
        $student = Student::query()->where('id', $request->id)->update([
            'name'=>$request->name,
            'email'=>$request->email
        ]);
        return \Redirect ::route('studenthome')->with('success', 'Student Updated');
    }
    public function destroy($id)
    {
        $student = Student::query()->where('id', $id)->delete();
        return \Redirect ::route('studenthome')->with('success', 'Student Deleted');
    }

}
