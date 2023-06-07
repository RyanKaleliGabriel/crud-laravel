@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justofy-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Enrollemnts')}}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status')}}
                    </div>
                    @endif

                    <h2>{{$enroll->blog_user_id}}</h2>

                    <p>
                        <br>
                        <div>
                            <p>{{$enroll->course_id}}</p>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection