@extends ('layout')
@section('title')
Login du jeune
@endsection
@section('content')
	{{Form::open(['url' => '/jeune/login'])}}
		<p>
			{{ Form::label('mail_jeune', 'mail_jeune') }}
			{{ Form::text('mail_jeune', Input::old('mail_jeune'), array('class' => 'form-control')) }}
		</p>
		<p>
			{{ Form::label('password_jeune', 'password_jeune') }}
			{{ Form::password('password_jeune', Input::old('password_jeune'), array('class' => 'form-control')) }}
		</p>
		{{ Form::submit('Connecte-toi', array('class' => 'btn btn-primary')) }}
	{{ Form::close() }}
@endsection