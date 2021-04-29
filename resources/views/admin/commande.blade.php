@extends('admin.layouts.app')

@section('title') Mes commandes @endsection

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
                <div class="col-md-10">
                    <div class="card card-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->

                        <div class="widget-user-header bg-purple shadow-lg">
                            <h2 class="m-0 text-dark text-center">Mes factures</h2>
                        </div>

                        <div class="card-footer p-0">
                            <ul class="list-group list-group-flush">
                                @foreach ($commandes as $commande)
                                    <li class="list-group-item"><a href="{{ route('facture', $commande) }}">
                                        Commande du {{ $commande->date_achat }} </a>
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