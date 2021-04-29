@extends('admin.layouts.app')

@section('title') Connexion @endsection

@section('particlesJs')
    <div id="particles-js"></div>
@endsection

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="{{ url('/') }}">
            <img src="{{ asset('assets/img/logo.svg') }}" class="img-fluid w-75">
        </a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Identifiez-vous!</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" value="{{ old('email') }}" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @error('email')
                    <span class="text-danger small" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @enderror
                </div>
                
                <div class="input-group mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Mot de passe" name="password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('password')
                    <span class="text-danger small" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @enderror
                </div>
                
                <div class="row">
                    <div class="col-7">
                        <div class="icheck-primary">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">
                                {{ __('auth.rememberMe') }}
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-5">
                        <button type="submit" class="btn btn-primary btn-block">{{ __('auth.login') }}</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <div class="mt-4"></div>

            <p class="mb-1">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Mot de passe oublié</a>
                @endif
                
            </p>
            <p class="mb-0">
                <a href="{{ route('register') }}" class="text-center">Créer un compte Well-Graphics</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
@endsection

@section('scriptParticles')
