@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Student') }}</div>
                <div class="card-body">
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{session ('status') }}
                        </div>
                        @endif
                    </div>
                    <form action="{{route('studentstore')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="student">Student name</label>
                            <input type="text" name="name"><br>
                            <label for="student">School Name </label>
                            <input type="text" name="id" value="{{$school->id}}"><br>
                            <label for="student">Student email</label>
                            <input type="text" name="email" type="email">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection