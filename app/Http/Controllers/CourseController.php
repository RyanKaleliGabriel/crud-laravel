<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    //
    public function index(){
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }
    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $course = Course::create([
            'course_name'=>$request->course_name
        ]);
        return \Redirect ::route('coursehome')->with('success', 'Course Saved');
    }

    public function show($id)
    {
        $course = Course::query()->where('id', $id)->first();
        return view('courses.show', compact('course'));
    }

    public function edit($id)
    {
        $course = Course::query()->where('id', $id)->first();
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request){
        $course = Course::query()->where('id', $request->id)->update([
            'course_name'=> $request->course_name
        ]);
        return \Redirect ::route('coursehome')->with('success', 'Course Updated');
    }
    public function destroy($id){
        $course = Course::query()->where('id', $id)->delete();
        return \Redirect ::route('coursehome')->with('success', 'Course Deleted');
    }
}
