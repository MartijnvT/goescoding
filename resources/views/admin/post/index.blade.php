@extends('layouts.admin')

@section('content')

	<h1>Blog Posts</h1>
	<table>
		<thead>
			<tr>
				<th width="200">Title</th>
				<th width="150">Published Date</th>
				<th width="100">Author</th>
				<th width="50"></th>
				<th width="50"></th>
			</tr>
		</thead>
		<tbody>
@foreach($posts as $post)
			<tr>
				<td>
					<a href="{{ action('PostController@show', [$post->id]) }}">{{ $post->title }} </a>
				</td>
				<td>
					{{ $post->published_at }}
				</td>
				<td>
					{{ $post->user->name }}
				</td>
				<td><a href="{{ url('/admin/post', [$post->id]) . '/edit' }}" class="button">Update</a></td>
				<td>
					{{ Form::open(['route' => ['admin.post.destroy', $post->id], 'method' => 'delete', 'onsubmit' => 'return ConfirmDelete()']) }}
					{{ Form::button('Delete',['type' => 'submit', 'class' => 'alert button'] ) }}
					{{ Form::close() }}
				</td>
			</tr>
@endforeach


		</tbody>
	</table>

@stop