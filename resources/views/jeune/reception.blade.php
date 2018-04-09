@extends ('layout')
@section('title')
Fiche d'acceuil du jeune
@endsection
@section('content')
	{{Form::open(['url' => '/jeune/accueil'])}}
		{{ Form::submit('Enregistre-toi', array('class' => 'btn btn-primary')) }}
	{{ Form::close() }}
@endsection