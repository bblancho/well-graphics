@extends('layouts.frontLayout')

@section('title') Panier @endsection

@section('hero')
<div class="hero-wrap shadow-box" style="height:50vh">
    <div class="overlay contact" style="height:50vh"></div>
    <div id="particles-js" style="height:50vh"></div>
    <div class="container">
        <div class="row gt-0 content-text center-flex">
            <div class="col-md-12 hide-on-med-and-down pb-8 mb-8"></div>
            <div class="col-md-10 hero-wg text-center">
                <div class="container">
                    <h1 class="mb-3 h1-fluid text-uppercase" data-aos="zoom-in-down" data-aos-duration="1000"> Mon panier </h1>
                    <p data-aos="zoom-in-up" data-aos-duration="1000">
                        Ea adipisicing enim nulla excepteur id anim consequat ullamco enim irure. Cillum minim mollit nostrud ullamco est
                        aute sunt tempor minim aliqua nulla.
                    </p>
                </div>
            </div>
            <div class="col-md-12 hide-on-med-and-down py-5 mb-5"></div>
        </div>
    </div>
</div>
@endsection

@section('content')
    <div class="mt-8">

        <section class="container" id="commande">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 mb-3">
                        <h2 class="row justify-content-center mb-3"> Panier </h2>

                        @if ($cart)
                            <table class="table table-striped">
                                @foreach ($cart as $item)
                                    <tr>
                                        <td>{{ $item['nom'] }}</td>
                                        <td>@price( $item['prix']*100 )</td>
                                        <td><a href="{{ route('cart.drop', $item['id']) }}">-</a> {{ $item['quantite'] }} <a href="{{ route('cart.add', $item['id']) }}">+</a></td>
                                        <td>@price( $item['total']*100 )</td>
                                    </tr>
                                @endforeach

                                <tr>
                                    <td colspan="3"><strong>Total : </strong></td>
                                    <td class="font-weight-bold">@price( $total*100 )</td>
                                </tr>
                            </table>
                            <a class="btn btn-success pull-right ml-3" href="{{ route('cart.facturation') }}">Valider mon panier</a>
                            <a class="btn btn-secondary pull-right " href="{{ route('cart.vider') }}">Vider le panier</a>
                        @else

                            @if( session('status') )
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                                <div class="alert alert-primary">
                                    Le panier est vide !
                                </div>
                            @endif

                        @endif

                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
