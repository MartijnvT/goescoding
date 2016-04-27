@extends('layouts.admin')

@section('content')

	<h3>{{ $post->title }} </h3>

		<article>
			{!! $post->body !!}
		</article>
	
	<a href="{{ url('/admin/post', [$post->id]) . '/edit' }}" class="button expanded">Update</a>
	{{ Form::open(['route' => ['admin.post.destroy', $post->id], 'method' => 'delete', 'onsubmit' => 'return ConfirmDelete()'] ) }}
	{{ Form::button('Delete',['type' => 'submit', 'class' => 'button alert expanded'] ) }}
	{{ Form::close() }}
@stop