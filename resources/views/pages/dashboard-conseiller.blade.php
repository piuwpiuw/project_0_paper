@extends('layouts.index')

@section('dashboard-conseiller')
<div class="block-dashboard" >
    <nav class="menu">
        <div class="menu__logo">
            <i class="menu__logo-icon fas fa-at"></i>
        </div>
        <ul class="menu__list">
            <h2 class="menu__list-title">Main</h2>
            <a class="menu__item" href="/conseiller/dashboard_jeunes/liste_complete"><i class="fas fa-users menu__item-icon"></i>Jeunes</a>
            <!-- <a class="menu__item"><i class="fas fa-home menu__item-icon"></i>Home</a> -->
            <a class="menu__item" href="/conseiller/dashboard_profil"><i class="fas fa-user-circle menu__item-icon"></i>Mon profil</a>
        </ul>
    </nav> 
        <div class="menu__bottom"></div>
        <div class="dashboard">
            <!-- AFFICHAGE BLOC HEADER DU DASHBOARD-->
    <header class="dashboard__header">
        <img class="dashboard__header-logo" src="http://www.mdef-senart.fr/sites/all/themes/mdefsenart/img/logo.png" alt="logo MDEF"/>
        <a class="dashboard__header-deconnect"  href="/">
            <p class="dashboard__header-deconnect-text">Déconnection</p>
            <i class="dashboard__header-deconnect-icon fas fa-sign-out-alt"></i>
        </a>            
    </header>
    <div class="dashboard__infos">
        @yield('infos-jeunes')
        @yield('infos-profil')     
    </div> 
</div>

<!-- AFFICHAGE BLOC INFOS DU DASHBOARD-->
<!-- yield('dashboard-conseiller.infos-newregister') -->
@endsection
