@extends('layouts.frontLayout')

@section('title') Commande @endsection

@section('hero')
<div class="hero-wrap shadow-box" style="height:50vh">
    <div class="overlay contact" style="height:50vh"></div>
    <div id="particles-js" style="height:50vh"></div>
    <div class="container">
        <div class="row gt-0 content-text center-flex">
            <div class="col-md-12 hide-on-med-and-down pb-8 mb-8"></div>
            <div class="col-md-10 hero-wg text-center">
                <div class="container">
                    <h1 class="mb-3 h1-fluid text-uppercase" data-aos="zoom-in-down" data-aos-duration="1000"> Mes commandes </h1>
                </div>
            </div>
            <div class="col-md-12 hide-on-med-and-down py-5 mb-5"></div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content-wrapper mb-5 mt-5">
    <div class="container-fluid">
        <div class="container">
            <div class="row center-flex">
                <div class="col-md-12">
                    <div class="card card-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->

                        <div class="widget-user-header bg-purple shadow-lg">
                            <h2 class="m-0 text-dark text-center">Mes factures d'achats</h2>
                        </div>

                        <div class="card-footer p-0">
                            <ul class="list-group list-group-flush">
                                @foreach ($commandes as $commande)
                                    <li class="list-group-item"><a href="{{ route('facture', $commande) }}">
                                        Commande du @datetime( $commande->created_at ) </a> -
                                        @if( $commande->statut == 0 )
                                            <span class="traitement"> En traitement </span>
                                        @elseif( $commande->statut == 1 )
                                            <span class="terminee">   Livrée     </span>
                                        @else
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection