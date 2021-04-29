@extends('layouts.frontLayout')

@section('title') Service {{ $service->tag }} Well-Graphics @endsection

@section('hero')
<div class="hero-wrap shadow-box" style="height:50vh">
    <div class="overlay contact" style="height:50vh"></div>
    <div id="particles-js" style="height:50vh"></div>
    <div class="container">
        <div class="row gt-0 content-text center-flex">
            <div class="col-md-12 hide-on-med-and-down pb-8 mb-8"></div>
            <div class="col-md-10 hero-wg text-center">
                <div class="container">
                    <h1 class="mb-3 h1-fluid text-uppercase" data-aos="zoom-in-down" data-aos-duration="1000">
                        Offre {{ $service->title }}</h1>
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
            <div class="row">

                <div class="col-md-12">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col-md-8 p-4 d-flex flex-column position-static">
                            <h3 class="mb-1">{{ $service->title }}</h3>
                            <p class="card-text mb-3"> {{ $service->body }}</p>

                            <h5 class="mb-0"> Nos garanties</h5>
                            <p class="card-text"> {!! $service->subtitle !!} </p>
                        </div>

                        <div class="col-md-4 bloc-achat">
                            <div class="d-flex justify-content-center">
                                <form action="{{ route('cart.add', $service) }}" method="GET">
                                    @csrf
                                    <div class="mb-3 info-prix">
                                        <h4 >Prix: {{ $service->priceFrench() }} TTC</h4>
                                    </div>

                                    <div class="mb-3" >
                                        <button type="submit" class="btn btn-primary btn-lg"> Ajouter au panier </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
  </div>
@endsection