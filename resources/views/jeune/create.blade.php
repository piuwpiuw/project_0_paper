@extends ('layout')
@section('title')
Créer un jeune
@endsection
@section('content')
	{{Form::open(['url' => '/jeune/creer'])}}
		<p>
			{{ Form::label('mail_jeune', 'Couriel') }}
			{{ Form::email('mail_jeune', Input::old('mail_jeune'), array('class' => 'form-control')) }}
		</p>
		<p>
			{{ Form::label('password_jeune', 'Mot de passe') }}
			{{ Form::password('password_jeune', Input::old('password_jeune'), array('class' => 'form-control')) }}
		</p>
		<p>
			{{ Form::label('id_conseiller', 'Numéro du conseiller') }}
			{{ Form::number('id_conseiller', Input::old('id_conseiller'), array('class' => 'form-control')) }}
		</p>
		{{ Form::submit('Enregistre-toi', array('class' => 'btn btn-primary')) }}
	{{ Form::close() }}
@endsection