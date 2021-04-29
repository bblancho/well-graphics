@extends('layouts.frontLayout')

@section('title') Accueil @endsection

@section('hero')
    <div class="hero-wrap well-fullheight">
        <div class="overlay"></div>
        <div id="particles-js"></div>
        <div class="container">
    
            <div class="row gt-0 content-text center-flex">
                <div class="col-md-12 hide-on-med-and-down py-8"></div>
                <div class="col-md-5 hero-wg">
                    <h1 class="mb-3" data-aos="zoom-in-down" data-aos-duration="1000">Agence de réalisations
                        graphiques et de développement web</h1>
                    <p data-aos="zoom-in-up" data-aos-duration="1000">
                        En choisissant Well-Graphics, vous choisissez la qualité et la rigueur pour votre
                        campagne publicitaire, votre apparence sur le web ou encore vos affichages personnels
                    </p>
                    <p class="mt-5" data-aos="zoom-in-up" data-aos-duration="1500">
                        <a href="#services" class="well-link-blue smoothscroll"> <span>Nos services</span> </a>
                    </p>
                </div>
                <div class="col-md-6 ml-auto hide-on-med-and-down" data-aos="fade-left" data-aos-duration="1000">
                    <div class="teboka">
                        <img src="{{ asset('assets/img/1.jpg') }}" alt="" class="img-fluid w-85">
                    </div>
                </div>
                <div class="center-flex col-md-12 mouse-moove">
                    <span>
                        <svg class="animated fadeInDown infinite" version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            width="60px" height="60px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;"
                            xml:space="preserve">
                            <g id="mouse">
                                <path fill="#5860a5" d="M32,16c-4.971,0-9,4.029-9,9v14c0,4.971,4.029,9,9,9c4.971,0,9-4.029,9-9V25C41,20.029,36.971,16,32,16z M39,39 c0,3.866-3.134,7-7,7s-7-3.134-7-7V25c0-3.866,3.134-7,7-7s7,3.134,7,7V39z M32,21c-0.552,0-1,0.448-1,1v5c0,0.553,0.448,1,1,1
    												c0.553,0,1-0.447,1-1v-5C33,21.448,32.553,21,32,21z" />
                            </g>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    
@endsection