@extends('layouts.index')

@section('dashboard-conseiller')
<div class="container">
    <nav class="    menu">
    <div class="menu__logo">
        <i class="menu__logo-icon fas fa-at"></i>
    </div>
    <ul class="menu__list">
        <h2 class="menu__list-title">Main</h2>
        <a class="menu__item"><i class="fas fa-home menu__item-icon"></i>Home</a>
        <a class="menu__item"><i class="fas fa-user-circle menu__item-icon"></i>Mon profil</a>
        <a class="menu__item"><i class="fas fa-users menu__item-icon"></i>Jeunes</a>
    </ul>
    <div class="menu__bottom"></div>
    </nav>
    <div class="dashboard">
        <header class="dashboard__header">
            <img class="dashboard__header-logo" src="http://www.mdef-senart.fr/sites/all/themes/mdefsenart/img/logo.png" alt="logo MDEF"/>
            <div class="dashboard__header-deconnect">
                <p class="dashboard__header-deconnect-text">Se déconnecter</p>
                <i class="dashboard__header-deconnect-icon fas fa-sign-out-alt"></i>
            </div>            
        </header>
        <nav class="dashboard__navbar">
            <ul class="dashboard__navbar-container">
                <a class="dashboard__navbar-item">Ajouter</a>
                <a class="dashboard__navbar-item">Dossier complet</a>
                <a class="dashboard__navbar-item">Modifier</a>
            </ul>
        </nav>
        <div class="dashboard__infos">
        @foreach($jeunes as $jeune)
        {{$jeune->nom_jeune}} {{$jeune->prenom_jeune}} {{$jeune->nom_conseiller}} <br/>
        @endforeach

        
        </div>
    </div>
</div>

@endsection