@extends('layouts.frontLayout')

@section('title') Réalisations @endsection

@section('hero')
    <div class="hero-wrap well-fullheight shadow-box">
        <div class="overlay realisation"></div>
        <div id="particles-js"></div>
        <div class="container">
            <div class="row gt-0 content-text center-flex" style="margin-top:20%">
                <div class="col-md-10 hero-wg text-center">
                    <div class="container">
                        <h1 class="mb-3 h1-fluid text-uppercase" data-aos="zoom-in-down" data-aos-duration="1000">Nos
                            réalisations<br> graphiques et webs</h1>
                        <p data-aos="zoom-in-up" data-aos-duration="1000">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in tenetur
                            doloremque, maiores doloribus officia iste. Dolores.
                        </p>
                        <p class="mt-5" data-aos="zoom-in-up" data-aos-duration="1500">
                            <a href="#r_graphics" class="well-link-blue smoothscroll"> <span>Explorer</span> </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-12 hide-on-med-and-down mb-5"></div>
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
    <section class="py-6 wellblue" id="r_graphics">.
        <div class="container pt-6" data-aos="zoom-in-up" data-aos-duration="1000">
            <h2 class="h2-fluid lead text-center text-capitalize">
                <span class="text-light fz-1 text-uppercase">Nos réalisations graphiques</span>
            </h2>
            <div class="center-flex mb-6">
                <p class="text-center text-light">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                </p>
            </div>
        </div>
    
        <div>
            <div class="container pb-6">
                <div class="row">
                    <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 mt-4">
                        <div class="wg-rlst-crd">
                            <div class="signature-content">
                                <div class="signature-details">
                                    <h2 class="title">La réalisation</h2>
                                    <span class="post">Catégorie</span>
                                </div>
                                <ul class="inner-content">
                                    <li class="lh-11 text-justify">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </li>
                                    <li class="mt-2"><span class="fa fa-globe"></span> www.clients.com</li>
                                </ul>
                            </div>
                            <div class="signature-img">
                                <img src="{{ asset('assets/img/old/hero.png') }}" alt="">
                            </div>
                            <ul class="icon">
                                <li><a href=""><i class="fa fa-search"></i></a></li>
                            </ul>
                        </div>
                    </div>
    
                    <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 mt-4">
                        <div class="wg-rlst-crd">
                            <div class="signature-content">
                                <div class="signature-details">
                                    <h2 class="title">La réalisation</h2>
                                    <span class="post">Catégorie</span>
                                </div>
                                <ul class="inner-content">
                                    <li class="lh-11 text-justify">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </li>
                                    <li class="mt-2"><span class="fa fa-globe"></span> www.clients.com</li>
                                </ul>
                            </div>
                            <div class="signature-img">
                                <img src="{{ asset('assets/img/old/hero.png') }}" alt="">
                            </div>
                            <ul class="icon">
                                <li><a href=""><i class="fa fa-search"></i></a></li>
                            </ul>
                        </div>
                    </div>
    
                    <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 mt-4">
                        <div class="wg-rlst-crd">
                            <div class="signature-content">
                                <div class="signature-details">
                                    <h2 class="title">La réalisation</h2>
                                    <span class="post">Catégorie</span>
                                </div>
                                <ul class="inner-content">
                                    <li class="lh-11 text-justify">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </li>
                                    <li class="mt-2"><span class="fa fa-globe"></span> www.clients.com</li>
                                </ul>
                            </div>
                            <div class="signature-img">
                                <img src="{{ asset('assets/img/old/hero.png') }}" alt="">
                            </div>
                            <ul class="icon">
                                <li><a href=""><i class="fa fa-search"></i></a></li>
                            </ul>
                        </div>
                    </div>
    
                    <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 mt-4">
                        <div class="wg-rlst-crd">
                            <div class="signature-content">
                                <div class="signature-details">
                                    <h2 class="title">La réalisation</h2>
                                    <span class="post">Catégorie</span>
                                </div>
                                <ul class="inner-content">
                                    <li class="lh-11 text-justify">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </li>
                                    <li class="mt-2"><span class="fa fa-globe"></span> www.clients.com</li>
                                </ul>
                            </div>
                            <div class="signature-img">
                                <img src="{{ asset('assets/img/old/hero.png') }}" alt="">
                            </div>
                            <ul class="icon">
                                <li><a href=""><i class="fa fa-search"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="py-6" id="videos">.
        <div class="container pt-6" data-aos="zoom-in-up" data-aos-duration="1000">
            <h2 class="h2-fluid lead text-center text-capitalize">
                <span class="wellblue-text fz-1 text-uppercase">Nos réalisations graphiques</span>
            </h2>
            <div class="center-flex mb-6">
                <p class="text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                </p>
            </div>
        </div>
    
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="realisationB">
                        <div class="service-icon">
                            <span><i class="fa fa-camera"></i></span>
                        </div>
                        <h3 class="title">La Réalisation</h3>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit
                            quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p>
                        <a href="" class="read-more">Visionner</a>
                    </div>
                </div>
    
                <div class="col-md-3 col-sm-6">
                    <div class="realisationB purple">
                        <div class="service-icon">
                            <span><i class="fa fa-camera"></i></span>
                        </div>
                        <h3 class="title">La Réalisation</h3>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit
                            quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p>
                        <a href="" class="read-more">Visionner</a>
                    </div>
                </div>
    
                <div class="col-md-3 col-sm-6">
                    <div class="realisationB green">
                        <div class="service-icon">
                            <span><i class="fa fa-camera"></i></span>
                        </div>
                        <h3 class="title">La Réalisation</h3>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit
                            quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p>
                        <a href="" class="read-more">Visionner</a>
                    </div>
                </div>
    
                <div class="col-md-3 col-sm-6">
                    <div class="realisationB">
                        <div class="service-icon">
                            <span><i class="fa fa-camera"></i></span>
                        </div>
                        <h3 class="title">La Réalisation</h3>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit
                            quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p>
                        <a href="" class="read-more">Visionner</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="py-6 wellblue" id="r_graphics">.
        <div class="container pt-6" data-aos="zoom-in-up" data-aos-duration="1000">
            <h2 class="h2-fluid lead text-center text-capitalize">
                <span class="text-light fz-1 text-uppercase">Nos réalisations web</span>
            </h2>
            <div class="center-flex mb-6">
                <p class="text-center text-light">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                </p>
            </div>
        </div>
    
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 mt-4">
                    <div class="web-wg-rlst org">
                        <div class="signature-icon center-flex">
                            <img src="{{ asset('assets/img/cl/2.png') }}" class="img-fluid w-50">
                        </div>
                        <div class="signature-details">
                            <h2 class="title"><span>La</span> Réalisation</h2>
                            <span class="post">Web design</span>
                        </div>
                        <ul class="signature-content">
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                            </li>
                        </ul>
                        <ul class="icon">
                            <li> <a href="" class="btn btn-outline-dark btn-rounded btn-sm">Visiter</a> </li>
                        </ul>
                    </div>
                </div>
    
                <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 mt-4">
                    <div class="web-wg-rlst">
                        <div class="signature-icon center-flex">
                            <img src="{{ asset('assets/img/cl/3.png') }}" class="img-fluid w-50">
                        </div>
                        <div class="signature-details">
                            <h2 class="title"><span>La</span> Réalisation</h2>
                            <span class="post">Création site web</span>
                        </div>
                        <ul class="signature-content">
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                            </li>
                        </ul>
                        <ul class="icon">
                            <li> <a href="" class="btn btn-outline-dark btn-rounded btn-sm">Visiter</a> </li>
                        </ul>
                    </div>
                </div>
    
                <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 mt-4">
                    <div class="web-wg-rlst">
                        <div class="signature-icon center-flex">
                            <img src="{{ asset('assets/img/cl/4.png') }}" class="img-fluid w-50">
                        </div>
                        <div class="signature-details">
                            <h2 class="title"><span>La</span> Réalisation</h2>
                            <span class="post">Création site web</span>
                        </div>
                        <ul class="signature-content">
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                            </li>
                        </ul>
                        <ul class="icon">
                            <li> <a href="" class="btn btn-outline-dark btn-rounded btn-sm">Visiter</a> </li>
                        </ul>
                    </div>
                </div>
    
                <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 mt-4">
                    <div class="web-wg-rlst org">
                        <div class="signature-icon center-flex">
                            <img src="{{ asset('assets/img/cl/6.png') }}" class="img-fluid w-50">
                        </div>
                        <div class="signature-details">
                            <h2 class="title"><span>La</span> Réalisation</h2>
                            <span class="post">Web design</span>
                        </div>
                        <ul class="signature-content">
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                            </li>
                        </ul>
                        <ul class="icon">
                            <li> <a href="" class="btn btn-outline-dark btn-rounded btn-sm">Visiter</a> </li>
                        </ul>
                    </div>
                </div>
    
            </div>
        </div>
    </section>
@endsection