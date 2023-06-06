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
                    <form action="{{route('store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Post Title</label>
                        <input type="text" name="title" class="form-control">                        </div>
                        <div class="form-group">
                            <label for="">Post Body</label>
                            <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Published At</label>
                            <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection