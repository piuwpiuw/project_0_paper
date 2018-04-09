@extends ('layout')
@section('title')
Login
@endsection
@section('content')
	{{Form::open(['url' => '/login'])}}
		<p>
			{{ Form::label('mail', 'Couriel') }}
			{{ Form::text('mail', Input::old('mail'), array('class' => 'form-control')) }}
		</p>
		<p>
			{{ Form::label('password', 'Mot de passe') }}
			{{ Form::password('password', Input::old('password'), array('class' => 'form-control')) }}
		</p>
		{{ Form::submit('Connectez-vous', array('class' => 'btn btn-primary')) }}
	{{ Form::close() }}
@endsection