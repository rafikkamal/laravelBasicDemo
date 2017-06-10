@extends('layouts.app')

@section('content')

	<h1>Create Post </h1>

	{{ Form::open(array('url' => 'posts', 'method' => 'POST', 'enctype' => 'multipart/form-data')) }}

	<div class="form-group">
	    {{ Form::label('title','Title') }}
	    {{ Form::text('title',null,array('class'=>'form-control','placeholder'=>'Title...')) }}
	</div>

	@if ($errors->has('title'))
	<div class="alert alert-danger">
	    <strong>
	        {{ $errors->first('title') }}
	    </strong>
	</div>
	@endif

	<div class="form-group">
	    {{ Form::label('category','Category') }}
	    {{ Form::select('category',$categories,array('class'=>'form-control')) }}
	</div>

	@if ($errors->has('category'))
	<div class="alert alert-danger">
	    <strong>
	        {{ $errors->first('category') }}
	    </strong>
	</div>
	@endif

	<div class="form-group">
	    {{ Form::label('content','Content') }}
	    {{ Form::textarea('content',null,array('class'=>'form-control','placeholder'=>'Content Goes Here...')) }}
	</div>


	@if ($errors->has('content'))
	<div class="alert alert-danger">
	    <strong>
	        {{ $errors->first('content') }}
	    </strong>
	</div>
	@endif

	<div class="form-group">
	    {{ Form::label('picture','Image') }}
	    {{ Form::file('picture') }}
	</div>	

	@if ($errors->has('picture'))
	<div class="alert alert-danger">
	    <strong>
	        {{ $errors->first('picture') }}
	    </strong>
	</div>
	@endif

	{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
	{{ Form::close() }}

@endsection