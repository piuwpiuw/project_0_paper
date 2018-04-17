@extends('layouts.dashboard-conseiller.navbar')

@section('nouvel-inscrit')
            <div class="dashboard__infos-container">
                <div class="dashboard__title">
                    <h2 class="dashboard__title-content">Nouvel insrcit</h2>
                </div>
               
                {!! Form::open(['action'=>'JeuneController@store','class'=>'dashboard__advisor-form']) !!}
                    <div class="dashboard__advisor-form-block">
                        <input class="dashboard__advisor-form-input" type="text" placeholder="email" name='mail_jeune'>
                    </div>
                    <button type="submit" class="dashboard__advisor-form-btn">Enregistrer</button>
                {!! Form::close() !!}    
            </div>          
@endsection