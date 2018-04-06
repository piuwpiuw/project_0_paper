<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
{!! Form::open(['url' => '/conseiller/create', 'method'=>'post', 'files'=>true]) !!}
	{!!Form::label('prenom', 'Prenom')!!} {!! Form::text('prenom_conseiller')!!}
	{!!Form::label('nom', 'Nom')!!} {!! Form::text('nom_conseiller')!!} <br/>
	{!!Form::label('mail', 'Mail')!!} {!! Form::text('mail_conseiller')!!}
	{!!Form::label('password', 'Mot de passe')!!} {!! Form::text('password_conseiller')!!}<br/>

	{!! Form::submit('envoyer')!!}
{!! Form::close()!!}

{{$session}}
</body>
</html>