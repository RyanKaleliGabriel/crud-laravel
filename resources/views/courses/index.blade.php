
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <a href="{{ route('coursecreate')}}" class="btn btn-primary mb-2">Create Courses</a>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Course Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->id}}</td>
                        <td>{{ $course->course_name}}</td>
                 
                        <td>
                            <a href="{{route('courseshow', $course->id)}}" class="btn btn-primary">Show</a>
                            <a href="{{route('courseedit', $course->id)}}" class="btn btn-primary">Edit</a>
                            <form action="{{route('coursedelete', $course->id)}}" method="post"  class="d-inline">
                            @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection