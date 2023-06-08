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
                        <th>Student Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td>{{ $student->id}}</td>
                        <td>{{ $student->name}}</td>
                        <td>
                            <a href="{{route('studentshow', $student->id)}}" class="btn btn-primary">Show</a>
                            <a href="{{route('studentedit', $student->id)}}" class="btn btn-primary">Edit</a>
                            <form action="{{route('studentdelete', $student->id)}}" method="post"  class="d-inline">
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