@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justofy-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Student')}}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status')}}
                    </div>
                    @endif
                    <h2>{{$student->name}}</h2>
                    <p>
                        <br>
                        <div>
                            @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justofy-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Students')}}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status')}}
                    </div>
                    @endif
                    <h2>{{$student->name}}</h2>
                    <p>
                        <br>
                        <div>
                            <p>{{$student->name}}</p>
                            <p>{{$student->email}}</p>
                            <p>{{$student->school_id}}</p>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
