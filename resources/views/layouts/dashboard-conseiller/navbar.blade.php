@extends('pages.dashboard-conseiller')

@section('infos-jeunes')

<nav class="dashboard__navbar">
    <ul class="dashboard__navbar-container">
        <a class="dashboard__navbar-item" href="/conseiller/dashboard_jeunes/liste_complete">Liste complète</a>
        <a class="dashboard__navbar-item" href="/conseiller/dashboard_jeunes/mes-jeunes">Mes jeunes</a>
        <a class="dashboard__navbar-item" href="/conseiller/dashboard_jeunes/ajouter">Ajouter</a>
    </ul>
</nav>

@yield('nouvel-inscrit')
@yield('liste-complete')
@yield('mes-jeunes')

@endsection