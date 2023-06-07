@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justofy-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Courses')}}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status')}}
                    </div>
                    @endif

                    <h2>{{$course->course_name}}</h2>

                    <p>
                        <br>
                        <div>
                            <p>{{$course->course_name}}</p>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection