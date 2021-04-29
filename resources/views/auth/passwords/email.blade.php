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
        <div class="card p-0">
            <div class="card-body login-card-body rounded">
                <p class="login-box-msg small">
                    Entrer votre e-mail pour continuer
                </p>
                @if (session('status'))
                <div class="alert alert-success small" role="alert">
                    {{ session('status') }}
                </div>
                @endif
    
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Votre e-mail"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                        <span class="text-danger small" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
    
                    <div class="form-group row mb-0">
                        <div class="col-4">
                        <a href="https://www.well-graphics.com/index.php/" class="btn bg-orange btn-block"> <span class="text-light">Annuler</span>  </a>
                        </div>
                        <div class="col-8">
                            <button type="submit" class="btn btn-primary btn-block">Réinitialiser</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
</div>

@endsection
