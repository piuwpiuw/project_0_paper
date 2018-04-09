@extends ('layout')
@section('title')
Page de l'étudiant
@endsection
@section('content')
	<h1>Coucou, je suis la page d'accueil du jeune</h1>
	<br/><br/>

	{!! Form::open(['url' => 'jeune/dashboard_account/update', 'files' => true]) !!}
		Civilité MME{!! Form::radio('civilite','MME') !!} M{!! Form::radio('civilite','M') !!} <br/>

		Prenom {!! Form::text('prenom',$info->prenom_jeune) !!}<br/>
		Nom {!! Form::text('nom',$info->nom_jeune) !!}<br/>
		Nom de jeune Fille {!! Form::text('nomFille',$info->nomjeunefille_jeune) !!}<br/>	
		Lieu d'accueil {!! Form::text('lieu') !!}<br/>
		Comment avez-vous connu la Mission Locale ? {!! Form::text('mission') !!}<br/>
		Né(e) le :  {!! Form::date('date_naissance',$info->datenaissance_jeune) !!}<br/>
		Age :  {!! Form::text('age',$info->age_jeune) !!} ans<br/>
		Lieu de naissance :  {!! Form::text('lieu_naissance',$info->lieunaissance_jeune) !!}<br/>
		Adresse : {!! Form::text('adresse',$info->adresse_jeune) !!}<br/>
		Code postal :  {!! Form::text('cp',$info->cp_jeune) !!}<br/>
		Ville : {!! Form::text('ville',$info->ville_jeune) !!}<br/>
		telephone fixe {!! Form::text('fixe',$info->telfixe_jeune) !!}<br/>
		telephone portable {!! Form::text('portable',$info->telportable_jeune) !!}<br/>
		email {!! Form::text('email',$user->mail_jeune) !!}<br/>
		{!! Form::submit('valider') !!}
	{!! Form::close() !!}
@endsection