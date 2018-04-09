@extends('layouts.index')

@section('dashboard-conseiller')
<div class="block-dashboard">
    <nav class="menu">
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
            <div class="dashboard__infos-container">
                <div class="dashboard__title">
                    <h2 class="dashboard__title-content">Mon profil</h2>
                </div>
                <div class="dashboard__profil">
                <div class="dashboard__profil-block">
                    <h3 class="dashboard__profil-sub">Nom :</h3>
                    <p class="dashboard__profil-text">{{ $conseiller->nom_conseiller}}</p>
                </div>
                <div class="dashboard__profil-block">
                    <h3 class="dashboard__profil-sub">Prénom :</h3>
                    <p class="dashboard__profil-text">{{ $conseiller->nom_conseiller}}</p>
                </div>
                <div class="dashboard__profil-block">
                    <h3 class="dashboard__profil-sub">téléphone :</h3>
                    <p class="dashboard__profil-text">{{ $conseiller->nom_conseiller}}</p>
                </div> 
                <div class="dashboard__profil-block">
                    <h3 class="dashboard__profil-sub">mail :</h3>
                    <p class="dashboard__profil-text">{{ $conseiller->nom_conseiller}}</p>
                </div>   
                </div> 
            </div>
        </div>
    </div>
</div>

@endsection