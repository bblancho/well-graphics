@extends('layouts.frontLayout')

@section('title') Contact @endsection

@section('hero')
    <div class="hero-wrap well-fullheight shadow-box">
        <div class="overlay contact"></div>
        <div id="particles-js"></div>
        <div class="container">
    
            <div class="row gt-0 content-text center-flex" style="margin-top:20%">
                <div class="col-md-10 hero-wg text-center">
                    <div class="container">
                        <h1 class="mb-3 h1-fluid text-uppercase" data-aos="zoom-in-down" data-aos-duration="1000">
                            Contactez-nous!</h1>
                        <p data-aos="zoom-in-up" data-aos-duration="1000">
                            Un problème technique ? Une question ? N’hésitez pas à contacter notre support technique et
                            commercial afin de pouvoir obtenir des réponses à vos questions. Nous restons disponibles
                            24H/24H, 7J/7
                        </p>
                        <p class="mt-5" data-aos="zoom-in-up" data-aos-duration="1500">
                            <a href="#contact_f" class="well-link-blue"> <span>Prendre contact</span> </a>
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
    <section class="py-6" id="contact_f">
        <div class="container pt-6" data-aos="zoom-in-up" data-aos-duration="1000">
            <h2 class="h2-fluid lead text-center text-capitalize">
                <span class="wellblue-text fz-1 text-uppercase">Contacter Well-graphics</span>
            </h2>
        </div>
    
        <div class="container pb-6 text-center">
            <div class="row">
                <div class="col-md-6" id="devisIto">
                    <div class="center-flex">
                        <div class="mt-5">
                            <h3 class="h3-fluid lead text-center text-capitalize">
                                <span class="wellblue-text fz-01 text-uppercase">Pour un devis?</span>
                            </h3>
                            <div class="center-flex">
                                <p class="col-md-10">
                                    Vous souhaitez la réalisation d’un service graphique ou web n’étant pas disponible sur
                                    notre boutique ? N’hésitez pas à « demander un devis » en cliquant ci-dessous afin que
                                    nous puissions étudier votre demande.
                                    <br><br>
                                    La réalisation d’un devis n’est pas facturée.
                                </p>
                            </div>
    
                            <p class="mt-5" data-aos="zoom-in-up" data-aos-duration="1500">
                                <a href="#" class="well-link-blue" data-toggle="modal" data-target="#devis">
                                    <span>Demander un devis</span> </a>
                            </p>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="form-bg mt-4">
                        <div class="form-container">
                        <form method="POST" action="{{ route('contacts.contactus') }}">
                                @csrf
                                <div class="form-horizontal shadow-box">
                                    <div class="heading">Ecrivez-nous</div>
                                    <span>Complétez le formulaire ci-dessous.</span>
                                    <div class="form-group">
                                        <i class="fa fa-user icon"></i>
                                        <input class="form-control @error('name') is-invalid  @enderror" type="text" name="name"  placeholder="Votre nom complet" value="{{ old('name')}}">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <i class="fa fa-envelope icon"></i>
                                        <input class="form-control @error('email') is-invalid  @enderror" type="email" name="email"  placeholder="Votre e-mail" value="{{ old('email')}}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <i class="fa fa-align-justify icon"></i>
                                        <textarea class="form-control h-50 @error('message') is-invalid  @enderror" rows="8" cols="35" name="message"  placeholder="Votre message" id="Textarea1">
                                            {{ old('message')}}
                                        </textarea>
                                        @error('message')
                                            <div class="invalid-feedback">
                                                {{ $errors->first('message') }}
                                            </div>
                                        @enderror
                                    </div>

                                    <button class="btn btn-default" type="submit">Envoyer</button>
                                </div>
                            </form>
                            <div class="login-form">
                                <p class="py-3">
                                    <span class="text-light small">Nous vous répondrons dans les plus brefs délais.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="py-6 wellblue" id="r_graphics">.
        <div class="container-fluid" data-aos="zoom-in-up" data-aos-duration="1000">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <h2 class="text-center ">
                        <span class="text-uppercase text-light">Email</span>
                    </h2>
                    <p class="text-center text-light">
                        contact@well-graphics.com
                    </p>
                </div>
    
                <div class="col-md-4 col-sm-6">
                    <h2 class="text-center ">
                        <span class="text-uppercase text-light">Téléphone</span>
                    </h2>
                    <p class="text-center text-light">
                        Momentanément indisponible
                    </p>
                </div>
    
                <div class="col-md-4 col-sm-6">
                    <h2 class="text-center ">
                        <span class="text-uppercase text-light">Réseaux sociaux</span>
                    </h2>
                    <div class="text-center small">
                        @include('parts.social')
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Devis Modal -->
    <div class="modal fade" id="devis" tabindex="-1" role="dialog" aria-labelledby="devisLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header wellred">
                    <h5 class="modal-title text-light text-uppercase" id="devisLabel">Demander un devis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-light">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('contacts.devis') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="text" name="name" placeholder="Votre nom complet/Votre société"
                                    class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}">
                                
                                @error('name')
                                    <div class="invalid-feedback"> {{ $errors->first('name') }} </div>
                                @enderror
                            </div>
    
                            <div class="form-group col-md-12">
                                <input type="email" name="email" placeholder="Votre e-mail" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email">
                                @error('email')
                                    <div class="invalid-feedback"> {{ $errors->first('email') }} </div>
                                @enderror
                            </div>
    
                            <div class="form-group col-md-12">
                                <label for="type">Services :</label><br>
                                <select name="type" class="custom-select w-50 @error('type') is-invalid @enderror">
                                    <option selected>Choisissez</option>
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->name }}">
                                            <span class="text-uppercase"> {{ $tag->name }} </span>
                                        </option>
                                    @endforeach
                                </select>

                                @error('type')
                                    <div class="invalid-feedback"> {{ $errors->first('type') }} </div>
                                @enderror
                            </div>
    
                            <div class="form-group col-md-12  @error('notes') is-invalid @enderror">
                                <textarea name="notes" class="form-control" placeholder="Note pour la demande" rows="8" cols="35"> {{ old('notes')}} </textarea>
                            </div>
                            @error('notes')
                                <div class="invalid-feedback"> {{ $errors->first('notes') }} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer wellblue">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-success text-uppercase">Envoyer la demande</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection