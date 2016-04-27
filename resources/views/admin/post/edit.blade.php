@extends('layouts.admin')

@section('content')

	<h1>Edit: {{ $post->title }}</h1>

	<hr/>

	{!! Form::model($post, ['method' => 'PATCH', 'action' => ['PostController@update', $post->id]]) !!}

		@include('admin.post.form', ['submitButtonText' => 'Update Post'])

	{!! Form::close() !!}

	@include('errors.list')

@stop