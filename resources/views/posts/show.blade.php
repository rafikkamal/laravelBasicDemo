@extends('layouts.app')

@section('content')
<h1>Post show</h1>
<p><a href="{{ route('posts.index') }}">Show all post</a></p>

<table class='table table-striped table-bordered table-responsive'>
    <thead>
        <tr>
            <th>#</th>
            <th>Post</th>
            <th>Category</th>
            <th>Content</th>
            <th>Created</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category }}</td>
            <td>{{ $post->content }}</td>
            <td>{{ $post->created_at }}</td>
        </tr>
    </tbody>
</table>

@endsection