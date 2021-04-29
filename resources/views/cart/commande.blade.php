@extends('layouts.frontLayout')

@section('title') Mes commandes @endsection
@section('extra-script')  <script src="https://js.stripe.com/v3/"></script> @endsection

@section('hero')
<div class="hero-wrap shadow-box  mb-3" style="height:50vh">
    <div class="overlay contact" style="height:50vh"></div>
    <div id="particles-js" style="height:50vh"></div>
    <div class="container">
        <div class="row gt-0 content-text center-flex">
            <div class="col-md-12 hide-on-med-and-down pb-8 mb-8"></div>
            <div class="col-md-10 hero-wg text-center">
                <div class="container">
                    <h1 class="mb-3 h1-fluid text-uppercase" data-aos="zoom-in-down" data-aos-duration="1000"> Mes commandes </h1>
                    <p data-aos="zoom-in-up" data-aos-duration="1000">
                        Veuillez retrouver ci-dessous vos dernières commandes passées. <br/>
                        A noter que vous pouvez suivre l'avancée de ces dernières.
                    </p>
                </div>
            </div>
            <div class="col-md-12 hide-on-med-and-down py-5 mb-5"></div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark text-center">Mes commandes</h1>
                </div><!-- /.col -->
                <div class="dropdown-divider"></div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row center-flex">
                <div class="col-md-10 mb-3">
                    <div class="card card-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="card-footer p-0">
                            <ul class="list-group list-group-flush">
                                @forelse($commandes as $commande)
                                    <li class="list-group-item"><a href="{{ route('facture', $commande->id) }}" target="_blank">Commande du {{ $commande->created_at->formatLocalized("%a %d %b %G") }} </a>
                                        @if( $commande->statut == 0 )
                                            <span class="traitement"> En traitement </span>
                                        @elseif( $commande->statut == 1 )
                                            <span class="terminee">   Livrée     </span>
                                        @else
                                        @endif
                                    </li>
                                @empty
                                    Aucune commande trouvée
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection