@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <a href="{{ route('schoolcreate')}}" class="btn btn-primary mb-2">Create School</a>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>School Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($schools as $school)
                    <tr>
                        <td>{{ $school->id}}</td>
                        <td>{{ $school->name}}</td>
                        <td>
                            <a href="{{route('schoolshow', $school->id)}}" class="btn btn-primary">Show</a>
                            <a href="{{route('schooledit', $school->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('studentcreate', $school->id)}}" class="btn btn-primary"> Add Student</a>
                            <form action="{{route('schooldelete', $school->id)}}" method="post"  class="d-inline">
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