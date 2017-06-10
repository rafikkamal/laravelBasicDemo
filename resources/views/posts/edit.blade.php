@extends('layouts.app')

@section('content')

	<h1>Edit Post</h1>

	{{ Form::open(array('route' => ['posts.update',$post->id], 'method' => 'PATCH', 'enctype' => 'multipart/form-data')) }}

	@if ($errors->has('title'))
	<div class="alert alert-danger">
	    <strong>
	        {{ $errors->first('title') }}
	    </strong>
	</div>
	@endif

	<div class="form-group">
	    {{ Form::label('title','Title') }}
	    {{ Form::text('title',$post->title,array('class'=>'form-control')) }}
	</div>

	<div class="form-group">
	    {{ Form::label('category','Category') }}
	    {{ Form::select('category',$categories,array('class'=>'form-control')) }}
	</div>

	<div class="form-group">
	    {{ Form::label('content','Content') }}
	    {{ Form::textarea('content',$post->content,array('class'=>'form-control')) }}
	</div>

	<div class="form-group">
	    {{ Form::label('picture','Image') }}
	    <br><span>Current Image : {{$post->image}}</span>
	    {{ Form::file('picture') }}
	</div>

	{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
	{{ Form::close() }}

@endsection