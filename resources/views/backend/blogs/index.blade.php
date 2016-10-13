@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="pull-left">Blogs</h4>
                <a href="{{ route('blogs.create') }}">
                    <button class="btn btn-primary pull-right">
                        create new blog
                    </button>
                </a>
            </div>
        </div>
        <hr>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-stripted">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Published At</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $blog)
                    <tr>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->body }}</td>
                        <td>{{ $blog->published_at }}</td>
                        <td>
                            <a href="{{ route('blogs.show',$blog->id) }}">
                                <i class="ion ion-search"></i>
                            </a>
                            <a href="{{ route('blogs.edit',$blog->id) }}">
                                <i class="ion ion-edit"></i>
                            </a>
                            <a href="{{ route('blogs.delete.confirm',$blog->id) }}">
                                <i class="ion ion-close-circled"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection