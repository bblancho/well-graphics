@extends('layouts.frontLayout')

@section('title') Mon profil {{ Auth::user()->name }} {{ Auth::user()->username }} @endsection

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
                    Espace personnel de  {{ Auth::user()->name }} {{ Auth::user()->username }}  </h1>
                </div>
            </div>
            <div class="col-md-12 hide-on-med-and-down py-5 mb-5"></div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark text-center mt-3"> Modification du mot de passe </h1>
                </div><!-- /.col -->
                <div class="dropdown-divider"></div>
            </div><!-- /.row --> 
        </div><!-- /.container-fluid -->
    </div>

    <div class="container px-4 mb-3">

       <div class="card card-purple">
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{ route('front.password.update') }}">
            @csrf 
            @method('PUT')
            <div class="card-body">
                <div class="row">

                    <div class="input-group mb-3">
                        <input id="password_old" type="password" class="form-control @error('password_old') is-invalid @enderror" name="password_old" required  placeholder="Ancien mot de passe">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password_old')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required  placeholder="Nouveau mot de passe">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Confirmer mot de passe" name="password_confirmation" required >
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                </div>
 
            </div>
            <!-- /.card-body -->
            <div class=" text-center mb-3">
                <input type="submit" class="btn btn-info w-50 text-uppercase" value="Modifier">
            </div>
        </form>
    </div>

</div>
@endsection

@section('script')
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js"></script>
    <script>
        $('#myDropdown').ddslick({
        onSelected: function(selectedData){
        //callback function: do something with selectedData;
        }
        });
    </script>
@endsection