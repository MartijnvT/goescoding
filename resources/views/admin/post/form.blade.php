

<div class="large-12 columns">
	{!! Form::label('title', 'Title:') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Form Body -->
<div class="large-12 columns">
	{!! Form::label('body', 'Body:') !!}
	{!! Form::textarea('body', null, ['class' => 'form-control ckeditor']) !!}
</div>

<!-- Form Input -->
<div class="large-12 columns">
	{!! Form::label('published_at', 'Publish On:') !!}
	{!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>

<!-- Submit Button -->
<div class="large-12">
	{!! Form::button($submitButtonText, ['type' => 'submit', 'class' => 'success button expanded']) !!}
</div>
