<nav class="navbar navbar-expand-lg navbar-dark wg_navbar bg-dark wg-navbar-light pt-0 mt-0" id="wg-navbar">
    <div class="container">
        <a class="navbar-brand ot-none" href="./">
            <img src="{{ asset('assets/img/logo.svg') }}" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#wg-nav" aria-controls="wg-nav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="wg-nav">
            <nav class="navbar">
                <ul class="navbar-nav  text-uppercase">
                    <li class="nav-item {{ Request::path() === '/' ? 'active' : '' }}">
                        <a href="{{ route('front.index') }}" class="nav-link"> Accueil </a>
                    </li>
                    <li class="nav-item {{ Request::path() === 'services' ? 'active' : '' }}">
                        <a href="https://www.well-graphics.com/index.php/services" class="nav-link"> Services </a>
                    </li>
                    <li class="nav-item {{ Request::path() === 'realisations' ? 'active' : '' }}">
                        <a href="https://www.well-graphics.com/index.php/realisations" class="nav-link"> Réalisations </a>
                    </li>
                    <li class="nav-item {{ Request::path() === 'contact' ? 'active' : '' }}">
                        <a href="https://www.well-graphics.com/index.php/contact" class="nav-link"> Contact </a>
                    </li>

                    @if ( Route::has('login') )
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Mon compte
                                </a>
                              
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="{{ route( 'front.compte.show', Auth::id() ) }}">
                                            Mon profil
                                        </a>
                                        <a href="{{ route('commande.index') }}" class="dropdown-item">
                                            Mes commandes
                                        </a>
                                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                                Déconnexion
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>

                            </li>
                        @else
                            <li class="nav-item">
                                <a href="https://www.well-graphics.com/index.php/login" class="nav-link">Espace&nbsp;Client</a>
                            </li>
                        @endauth
                    @endif
                    <li class="nav-item cta"> <a href="{{ route('cart.index') }}" class="nav-link btn-panier wellblue-btn"><span>Panier</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="commander" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title wellblue-text text-uppercase" id="exampleModalCenterTitle">
                    Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center my-3" style="line-height: 1.5">
                    Excusez-nous pour la gêne occasionnée.<br>
                    Cette fonctionnalité est en cours de maintenance.<br>
                    Merci de votre compréhension.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn wellred text-light" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>