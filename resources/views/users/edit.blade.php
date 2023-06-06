@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row justofy-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit BlogUser') }}</div>
                <div class="card-header">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status')}}
                    </div>
                    @endif

                    <form action="{{route ('userupdate', $blog_user->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">User First Name</label>
                            <input type="hidden" name="id" class="form-control" value="{{$blog_user->id}}">
                            <input type="text" name="first_name" class="form-control" value="{{$blog_user->first_name}}">
                        </div>
                        <div class="form-group">
                            <label for="">User Second Name</label>
                            <input type="text" name="second_name" class="form-control" value="{{$blog_user->second_name}}">
                        </div>

                        <div class="form-group">
                            <label for="">UserName</label>
                            <input type="text" name="username" class="form-control" value="{{$blog_user->username}}">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" value="{{$blog_user->email}}">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" name="password" class="form-control" value="{{$blog_user->password}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection