@extends('layouts.admin')

@section('content')

      <h4 class="text-center">Log in with you email account</h4>
    {!! Form::open(['url' => 'login']) !!}

          <div class="small-8 small-centered medium-6 medium-centered large-4 large-centered columns">
              {!! Form::label('email', 'Email:')!!}
              {!! Form::text('title', null, ['type' => 'email', 'name' => 'email', 'placeholder' => 'somebody@example.com']) !!}
          </div>

    
          <div class="small-8 small-centered medium-6 medium-centered large-4 large-centered columns">
            {!! Form::label('password', 'Password:')!!}
            {!! Form::password('password', array( 'name' => 'password', 'placeholder' => 'Password')) !!}
          </div>

          <div class="small-8 small-centered medium-6 medium-centered large-4 large-centered">
            {!! Form::button('Log In', ['type' => 'submit', 'class' => 'button expanded']) !!}
          </div>
          <p class="text-center"><a href="{{ url('/password/reset') }}">Forgot your password?</a></p>   

    {!! Form::close() !!}



@stop