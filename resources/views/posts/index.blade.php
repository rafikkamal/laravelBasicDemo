@extends('layouts.app')

@section('content')
<h1>All Post Available</h1>
<p><a href="{{ route('posts.create') }}">Add new post</a></p>

@if ($posts->count())
<table class='table table-striped table-bordered table-responsive'>
    <thead>
        <tr>
            <th>#</th>
            <th>Post</th>
            <th>Category</th>
            <th>Content</th>
            <th>Post Image</th>
            <th>Created</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($posts as $post)
	        <tr>
	            <td>{{ $post->id }}</td>
	            <td>{{ $post->title }}</td>
	            <td>{{ $post->getCategoryTitle() }}</td>
	            <td>{{ $post->content }}</td>
                <td>{{ $post->image }}</td>
	            <td>{{ $post->created_at }}</td>
	        </tr>
        @endforeach

    </tbody>
</table>
<div class='text-center'>
    {!! $posts->links(); !!}
</div>
@else
<div class='empty'>
    Nothing Found.
</div>
@endif

@endsection