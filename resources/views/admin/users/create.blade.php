@extends('admin.layouts.app')

@section('title') Admin @endsection

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark text-center">Créer un l'utilisateur</h1>
                </div><!-- /.col -->
                <div class="dropdown-divider"></div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container px-4">
        <div class="card card-purple">
            <div class="card-header">
                <h3 class="card-title">Remplissez les champs</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
        <form role="form" method="POST" action="{{ route('admin.users.index') }}">
                @csrf
                <div class="card-body">
                    <div class="row">        
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label for="name">Nom complet</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    id="name" placeholder="Nom complet" value="{{ old('name') }}">
                                @error('name')
                                <p class="text-danger text-sm"> {{ $message }} </p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                                    placeholder="E-mail" value="{{ old('email') }}">
                                @error('email')
                                <p class="text-danger text-sm"> {{ $message }} </p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="twitter">Mot de passe</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="twitter" placeholder="Mot de passe">
                                @error('password')
                                <p class="text-danger text-sm"> {{ $message }} </p>
                                @enderror
                            </div>
                        </div>
                    
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="linkedin">Confirmez mot de passe</label>
                                <input type="password" class="form-control @error('password_confirm') is-invalid @enderror" name="password_confirm" id="linkedin" placeholder="Confirmez mot de passe">
                                @error('passwor_confirm')
                                <p class="text-danger text-sm"> {{ $message }} </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
        
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-success w-50 btn-rounded text-uppercase">
                        <span class="text-light">Créer</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection

@section('script')
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js">
</script>
<script>
    $('#myDropdown').ddslick({
        onSelected: function(selectedData){
        //callback function: do something with selectedData;
        }
        });
</script>
@endsection