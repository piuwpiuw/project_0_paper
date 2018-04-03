<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
{!! Form::open(['url' => '/admin/dashboard/conseiller/add', 'method'=>'post', 'files'=>true]) !!}
	{!!Form::label('prenom', 'Prenom')!!} {!! Form::text('prenom')!!}
	{!!Form::label('nom', 'Nom')!!} {!! Form::text('nom')!!} <br/>
	{!!Form::label('mail', 'Mail')!!} {!! Form::text('mail')!!}
	{!!Form::label('password', 'Mot de passe')!!} {!! Form::text('password')!!}<br/>

	{!! Form::submit('envoyer')!!}
{!! Form::close()!!}
</body>
</html>