@extends('layouts.app')

@section('content')

	<h1>Create Post </h1>

	{{ Form::open(array('url' => 'posts', 'method' => 'POST', 'enctype' => 'multipart/form-data')) }}

	@if ($errors->has('title'))
	<div class="alert alert-danger">
	    <strong>
	        {{ $errors->first('title') }}
	    </strong>
	</div>
	@endif

	<div class="form-group">
	    {{ Form::label('title','Title') }}
	    {{ Form::text('title',null,array('class'=>'form-control','placeholder'=>'Title...')) }}
	</div>

	<div class="form-group">
	    {{ Form::label('subject','Subject') }}
	    {{ Form::text('subject',null,array('class'=>'form-control','placeholder'=>'Subject...')) }}
	</div>

	<div class="form-group">
	    {{ Form::label('content','Content') }}
	    {{ Form::textarea('content',null,array('class'=>'form-control','placeholder'=>'Content Goes Here...')) }}
	</div>

	<div class="form-group">
	    {{ Form::label('picture','image') }}
	    {{ Form::file('picture') }}
	</div>

	{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
	{{ Form::close() }}

@endsection