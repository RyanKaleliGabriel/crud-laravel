@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justofy-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Poat')}}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status')}}
                    </div>
                    @endif

                    <h2>{{$post->title}}</h2>

                    <p>Published At: {{date('Y-m-d', strtotime($post->published_at))}}
                        <br>
                        <div>
                            {{$post->body}}
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection