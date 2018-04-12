@extends('layouts.container')
@section('content')
<div class="login">

    <div class="login__container">
        <div class="login__right">
                <div class="login__title">Bienvenue à la <strong>MDEF de Sénart</strong>
                  </br>
                  <h4 class="login__title--message">
                    Connectez vous pour accéder a votre compte
                  </h4>
                </div>    
        </div>
        <div class="login__form">
              <img src="{{asset("css/logo.png")}}" style="width:80px;" class="login__logo">
              
            {!! Form::open(['url' => 'login','class' => 'login__email']) !!}
            </br>
                <div class="md-form">
                   <i class="fa fa-envelope prefix"></i>
                   {!! Form::text('mail','',array('class' => 'form-control', 'id' => 'inputIconEx1')) !!}
                   <label for="inputIconEx1">Adresse mail</label>
                </div>
                    </br>
                <div class="md-form">
                    <i class="fa fa-lock prefix"></i>
                   {!! Form::password('password',array('class' => 'form-control', 'id' => 'inputIconEx2')) !!}
                    <label for="inputIconEx2">Mot de passe</label>
                </div>
                </br>
                    <center>
                      {!! Form::submit('Connexion', array('class' => 'btn btn-primary btn-rounded', 'id' => 'btn')) !!}</center>
            {!! Form::close() !!}
       
        </div>
    </div>
    
@endsection
</div>