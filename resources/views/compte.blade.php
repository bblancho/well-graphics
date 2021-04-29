@extends('layouts.frontLayout')

@section('title') Mon compte @endsection

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
                    Espace personnel de  {{ $user->name }} {{ $user->username }}  </h1>
                </div>
            </div>
            <div class="col-md-12 hide-on-med-and-down py-5 mb-5"></div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content-wrapper mb-5 mt-3">
    <div class="container-fluid">
        <div class="container">
            <div class="row center-flex">
                <div class="col-md-10">
                    <div class="card card-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                     
                        <div class="card-footer p-0">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th> Nom: </th>
                                        <td> {{ $user->name }} </td>
                                    </tr>
                                    <tr>
                                        <th> Prénom: </th>
                                        <td> {{ $user->username }} </td>
                                    </tr>
                                    <tr>
                                        <th> e-mail: </th>
                                        <td> {{ $user->email }} </td>
                                    </tr>

                                    <tr>
                                        <th> Nom de la société: </th>
                                        <td> {{ $user->societe }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p class="mt-3">
                        <a class="btn btn-secondary pull-right ml-3" href="{{ route('front.password') }}">Changer mon mot de passe</a>
                        <a class="btn btn-info pull-right ml-3" href="{{ route('front.compte.edit', $user->id) }}">Modifier mes informations</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection