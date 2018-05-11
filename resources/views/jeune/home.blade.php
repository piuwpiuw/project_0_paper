@extends ('layout')
@section('title')
Page de l'étudiant
@endsection
@section('content')
	<h1>Merci de bien vouloir remplir les champs ci-dessous:</h1>
	<br/><br/>

	{!! Form::open(['url' => 'jeune/dashboard_account/update', 'files' => true]) !!}<br/>
		MME{!! Form::radio('civilite','MME') !!} &nbsp;M{!! Form::radio('civilite','M') !!} <br/><br/>

		 {!! Form::text('prenom',$info->prenom_jeune, array('placeholder'=>'Prénom', 'id' => 'inputIconEx1')) !!}<br/><br/>
		<br/> {!! Form::text('nom',$info->nom_jeune, array('placeholder'=>'Nom', 'id' => 'inputIconEx1')) !!}<br/><br/>
		<br/> {!! Form::text('nomFille',$info->nomjeunefille_jeune, array('placeholder'=>'Nom De Jeune Fille', 'id' => 'inputIconEx1')) !!}<br/><br/>	
		<br/> {!! Form::text('lieu','' ,array('placeholder'=>'Nom De Jeune Fille', 'id' => 'inputIconEx1')) !!}<br/><br/>
		Comment avez-vous connu la Mission Locale ?<br/> {!! Form::text('mission') !!}<br/><br/>
		Né(e) le :<br/>  {!! Form::date('date_naissance',$info->datenaissance_jeune) !!}<br/><br/>
		<br/>  {!! Form::text('age',$info->age_jeune,  array('placeholder'=>'Age', 'id' => 'inputIconEx1')) !!} ans<br/><br/>
		<br/>  {!! Form::text('lieu_naissance',$info->lieunaissance_jeune, array('placeholder'=>'Lieu De Naissance', 'id' => 'inputIconEx1')) !!}<br/><br/>
		<br/> {!! Form::text('adresse',$info->adresse_jeune, array('placeholder'=>'Adresse', 'id' => 'inputIconEx1')) !!}<br/><br/>
		<br/>  {!! Form::text('cp',$info->cp_jeune, array('placeholder'=>'Code Postal', 'id' => 'inputIconEx1')) !!}<br/><br/>
		<br/> {!! Form::text('ville',$info->ville_jeune, array('placeholder'=>'Ville', 'id' => 'inputIconEx1')) !!}<br/><br/>
		<br/> {!! Form::text('fixe',$info->telfixe_jeune, array('placeholder'=>'Téléphone Fixe', 'id' => 'inputIconEx1')) !!}<br/><br/>
		<br/> {!! Form::text('portable',$info->telportable_jeune, array('placeholder'=>'Téléphone Portable', 'id' => 'inputIconEx1')) !!}<br/><br/>
		<br/> {!! Form::text('email',$user->mail_jeune,  array('placeholder'=>'Email', 'id' => 'inputIconEx1')) !!}<br/><br/>
		{!! Form::submit('valider') !!}
	{!! Form::close() !!}
@endsection