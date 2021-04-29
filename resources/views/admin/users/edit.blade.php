@extends('admin.layouts.app')

@section('title') Admin @endsection

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark text-center">Modifier l'utilisateur</h1>
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
        <form role="form" method="POST" action="https://www.well-graphics.com/index.php/admin/users/{{ $user->id }}">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label for="username">Nom d'utilisateur</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username"
                                value="{{ $user->username }}">
                                @error('username')
                                <p class="text-danger text-sm"> {{ $message }} </p>
                                @enderror
                        </div>
                    </div>
    
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label for="name">Nom complet</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group {{ $errors->has('user_type') ? 'has-error' : '' }}">
                            <label for="user_type">{{ trans('cruds.user.fields.roles') }}*</label>
                            <select name="user_type" id="user_type" class="custom-select">
                                @foreach($roles as $role)
                                @if ($role->title == $user->user_type)
                                <option selected value="{{ $role->title }}"> {{ $role->title }}</option>
                                @else
                                <option value="{{ $role->title }}"> {{ $role->title }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
    
                    <div class="col-sm-12 d-none">
                        <div class="form-group {{ $errors->has('avatar') ? 'has-error' : '' }}">
                            <label for="avatar">Avatar</label>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                @foreach($avatars as $avatar)
                                @if ($avatar->name == $user->avatar)
                                <label class="btn btn-secondary active">
                                    <input type="radio" name="avatar" id="{{ $user->avatar }}" value="{{ $user->avatar }}"
                                        autocomplete="off" checked>
                                    <img class="img-fluid rounded-circle border border-warning"
                                        src="{{ asset('assets/img/avatar/').'/'.$user->avatar }}">
                                </label>
                                @else
                                <label class="btn btn-secondary">
                                    <input type="radio" name="avatar" id="{{ $avatar->name }}" value="{{ $avatar->name }}"
                                        autocomplete="off">
                                    <img class="img-fluid rounded-circle border border-warning"
                                        src="{{ asset('assets/img/avatar/').'/'.$avatar->name }}">
                                </label>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">
                        </div>
                    </div>
    
                    <div class="col-sm-6">
                        <div class="form-group @error('poste') is-invalid @enderror">
                            <label for="poste">poste</label>
                            <select name="poste" id="poste" class="custom-select">
                                @foreach($postes as $poste)
                                @if ($poste->name == $user->poste)
                                <option selected value="{{ $poste->name }}"> {{ $poste->fullname }}</option>
                                @else
                                <option value="{{ $poste->name }}"> {{ $poste->fullname }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('poste')
                                <p class="text-danger text-sm"> {{ $message }} </p>
                            @enderror
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="phone">Téléphone</label>
                            <input type="text" class="form-control" name="phone" id="phone" value="{{ $user->phone }}">
                        </div>
                    </div>
    
                    <div class="col-sm-6">
                        <div class="form-group {{ $errors->has('sexe') ? 'has-error' : '' }}">
                            <label for="sexe">Genre</label>
                            <select name="sexe" id="sexe" class="custom-select" required>
                                <option value="homme"> Homme</option>
                                <option value="femme"> Femme</option>
                            </select>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="text" class="form-control" name="facebook" id="facebook"
                                value="{{ $user->facebook }}">
                        </div>
                    </div>
    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="instagram">Instagram</label>
                            <input type="text" class="form-control" name="instagram" id="instagram"
                                value="{{ $user->instagram }}">
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="twitter">Twitter</label>
                            <input type="text" class="form-control" name="twitter" id="twitter"
                                value="{{ $user->twitter }}">
                        </div>
                    </div>
    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="linkedin">LinkedIn</label>
                            <input type="text" class="form-control" name="linkedin" id="linkedin"
                                value="{{ $user->linkedin }}">
                        </div>
                    </div>
                </div>
    
            </div>
            <!-- /.card-body -->
    
            <div class="card-footer text-center">
                <button type="submit" class="btn bg-orange w-50 btn-rounded text-uppercase">
                    <span class="text-light">Modifier</span>
                </button>
            </div>
        </form>
    </div>
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