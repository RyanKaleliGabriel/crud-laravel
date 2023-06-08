<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    //
    public function index()
    {
        $schools = School::all();
        return view('schools.index', compact('schools'));
    }
    public function create()
    {
        return view('schools.create');
    }
    public function store(Request $request)
    {
        $school = School::create([
            'name'=>$request->name,
        ]);
        return \Redirect ::route('schoolhome')->with('success', 'school Created');
    }
    public function show($id)
    {
        $school = School::query()->where('id', $id)->first();
        return view('schools.show', compact('school'));
    }
    public function edit($id)
    {
        $school = School::query()->where('id', $id)->first();
        return view('schools.edit', compact('school'));
    }

    public function update(Request $request)
    {
        $school = School::query()->where('id', $request->id)->update([
            'name'=>$request->name,
        ]);
        return \Redirect ::route('schoolhome')->with('success', 'school Updated');
    }
    public function destroy($id)
    {
        $school = School::query()->where('id', $id)->delete();
        return \Redirect ::route('schoolhome')->with('success', 'school Deleted');
    }
}
