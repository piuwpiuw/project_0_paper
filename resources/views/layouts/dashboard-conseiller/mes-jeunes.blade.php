@extends('layouts.dashboard-conseiller.navbar')

@section('mes-jeunes')
<div>tata</div>

@foreach($jeunes as $jeune)
    {{$jeune->mail_jeune}} {{$jeune->prenom_jeune}} {{$jeune->nom_conseiller}} <br/>
@endforeach

@endsection