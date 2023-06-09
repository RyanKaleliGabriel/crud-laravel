@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <a href="{{ route('create')}}" class="btn btn-primary mb-2">Create Posts</a>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Published At</th>
                        <th>Created at</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id}}</td>
                        <td>{{ $post->title}}</td>
                        <td>{{ date('Y-m-d', strtotime($post->publisged_at)) }}</td>
                        <td>{{ date('Y-m-d', strtotime($post->created_at))}}</td>
                        <td>
                            <a href="{{route('show', $post->id)}}" class="btn btn-primary">Show</a>
                            <a href="{{route('edit', $post->id)}}" class="btn btn-primary">Edit</a>
                            <form action="{{route('delete', $post->id)}}" method="post"  class="d-inline">
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
