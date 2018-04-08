
<!-- <div class="home"> -->
@extends('layouts.container')
@section('content')
    <div class="home__container">
       	<div class="home__form">
		    <div class="home__logo"><img src="{{asset('css/logo.png')}}" style="width:80px;"></div>
				{!! Form::open(['url' => 'login'],array('class' => 'home__email')) !!}
				</br>
				<div class="md-form">
					<i class="fa fa-lock prefix"></i>
					{!! Form::text('mail','',array('class' => 'form-control', 'id' => 'inputIconEx1')) !!}
					 <label for="inputIconEx1">Adresse mail</label>
				</div>
				<div class="md-form">
					<i class="fa fa-lock prefix"></i>
					{!! Form::password('password',array('class' => 'form-control', 'id' => 'inputIconEx2')) !!}
					 <label for="inputIconEx2">Mot de passe</label>
				</div>
				<br/>

					<center>{!! Form::submit('Connexion', array('class' => 'btn btn-primary btn-rounded', 'id' => 'btn')) !!}</center>
				{!! Form::close() !!}
		</div>
		<div class="home__right">
    		<div class="home__image">       	
        		<div class="home__title">Bienvenue à la <strong>MDEF de Sénart</strong>
        			</br>
        			<h4 class="home__title--message">
        			Connectez vous pour accéder a votre compte
        			</h4>
        		</div>
        	</div>
        </div>
	</div>
	@endsection

<!-- </div> -->
