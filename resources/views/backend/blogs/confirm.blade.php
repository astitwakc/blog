@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-danger" role="alert">
                    Are you Sure To delete this Post ?<br>

                    {!! Form::open(array('method'=>'delete','route'=>['blogs.destroy',$blog->id])) !!}
                        <button type="submit" class="btn btn-danger">Yes Delete This Post</button>
                    {!! Form::close() !!}

                    <a href="{{ route('blogs.index') }}">
                        <button class="btn btn-primary">No Go Back</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
    </div>
@endsection