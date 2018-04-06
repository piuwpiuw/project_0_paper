<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	{!! Form::open(['url' => 'login']) !!}
		e-mail{!! Form::email('mail') !!} <br/>
		password{!! Form::password('password') !!}
		{!! Form::submit('valider') !!}
	{!! Form::close() !!}
</body>
</html>