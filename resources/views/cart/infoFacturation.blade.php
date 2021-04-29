@extends('layouts.frontLayout')

@section('title') Adresse de facturation @endsection

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
                </div>
            </div>
            <div class="col-md-12 hide-on-med-and-down py-5 mb-5"></div>
        </div>
    </div>
</div>
@endsection

@section('content')
    <div class="mt-8">

        @if( Auth::check() )

            <section class="container">
                <div class="row">

                    <div class="col-md-12 order-md-1">
                        <h4 class="mb-3">Adresse de facturation</h4>
                        <hr class="mb-4">

                        <form class="needs-validation" method="POST" action="{{ route('cart.dataFacturation') }}" novalidate>
                            @csrf 

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Nom:</label>
                                    <input type="text" class="form-control @error('lastName') is-invalid @enderror" id="lastName" name="lastName" value="{{ old('lastName') ? old('lastName') : Auth::user()->username  }}" required>
                                    @error('lastName')
                                        <p class="text-danger text-sm" role="alert"> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Prénom:</label>
                                    <input type="text" class="form-control @error('firstName') is-invalid @enderror" id="firstName" name="firstName" value="{{ old('firstName') ? old('firstName') : Auth::user()->name }}" required>
                                    @error('firstName')
                                        <p class="text-danger text-sm" role="alert"> {{ $message }} </p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="email">Adresse e-mail de livraison</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') ? old('email') : Auth::user()->email }}" required>
                                @error('email')
                                    <p class="text-danger text-sm" role="alert"> {{ $message }} </p>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="description">Description de sur votre projet</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" required> {{ old('description') }} </textarea>

                                @error('description')
                                    <p class="text-danger text-sm" role="alert"> {{ $message }} </p>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <h4 class="mb-3">Ma commande</h4>
                                <hr>
                                @if ($cart)
                                    <ul class="table table-striped">
                                        @foreach ($cart as $item)
                                            <li>
                                                Produit: {{ $item['nom'] }} - Quantité: {{ $item['quantite'] }} - Total: @price($item['total'] * 100)
                                            </li>
                                        @endforeach

                                        <li class="mt-3"><strong> Total de la commande @price($total * 100) </strong></li>
                                    </ul>
                                @endif
                            </div>

                            <button class="btn wellblue pull-right mb-5 text-light" type="submit"> Valider les informations </button>
                        </form>
                    </div>
                </div>
            </section>

        @endif

    </div>
@endsection
