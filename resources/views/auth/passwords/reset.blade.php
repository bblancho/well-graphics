@extends('admin.layouts.app')

@section('title') Reinitialisation mot de passe @endsection

@section('particlesJs')
<div id="particles-js"></div>
@endsection

@section('content')
<div class="center-flex passReset" style="height:100vh">
    <div class="login-box">
    <div class="login-logo">
        <a href="{{ url('/') }}">
            <img src="{{ asset('assets/img/logo.svg') }}" class="img-fluid w-75">
        </a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg small">
                Entrer le nouveau mot de passe pour continuer
            </p>
            <!--<p class="login-box-msg">Identifiez-vous!</p>-->
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
        
                <input type="hidden" name="token" value="{{ $token }}">
        
                <div class="form-group row">
                
                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
        
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
        
                <div class="form-group row">
        
                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password" placeholder="Votre nouveau mot de passe">
        
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
        
                <div class="form-group row">
        
                    <div class="col-md-12">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                            autocomplete="new-password" placeholder="Confirmer votre mot de passe">
                    </div>
                </div>
        
                <div class="form-group row mb-0">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('auth.resetPassword') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
</div>
@endsection

