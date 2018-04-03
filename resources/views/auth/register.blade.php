@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/conseiller/create') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nom_conseiller') ? ' has-error' : '' }}">
                            <label for="nom_conseiller" class="col-md-4 control-label">Nom</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="nom_conseiller" value="{{ old('nom_conseiller') }}" required autofocus>
                                @if ($errors->has('nom_conseiller'))
                                <span class="help-block">
                                <strong>{{ $errors->first('nom_conseiller') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('prenom_conseiller') ? ' has-error' : '' }}">
                            <label for="prenom_conseiller" class="col-md-4 control-label">Prénom</label>
                            <div class="col-md-6">
                                <input id="prenom_conseiller" type="text" class="form-control" name="prenom_conseiller" value="{{ old('prenom_conseiller') }}" required autofocus>
                                @if ($errors->has('prenom_conseiller'))
                                <span class="help-block">
                                <strong>{{ $errors->first('prenom_conseiller') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                            <div class="form-group{{ $errors->has('mail_conseiller') ? ' has-error' : '' }}">
                            <label for="mail_conseiller" class="col-md-4 control-label">E-Mail</label>
                            <div class="col-md-6">
                                <input id="mail_conseiller" type="mail_conseiller" class="form-control" name="mail_conseiller" value="{{ old('mail_conseiller') }}" required>
                                @if ($errors->has('mail_conseiller'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mail_conseiller') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                        <div class="form-group{{ $errors->has('tel_conseiller') ? ' has-error' : '' }}">
                            <label for="tel_conseiller" class="col-md-4 control-label">Téléphone</label>
                            <div class="col-md-6">
                                <input id="tel_conseiller" type="text" class="form-control" name="tel_conseiller" value="{{ old('tel_conseiller') }}" required autofocus>
                                @if ($errors->has('tel_conseiller'))
                                <span class="help-block">
                                <strong>{{ $errors->first('tel_conseiller') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_conseiller') ? ' has-error' : '' }}">
                            <label for="password_conseiller" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input id="password_conseiller" type="password" class="form-control" name="password_conseiller" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
