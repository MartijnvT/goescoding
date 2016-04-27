@if($errors->all())
	<div class="callout alert">
		<ul>
@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
@endforeach
		</ul>		
	</div>
@endif