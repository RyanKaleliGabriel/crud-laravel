@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Post') }}</div>
                <div class="card-body">
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{session ('status') }}
                        </div>
                        @endif
                    </div>
                    <form action="{{route('enrollmentstore')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <select name="student" id="" style="padding: 3px; margin-bottom: 5px;">
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->username}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="course" id="" style="padding: 3px; margin-bottom: 5px;">
                                @foreach($courses as $course)
                                <option value="{{$course->id}}">{{$course->course_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection