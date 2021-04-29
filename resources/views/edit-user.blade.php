@extends('layouts.frontLayout')

@section('title') Mon profil {{ $user->username }} @endsection

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
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark text-center mt-3"> Informations personnel  de {{ $user->username }} </h1>
                </div><!-- /.col -->
                <div class="dropdown-divider"></div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container px-4 mb-3">
       <div class="card card-purple">
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{ route('front.compte.update', $user->id ) }}">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ $user->name }}" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label for="username">Prénom</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username"
                                value="{{ $user->username }}" required>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ $user->email }}" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                    <label for="societe">Nom de la société</label>
                        <input type="text" class="form-control @error('societe') is-invalid @enderror" name="societe"  value="{{  $user->societe  }}" required>
                        @error('societe')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
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