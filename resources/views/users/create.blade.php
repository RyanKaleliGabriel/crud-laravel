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
                    <form action="{{route('userstore')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">User First Name</label>
                            <input type="text" name="first_name" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="">User Second Name</label>
                            <input type="text" name="second_name" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label for="">UserName</label>
                            <input type="text" name="username" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" >
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection