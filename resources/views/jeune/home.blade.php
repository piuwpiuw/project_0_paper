@extends ('layout')
@section('title')
Page du jeune
@endsection
@section('content')
	<h1>Coucou, je suis la page d'accueil</h1>
	<p>Couriel: {{ $jeune->mail_jeune }}</p>
	<p>Mot de passe: {{ $jeune->password_jeune }}</p>
	<p>Id du conseiller: {{ $jeune->id_conseiller }}</p>
@endsection