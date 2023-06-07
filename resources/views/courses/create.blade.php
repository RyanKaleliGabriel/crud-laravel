@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Course') }}</div>
                <div class="card-body">
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{session ('status') }}
                        </div>
                        @endif
                    </div>
                    <form action="{{route('coursestore')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Course Name</label>
                            <input type="text" name="course_name" class="form-control" >
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection