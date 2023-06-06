@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justofy-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Users')}}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status')}}
                    </div>
                    @endif

                    <h2>{{$blog_user->first_name}}</h2>

                    <p>
                        <br>
                        <div>
                            <p>{{$blog_user->second_name}}</p>
                            <p>{{$blog_user->username}}</p>
                            <p>{{$blog_user->email}}</p>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection