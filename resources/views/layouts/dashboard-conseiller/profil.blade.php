@extends('pages.dashboard-conseiller')

@section('infos-profil')
<nav class="dashboard__navbar">
    <ul class="dashboard__navbar-container">
        <a class="dashboard__navbar-item">Mon profil</a>
    </ul>
</nav>
<div class="dashboard__infos-container">
    <div class="dashboard__title">
        <h2 class="dashboard__title-content">Mon informations</h2>
    </div>
        <div class="dashboard__profil-block">
            <h3 class="dashboard__profil-sub">Nom :</h3>
                <p class="dashboard__profil-text">{{ $user->nom_conseiller}}</p>
        </div>
        <div class="dashboard__profil-block">
            <h3 class="dashboard__profil-sub">Prénom :</h3>
            <p class="dashboard__profil-text">{{ $user->prenom_conseiller}}</p>
        </div>
        <div class="dashboard__profil-block">
            <h3 class="dashboard__profil-sub">téléphone :</h3>
            <p class="dashboard__profil-text">{{ $user->tel_conseiller}}</p>
        </div> 
        <div class="dashboard__profil-block">
            <h3 class="dashboard__profil-sub">mail :</h3>
            <p class="dashboard__profil-text">{{ $user->mail_conseiller}}</p>
        </div>
    
</div>
@endsection