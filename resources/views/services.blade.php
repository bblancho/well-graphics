@extends('layouts.frontLayout')

@section('title') Services @endsection

@section('hero')
    <div class="hero-wrap well-fullheight shadow-box">
        <div class="overlay services"></div>
        <div id="particles-js"></div>
        <div class="container">
    
            <div class="row gt-0 content-text center-flex" style="margin-top:20%">
                <div class="col-md-10 hero-wg text-center">
                    <div class="container">
                        <h1 class="mb-3 h1-fluid text-uppercase" data-aos="zoom-in-down" data-aos-duration="1000">Services
                            graphiques et webs</h1>
                        <p data-aos="zoom-in-up" data-aos-duration="1000">
                            Well-Graphics.com vous propose une large gamme de services graphiques et webs.
                        </p>
                        <p class="mt-5" data-aos="zoom-in-up" data-aos-duration="1500">
                            <a href="#graphics" class="well-link-blue smoothscroll"> <span>Plus de details</span> </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-12 hide-on-med-and-down py-5 mb-5"></div>
                <div class="social-hero-link hide-on-med-and-down">
                    <div class="text-right">
                        @include('parts.social')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="py-6 wellblue" id="graphics">.
        <div class="container pt-6" data-aos="zoom-in-up" data-aos-duration="1000">
            <h2 class="h2-fluid lead text-center text-capitalize">
                <span class="text-light fz-1 text-uppercase">Nos services graphiques</span>
            </h2>
            <div class="center-flex mb-6">
                <p class="text-center text-light">
                    Nos services graphiques vous sont proposés ci-dessous.
                </p>
            </div>
        </div>
        <div class="container mb-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline">
                        @foreach ($allG as $oneG)
                            <div class="timeline">
                                <div class="timeline-content">
                                    <div class="timeline-year">
                                        <span class="small">
                                        <a href="{{ route('front.services.show', $oneG->service_slug) }}" class="text-light small"> Commander</a>
                                        </span>
                                    </div>
                                    <div class="timeline-icon shadow-box">
                                        <i class="fa fa-rocket"></i>
                                    </div>
                                    <div class="inner-content">
                                    <h3 class="title">{{ $oneG->title }}</h3>
                                        <p class="description">
                                            <b class="service-prix">{{ $oneG->priceFrench() }} TTC</b>
                                            <br> {{ $oneG->body }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach    
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="py-6" id="graphics">.
        <div class="container pt-6" data-aos="zoom-in-up" data-aos-duration="1000">
            <h2 class="h2-fluid lead text-center text-capitalize">
                <span class="fz-1 text-uppercase wellblue-text">Nos services vidéos</span>
            </h2>
            <div class="center-flex mb-6">
                <p class="text-center">
                    Nos services vidéos vous sont proposés ci-dessous.
                </p>
            </div>
        </div>
    
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="second-timeline">
                        @foreach ($allV as $oneV)
                            <div class="timeline">
                                <a class="timeline-content">
                                    <div class="timeline-icon">
                                        <i class="fa fa-camera"></i>
                                    </div>
                                    <h3 class="title">{{ $oneV->title }}</h3>
                                    <div class="inner-content">
                                        <p class="description">
                                            <b class="service-prix">{{ $oneV->priceFrench() }} TTC</b> 
                                            <br> {{ $oneV->body }}
                                        </p>
                                        <p>
                                        <button onclick="window.location.href ='#'" class="btn btn-sm btn-outline-dark btn-rounded">Commander</button>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="py-6 wellblue" id="graphics">.
        <div class="container pt-6" data-aos="zoom-in-up" data-aos-duration="1000">
            <h2 class="h2-fluid lead text-center text-capitalize">
                <span class="text-light fz-1 text-uppercase">Nos services webs</span>
            </h2>
            <div class="center-flex mb-6">
                <p class="text-center text-light">
                    Nos services webs vous sont proposés ci-dessous.
                </p>
            </div>
        </div>
        <div class="container pb-6">
            <div class="row">
                @foreach ($serviceWeb as $item)
                    <div class="col-md-4 col-sm-6 mt-3">
                        <div class="servicesBox">
                        <h3 class="title">{{ $item->title }}</h3>
                            <p class="description">
                                <b class="service-prix">{{ $item->priceFrench() }} TTC </b> 
                                <br> {!! $item->subtitle !!}</p>
                            <div class="service-icon">
                                <span><i class="{{ $item->url_fontawesome }}"></i></span>
                            </div>
                            <a href="{{ route('front.services.show', $item->service_slug) }}" class="read-more">Détails de l'offre</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection