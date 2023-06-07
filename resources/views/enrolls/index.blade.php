@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <a href="{{ route('enrollmentcreate')}}" class="btn btn-primary mb-2">Create Enrollment</a>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Enrollment Name</th>
                        <th>User id</th>
                        <th>Course id</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($enrolls as $enroll)
                    <tr>
                        <td>{{ $enroll->id}}</td>
                        <td>{{ App\Models\BlogUser::query()->where('id', $enroll->blog_user_id)->first()->username}}</td>
                        <td>{{App\Models\Course::query()->where('id', $enroll->course_id)->first()->course_name}}</td>
                        <td>
                            <a href="{{route('enrollmentshow', $enroll->id)}}" class="btn btn-primary">Show</a>
                            <a href="{{route('enrollmentedit', $enroll->id)}}" class="btn btn-primary">Edit</a>
                            <form action="{{route('enrollmentdelete', $enroll->id)}}" method="post"  class="d-inline">
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