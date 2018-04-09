<!doctype html>
<html>
<head>
	<title>Créer un étudiant</title>
	<meta charset='utf-8'/>
	{{ Html::style('css/basic-print.css') }}
	{{ Html::style('css/basic-screen.css') }}
	<style type='text/css'></style>
</head>
<body>
	{{Form::open(['url' => '/jeune/creation'])}}
		<p class='row'>
			<span>couriel</span>
			<input type='email' name='mail_jeune'/>
		</p>
		<p class='row'>
			<span>Mot de passe</span>
			<input type='password' name='password_jeune'/>
		</p>
		<p class='row'>
			<span>Id du conseiller</span>
			<input type='range' min='3' max='30' name='id_conseiller'/>
		</p>
		<input type='submit' value='Enregistrer le jeune'/>
	</form>
</body>
</html>