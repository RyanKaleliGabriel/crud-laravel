@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <a href="{{ route('usercreate')}}" class="btn btn-primary mb-2">Create Users</a>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Second_Name</th>
                        <th>Username</th>
                        <th colspan="2">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blog_users as $blog_user)
                    <tr>
                        <td>{{ $blog_user->id}}</td>
                        <td>{{ $blog_user->first_name}}</td>
                        <td>{{ $blog_user->second_name}}</td>
                        <td>{{ $blog_user->username}}</td>
                        <td>{{ $blog_user->email}}</td>
                        <td>
                            <a href="{{route('usershow', $blog_user->id)}}" class="btn btn-primary">Show</a>
                            <a href="{{route('useredit', $blog_user->id)}}" class="btn btn-primary">Edit</a>
                            <form action="{{route('userdelete', $blog_user->id)}}" method="post"  class="d-inline">
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