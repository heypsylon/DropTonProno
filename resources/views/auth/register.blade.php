@extends('layouts.app')

@section('content')

<div class="container-fluid header-welcome">
    <div class="col-12 text-center">
        <a href="{{url('/')}}"><img class="img-fluid" src="{{asset('img/logo.png')}}" alt=""></a>
    </div>
</div>

<div class="bg-img">

    <div class="container register">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="container-form">
                    <div class="text-center"> <img class="img-fluid" src="{{asset('img/title_inscription.png')}}"></div>

                    <div class="row">
                        
                        <div class="col-12 text-center">
                            <a href="{{url('/redirect')}}" class="btn btn-primary btn-fb"><i class="fab fa-facebook-f"></i> Inscription avec Facebook</a>
                        </div>
                        
                        <div class="col-12 text-center">ou</div>

                        <div class="col-12">
                            
                            <div class="panel-body lato">
                                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-sm-12 col-md-4 control-label">Nom / Pseudo :</label>

                                        <div class="col-sm-12 col-md-6">
                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-sm-12 col-md-4 control-label">Adresse mail :</label>

                                        <div class="col-sm-12 col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-sm-12 col-md-4 control-label">Mot de passe :</label>

                                        <div class="col-sm-12 col-md-6">
                                            <input id="password" type="password" class="form-control" name="password" required>
                                            <span class="help-block lato">
                                                Votre mot de passe doit contenir au moins 1 chiffre, et faire minimum 6 caractères        
                                            </span>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password-confirm" class="col-sm-12 col-md-4 control-label">Confirmer votre mot de passe :</label>

                                        <div class="col-sm-12 col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" required> J'accepte les <a href="{{url('/cgu')}}">CGU</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 offset-md-4 text-right">
                                            <button type="submit" class="cta bg-orange">
                                                Créer mon compte
                                            <div><i class="fas fa-long-arrow-alt-right"></i></div></button>
                                        </div>
                                        <div class="col-md-6 offset-md-4 text-right">
                                            <a class="btn btn-link" href="{{ route('login') }}">J'ai déjà un compte</a>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>

                    </div>

            </div>
        </div>
    </div>
</div>
@endsection
