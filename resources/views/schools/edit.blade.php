@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row justofy-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit School') }}</div>
                <div class="card-header">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status')}}
                    </div>
                    @endif

                    <form action="{{route ('schoolupdate', $school->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">School</label>
                            <input type="text" name="id" class="form-control" value="{{$school->name}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection