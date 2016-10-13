@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                {!! Form::model($blog,[
                'route'=> $blog->exists ? ['blogs.update',$blog->id] : 'blogs.store',
                'method'=> $blog->exists ? 'put' : 'post'
                ]) !!}

                <div class="form-group">
                    {!! Form::label('title') !!}
                    {!! Form::text('title',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('body') !!}
                    {!! Form::textarea('body',null,['class'=>'form-control','rows'=>5]) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit($blog->exists ? 'Save Blog' :'Create New Blog',['class'=>'btn btn-success']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
        <hr>
    </div>
@endsection