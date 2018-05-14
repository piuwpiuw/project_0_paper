@extends('layouts.dashboard-conseiller.navbar')

@section('mes-jeunes')

<section class="mine">
    <script>
        function display(){
            document.getElementById('select').innerHTML = 'telfixe';
        }
    </script>
    <ul class="mine__list">

    @foreach($jeunes as $jeune)
    <li class="mine__list-item">
        <p class="mine__list-identity" 
        onclick="display()"> {{$jeune->nom_jeune }}  {{ $jeune->prenom_jeune }} {{$jeune->mail_jeune}}</p>
    </li>
    @endforeach

    </ul>
    <!-- <div id="select"></div> -->
     <div class="selected">
        <div class="selected__title">
            <h2 class="selected__title-content">informations</h2>
        </div>
        <div class="selected__container">
        @foreach($jeunes as $jeune)
            @if($jeune->nom_jeune === 'star')
                <div class="selected__fields">
                    <p class="selected__fields-label">Nom :</p>
                    <p class="selected__fields-content" id="nom"> {{$jeune->nom_jeune }} </p>
                </div>
                <div class="selected__fields">
                    <p class="selected__fields-label">Prenom :</p>
                    <p class="selected__fields-content" id="prenom"> {{$jeune->prenom_jeune }} </p>
                </div>
                <div class="selected__fields">
                    <p class="selected__fields-label">Date de naissance :</p>
                    <p class="selected__fields-content" id="datenaissance"> {{$jeune->datenaissance_jeune }} </p>
                </div>
                <div class="selected__fields">
                    <p class="selected__fields-label">Mail :</p>
                    <p class="selected__fields-content" id="mail"> {{$jeune->mail_jeune }} </p>
                </div>
                <div class="selected__fields">
                    <p class="selected__fields-label">Téléphone portable :</p>
                    <p class="selected__fields-content" id="portable"> {{$jeune->telportable_jeune }} </p>
                </div>
                <div class="selected__fields">
                    <p class="selected__fields-label">Téléphone fixe :</p>
                    <p class="selected__fields-content" id="telfixe"> {{$jeune->telfixe_jeune }} </p>
                </div>
            @endif
        @endforeach
        </div>
 </div> 
</section>

@endsection