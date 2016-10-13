@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-group">
                    <li class="list-group-item">{{ $blog->title }}</li>
                    <li class="list-group-item">{{ $blog->body }}</li>
                    <li class="list-group-item">{{ $blog->published_at }}</li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
@endsection