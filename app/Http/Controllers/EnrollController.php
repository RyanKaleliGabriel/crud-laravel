<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Enroll;
Use App\Models\BlogUser;
Use App\Models\Course;

class EnrollController extends Controller
{
    public function index()
    {
        $enrolls = Enroll::all();
        return view('enrolls.index', compact('enrolls'));
    }

    public function create()
    {
        $courses = Course::all();
        $users = BlogUser::all();
        return view('enrolls.create', compact('courses', 'users'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $enroll = Enroll::create([
            'blog_user_id'=>$request->student,
            'course_id'=>$request->course
        ]);
        return \Redirect::route('enrollmenthome')->with('success', 'Successfully added Enrollment');
    }
    public function edit($id)
    {
        $enroll = Enroll::query()->where('id', $id)->first();
        return view('enrolls.edit', compact('enroll'));
    }
    public function show($id)
    {
        $enroll = Enroll::query()->where('id', $id)->first();
        return view('enrolls.show', compact('enroll'));
    }

    public function update(Request $request)
    {
        $enroll = Enroll::query()->where('id', $request->id)->update([
            'blog_user_id' =>$request->student,
            'course_id'=>$request->course
        ]);
        return \Redirect::route('enrollmenthome')->with('success', 'Updated successfully');
    }

    public function destroy($id)
    {
        $enroll = Enroll::query()->where('id', $id)->delete();
        return \Redirect::route('enrollmenthome')->with('success', 'Deleted successfully');
    }
}
