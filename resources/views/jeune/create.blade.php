@extends ('layout')
@section('title')
Créer un jeune
@endsection
@section('content')
	{{Form::open(['url' => '/jeune/creation'])}}
		<p>
			{{ Form::label('mail_jeune', 'mail_jeune') }}
			{{ Form::text('mail_jeune', Input::old('mail_jeune'), array('class' => 'form-control')) }}
		</p>
		<p>
			{{ Form::label('password_jeune', 'password_jeune') }}
			{{ Form::password('password_jeune', Input::old('password_jeune'), array('class' => 'form-control')) }}
		</p>
		<p>
			{{ Form::label('id_conseiller', 'id_conseiller') }}
			{{ Form::text('id_conseiller', Input::old('id_conseiller'), array('class' => 'form-control')) }}
		</p>
		{{ Form::submit('Enregistrer le jeune', array('class' => 'btn btn-primary')) }}
	{{ Form::close() }}
@endsection