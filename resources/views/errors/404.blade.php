@extends('admin.layouts.app')

@section('title') 404 Erreur @endsection

@section('particlesJs')
<div id="particles-js"></div>
@endsection

@section('content')
<div class="content-wraper">
    <div class="login-logo">
        <a href="http://www.wg.test">
            <img src="http://www.wg.test/assets/img/logo.svg" class="img-fluid" style="width:35%">
        </a>
    </div>
    
    <section class="content center-flex">
        <div class="">
            <div class="error-page">
                <h2 class="headline text-danger">404</h2>
    
                <div class="error-content">
                    <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oups! Page introuvable</h3>
    
                    <p>
                        Nous n'avons pas trouvé la page que vous cherchiez. En attendant, vous pouvez revenir au tableau de bord ou à la page d'accueil du site.
                    </p>
                </div>

                <div class="btn-group mt-5 mb-4 text-uppercase" role="group" aria-label="Basic example">
                    <a href="https://www.well-graphics.com/index.php" class="btn btn-outline-secondary shadow-lg">Accueil du site</a>
                    <a href="https://www.well-graphics.com/index.php/admin"
                        class="btn btn-outline-secondary shadow-lg">Tableau de bord</a>
                    <a href="{{ url()->previous() }}"
                        class="btn btn-outline-secondary shadow-lg">Retour</a>
                </div>
            </div>
        </div>
        <!-- /.error-page -->
    
    </section>
</div>
@endsection

