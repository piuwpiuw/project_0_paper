<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	{!! Form::open(['url' => 'jeune/dashboard_account/update', 'files' => true]) !!}
		Civilité MME{!! Form::radio('civilite','MME') !!} M{!! Form::radio('civilite','M') !!} <br/>

		Prenom {!! Form::text('prenom',$info_gen[0]->prenom_jeune) !!}<br/>
		Nom {!! Form::text('nom',$info_gen[0]->nom_jeune) !!}<br/>
		Nom de jeune Fille {!! Form::text('nomFille',$info_gen[0]->nomjeunefille_jeune) !!}<br/>	
		Lieu d'accueil {!! Form::text('lieu') !!}<br/>
		Comment avez-vous connu la Mission Locale ? {!! Form::text('mission') !!}<br/>
		Né(e) le :  {!! Form::date('date_naissance',$info_gen[0]->datenaissance_jeune) !!}<br/>
		Age :  {!! Form::text('age',$info_gen[0]->age_jeune) !!} ans<br/>
		Lieu de naissance :  {!! Form::text('lieu_naissance',$info_gen[0]->lieunaissance_jeune) !!}<br/>
		Adresse : {!! Form::text('adresse',$info_gen[0]->adresse_jeune) !!}<br/>
		Code postal :  {!! Form::text('cp',$info_gen[0]->cp_jeune) !!}<br/>
		Ville : {!! Form::text('ville',$info_gen[0]->ville_jeune) !!}<br/>
		telephone fixe {!! Form::text('fixe',$info_gen[0]->telfixe_jeune) !!}<br/>
		telephone portable {!! Form::text('portable',$info_gen[0]->telportable_jeune) !!}<br/>
		email {!! Form::text('email',$jeune[0]->mail_jeune) !!}<br/>
		{!! Form::submit('valider') !!}
	{!! Form::close() !!}
</body>
</html>