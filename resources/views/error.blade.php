@extends ('layout')
@section('title')
Erreur
@endsection
@section('content')
<h1>Erreur</h1>
<h2>{{ $errorMessage }}</h2>
@endsection