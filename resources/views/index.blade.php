@extends('layouts.frontLayout')

@section('title') Agence de réalisations graphiques et de développement web @endsection

@section('hero')
<div class="hero-wrap well-fullheight">
    <div class="overlay"></div>
    <div id="particles-js"></div>
    <div class="container">

        <div class="row gt-0 content-text center-flex" style="margin-top:13%">
            <div class="col-md-5 hero-wg">
                <h1 class="mb-3" data-aos="zoom-in-down" data-aos-duration="1000">Agence de réalisations graphiques et de développement web</h1>
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
        </div>
    </div>
</div>
@endsection

@section('content')
<!-- service -->
<section id="services">
    <div class="py-6">
        <div>
            <div class="container pt-6" data-aos="zoom-in-up" data-aos-duration="1000">
                <h2 class="h2-fluid lead text-center text-capitalize">
                    <span class="wellblue-text fz-1 text-uppercase">Nos services graphiques</span>
                </h2>
                <hr class="col-md-5 mb-5 hr-dark">
                <div class="center-flex mb-6" style="flex-wrap: wrap;flex-direction: column;">
                    <p class="center-flex text-center ">
                        Well-Graphics.com vous propose une large game de services allant d'un simple logo à la
                        création d'une affiche. Cliquez sur nos services afin de découvrir l'ensemble de nos
                        services graphiques.
                    </p>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    @foreach($serviceGraphique as $graphique)
                        <div class="col-md-4 col-sm-6 my-2" data-aos="fade-down-right" data-aos-duration="1000">
                            <div class="serviceBox1 blue">
                                <div class="service-icon">
                                    <span><i class="{{ $graphique->url_fontawesome }}"></i></span>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">{{ $graphique->title }}</h3>
                                    <p class="description">{{ $graphique->body }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <p class="text-center mt-4" data-aos="fade-up" data-aos-duration="1100">
                <a href="{{ route('front.contact').'#devisIto' }}" class="fz-1 text-uppercase well-link-blue shadow-box"> <span>Demander un
                            devis</span> </a>
                </p>
            </div>

        </div>
    </div>
</section>
<!-- //service -->

<section class="wellblue">
    <div class="py-6">
        <div class="container pt-6" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
            data-aos-duration="1200">
            <h2 class="h2-fluid lead text-center text-capitalize">
                <span class="text-light fz-1 text-uppercase">Nos services web</span>
            </h2>
            <hr class="col-md-5 mb-5 hr-light">
            <div class="center-flex mb-6" style="flex-wrap: wrap;flex-direction: column;">
                <p class="center-flex text-center text-white">
                    Nous proposons la création de votre site web sur mesures à votre image ou à celle de votre
                    entreprise. Parallèlement, vous pourrez suivre en temps réel l'avancée de votre commande par
                    un suivi détaillé de cette dernière.
                </p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach( $serviceWeb as $web )
                    <div class="col-md-4 col-sm-6">
                        <div class="serviceBox orange" data-aos="flip-up" data-aos-duration="1000">
                            <div class="service-icon">
                                <span><i class="fa fa-globe"></i></span>
                            </div>
                            <h3 class="title">{{ $web->title }}</h3>
                            <p class="description">
                                <br>
                                {{ $web->body }}
                                <br><br>
                                <div>
                                    <span class="small">
                                    <a href="{{ route('front.services.show', $web->service_slug) }}" class="btn btn-primary"> Détails de l'offre</a>
                                    </span>
                                </div>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <p class="text-center mt-4" data-aos="fade-up" data-aos-duration="1100">
        <a href="{{ route('front.services') }}" class="fz-1 text-uppercase well-link shadow-box"> <span>tous nos
                    services</span> </a>
        </p>
    </div>
</section>

<section class="py-7">
    <div class="">
        <div class="">
            <div class="prix-wG">
                <div class="text-center">
                    <h2 class="h2-fluid lead text-center text-capitalize" data-aos="flip-up" data-aos-duration="1500">
                        <span class="fz-1 wellblue-text text-uppercase">Nos tarifs</span>
                    </h2>
                    <div class="center-flex mb-5" data-aos="flip-down" data-aos-duration="1500">
                        <p class="col-sm-8">Nos tarifs présents ci-dessous ne représentent pas l'ensemble de nos
                            services. Cliquez sur "nos services" afin de découvrir l'ensemble des tarifs
                            appliqués à nos prestations.</p>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6" data-aos="fade-right" data-aos-duration="1100">
                            <div class="pricingTable">
                                <div class="pricingTable-header">
                                    <h3 class="title">logo complet</h3>
                                </div>
                                <div class="price-value">
                                    <span class="amount">107€ TTC</span>
                                </div>
                                <ul class="pricing-content">
                                    <li> Réalisation sur mesures </li>
                                    <li> Un libre choix des couleurs utilisées </li>
                                    <li> Des détails précis </li>
                                    <li> Délai de livraison respecté </li>
                                </ul>
                                <div class="">
                                    <a href="/index.php/commandes" class="well-link"><span>Commander</span> </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="1100">
                            <div class="pricingTable blue">
                                <div class="pricingTable-header">
                                    <h3 class="title">site e-commerce</h3>
                                </div>
                                <div class="price-value">
                                    <span class="amount-sm">972€ TTC</span>
                                </div>
                                <ul class="pricing-content">
                                    <li> Site personnalisé </li>
                                    <li> Optimisation </li>
                                    <li> Fonctionnalités avancées </li>
                                    <li> Délai de livraison respecté </li>
                                </ul>
                                <div class="">
                                    <a href="/index.php/commandes" class="well-link-blue"><span>Commander</span> </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6" data-aos="fade-left" data-aos-duration="1100">
                            <div class="pricingTable">
                                <div class="pricingTable-header">
                                    <h3 class="title">logo réseaux sociaux</h3>
                                </div>
                                <div class="price-value">
                                    <span class="amount">72€ TTC</span>
                                </div>
                                <ul class="pricing-content">
                                    <li> Format adapté </li>
                                    <li> Un libre choix de couleurs utilisées </li>
                                    <li> Identité visuelle de votre entreprise </li>
                                    <li> Délai de livraison respecté </li>
                                </ul>
                                <div class="">
                                    <a href="/index.php/commandes" class="well-link"><span>Commander</span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- réalisation -->
<section class="py-6 wellblue realisation">
    <div class="container pt-6" data-aos="zoom-in-down" data-aos-duration="1000">
        <h2 class="h2-fluid lead text-center text-capitalize">
            <span class="text-light fz-1 text-uppercase">Nos réalisations</span>
        </h2>
        <hr class="col-md-5 mb-5 hr-light">
        <div class="center-flex mb-6">
            <p class="center-flex text-center lh-01">
                Ci-dessous, de nombreux exemples de réalisations effectuées par notre équipe.
            </p>
        </div>
    </div>

    <div class="container pb-6">
        <div class="row">
            <div class="col-md-4 col-sm-6 box-gallerie my-2">
                <div class="box shadow-box rounded" data-aos="fade-up-down" data-aos-duration="1500">
                    <img src="{{ asset('assets/img/1.jpg') }}" alt="gallerie" class="">
                    <div class="box-content">
                        <div class="content hide-on-med-and-down">
                            <span class="post wellred-text">Services graphiques</span>
                            <h3 class="title"> Nom Auteur</h3>
                        </div>
                        <ul class="icon">
                            <li>
                                <a href="{{ asset('assets/img/1.jpg') }}" class="ot-none" data-fancybox="gallery"
                                    data-caption="My caption"><i class="fa fa-search"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 box-gallerie my-2">
                <div class="box shadow-box rounded" data-aos="fade-up-down" data-aos-duration="1500">
                    <img src="{{ asset('assets/img/2.jpg') }}" alt="gallerie" class="">
                    <div class="box-content">
                        <div class="content hide-on-med-and-down">
                            <span class="post wellred-text">Services graphiques</span>
                            <h3 class="title"> Nom Auteur</h3>
                        </div>
                        <ul class="icon">
                            <li>
                                <a href="{{ asset('assets/img/2.jpg') }}" class="ot-none" data-fancybox="gallery"
                                    data-caption="My caption"><i class="fa fa-search"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 box-gallerie my-2">
                <div class="box shadow-box rounded" data-aos="fade-up-down" data-aos-duration="1500">
                    <img src="{{ asset('assets/img/3.jpg') }}" alt="gallerie" class="">
                    <div class="box-content">
                        <div class="content hide-on-med-and-down">
                            <span class="post wellred-text">Services graphiques</span>
                            <h3 class="title"> Nom Auteur</h3>
                        </div>
                        <ul class="icon">
                            <li>
                                <a href="{{ asset('assets/img/3.jpg') }}" class="ot-none" data-fancybox="gallery"
                                    data-caption="My caption"><i class="fa fa-search"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 box-gallerie my-2">
                <div class="box shadow-box rounded" data-aos="fade-up-down" data-aos-duration="1500">
                    <img src="{{ asset('assets/img/old/44.pn') }}g" alt="gallerie" class="">
                    <div class="box-content">
                        <div class="content">
                            <span class="post wellred-text">Services graphiques</span>
                            <h3 class="title"> Nom Auteur</h3>
                        </div>
                        <ul class="icon">
                            <li>
                                <a href="{{ asset('assets/img/old/44.png') }}" class="ot-none" data-fancybox="gallery"
                                    data-caption="My caption"><i class="fa fa-search"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 box-gallerie my-2">
                <div class="box shadow-box rounded" data-aos="fade-up-down" data-aos-duration="1500">
                    <img src="{{ asset('assets/img/old/11.png') }}" alt="gallerie" class="">
                    <div class="box-content">
                        <div class="content hide-on-med-and-down">
                            <span class="post wellred-text">Services graphiques</span>
                            <h3 class="title"> Nom Auteur</h3>
                        </div>
                        <ul class="icon">
                            <li>
                                <a href="{{ asset('assets/img/old/11.png') }}" class="ot-none" data-fancybox="gallery"
                                    data-caption="My caption"><i class="fa fa-search"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 box-gallerie my-2">
                <div class="box shadow-box rounded" data-aos="fade-up-down" data-aos-duration="1500">
                    <img src="{{ asset('assets/img/old/44.png') }}" alt="gallerie" class="">
                    <div class="box-content">
                        <div class="content">
                            <span class="post wellred-text">Services graphiques</span>
                            <h3 class="title"> Nom Auteur</h3>
                        </div>
                        <ul class="icon">
                            <li>
                                <a href="{{ asset('assets/img/old/44.png') }}" class="ot-none" data-fancybox="gallery"
                                    data-caption="My caption"><i class="fa fa-search"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <p class="text-center mt-4" data-aos="fade-up" data-aos-duration="1100">
        <a href="{{ route('front.realisations') }}" class="fz-1 text-uppercase well-link-blue shadow-box"> <span>Toutes nos
                réalisations</span> </a>
    </p>

</section>

<section class="py-7 jarallax" data-speed="0.2">
    <div class="text-center">
        <h2 class="h2-fluid lead text-center text-capitalize" data-aos="flip-up" data-aos-duration="1500">
            <span class="wellblue-text fz-1 text-uppercase">Nos Clients</span>
        </h2>
        <div class="center-flex mb-5" data-aos="flip-down" data-aos-duration="1500">
            <p class="col-sm-8">Votre avis est important pour nous. Plusieurs clients nous ont laissé différents
                avis concernant la qualité de nos services rendus.</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="swiper-container well-testi col-md-11">
                <div id="testimonial-slider" class="swiper-wrapper">

                    <div class="swiper-slide testimonial">
                        <div class="pic center-flex">
                            <i class="fa fa-users fa-4x"></i>
                        </div>
                        <div class="testimonial-content p-4 mr-4">
                            <p class="description">
                                Je suis ravi d'avoir passé commande chez Well-Graphics. L'écoute ainsi que la
                                qualité y sont au rendez-vous tout comme le respect des délais de livraison. Je
                                recommande vivement !
                            </p>
                            <h3 class="testimonial-title">Benoit
                                <small class="post">Service graphique</small>
                            </h3>
                        </div>
                    </div>

                    <div class="swiper-slide testimonial">
                        <div class="pic center-flex">
                            <i class="fa fa-users fa-4x"></i>
                        </div>
                        <div class="testimonial-content p-4 mr-4">
                            <p class="description">
                                Je suis très satisfaite de la réalisation de mon site personnel qui est en
                                parfaite adéquation avec mes souhaits.
                            </p>
                            <h3 class="testimonial-title">Marie
                                <small class="post">Conception site web</small>
                            </h3>
                        </div>
                    </div>

                    <div class="swiper-slide testimonial">
                        <div class="pic center-flex">
                            <i class="fa fa-users fa-4x"></i>
                        </div>
                        <div class="testimonial-content p-4 mr-4">
                            <p class="description">
                                Ma commande concernant la réalisation d'un webdesign a été exécuté en un temps
                                record ! En plus de cela, la qualité est au rendez-vous.
                            </p>
                            <h3 class="testimonial-title">Antoine
                                <small class="post">Webdesign</small>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 center-flex">
                <p>
                    <button class="btn-floating btn-lg wellblue swiper-button-prev mr-3"> <i
                            class="fa fa-angle-double-left"></i> </button>
                    <button class="btn-floating btn-lg wellblue swiper-button-next ml-3"> <i
                            class="fa fa-angle-double-right"></i> </button>
                </p>
            </div>
        </div>
    </div>
</section>

<!--Clients-->
<section class="py-8 wellblue">
    <div class="text-center">
        <h4 class="h4-fluid lead text-center" data-aos="fade-in" data-aos-duration="1500">
            <span class="text-light fz-1">Faites comme eux, faites-nous confiance</span>
        </h4>
        <div class="center-flex mb-5" data-aos="fade-out" data-aos-duration="1500">
            <p class="col-sm-8 text-light">Ces entreprises nous ont fait confiance ! Pourquoi ne pas rejoindre
                cette liste ?</p>
        </div>
    </div>

    <div class="swiper-container well-client">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('assets/img/cl/1.png') }}" class="h-9 p-2" alt="client well graphics">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/img/cl/2.png') }}" class="h-9 p-2" alt="client well graphics">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/img/cl/3.png') }}" class="h-9 p-2" alt="client well graphics">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/img/cl/4.png') }}" class="h-9 p-2" alt="client well graphics">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/img/cl/6.png') }}" class="h-9 p-2" alt="client well graphics">
            </div>
        </div>
    </div>

</section>

<section class="py-7">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6" data-aos="fade-down" data-aos-duration="1500">
                <img src="{{ asset('assets/img/bg.svg') }}" class="img-fluid" alt="well graphics illustration language">
            </div>

            <div class="col-md-8 col-sm-6">
                <div class="text-center">
                    <h2 class="h2-fluid lead text-center text-capitalize" data-aos="flip-up" data-aos-duration="1500">
                        <span class="wellblue-text text-uppercase">Nos amis fidèles</span>
                    </h2>
                    <div class="center-flex mb-5" data-aos="flip-down" data-aos-duration="1500">
                        <p class="col-sm-12 small">Nous utilisions divers logiciels afin de pouvoir réaliser vos
                            commandes. Ces derniers nous permettent la réalisation de créations graphiques et
                            web sur mesures.</p>
                    </div>
                    <div class="row">
                        <div class="col" data-aos="zoom-in" data-aos-duration="500">
                            <img src="{{ asset('assets/img/lg/ps.svg') }}" class="img-fluid w-50" alt="photoshop logo">
                        </div>
                        <div class="col" data-aos="zoom-in" data-aos-duration="1000">
                            <img src="{{ asset('assets/img/lg/ai.svg') }}" class="img-fluid w-50"
                                alt="illustrator logo">
                        </div>
                        <div class="col" data-aos="zoom-in" data-aos-duration="1500">
                            <img src="{{ asset('assets/img/lg/ae.svg') }}" class="img-fluid w-50"
                                alt="after effect logo">
                        </div>
                        <div class="col" data-aos="zoom-in" data-aos-duration="2000">
                            <img src="{{ asset('assets/img/lg/pr.png') }}" class="img-fluid w-50" alt="premiere logo">
                        </div>
                        <div class="col" data-aos="zoom-in" data-aos-duration="2500">
                            <img src="{{ asset('assets/img/lg/lara1.svg') }}" class="img-fluid w-50"
                                alt="premiere logo">
                        </div>
                        <div class="col" data-aos="zoom-in" data-aos-duration="3000">
                            <img src="{{ asset('assets/img/lg/ci.svg') }}" class="img-fluid w-50" alt="premiere logo">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-4" data-aos="fade-up" data-aos-duration="2500">
                            <img src="{{ asset('assets/img/lg/wp.svg') }}" class="img-fluid h-75" alt="photoshop logo">
                        </div>
                        <div class="col-sm-4" data-aos="fade-up" data-aos-duration="2000">
                            <img src="{{ asset('assets/img/lg/shopify1.svg') }}" class="img-fluid h-75"
                                alt="illustrator logo">
                        </div>
                        <div class="col-sm-4" data-aos="fade-up" data-aos-duration="1000">
                            <img src="{{ asset('assets/img/lg/presta1.svg') }}" class="img-fluid h-75"
                                alt="after effect logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
