@extends('layouts.admin')

@section('content')
	<h1>Write a new Blog Post</h1>

	<hr/>

	{!! Form::open(['url' => 'admin/post']) !!}

		@include('admin.post.form', ['submitButtonText' => 'Add Post'])

	{!! Form::close() !!}
	
	@include('errors.list')


@stop