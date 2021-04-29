@extends('admin.layouts.app')

@section('title') Admin @endsection

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark text-center">Utilisateur Well-Graphics</h1>
                </div><!-- /.col -->
                <div class="dropdown-divider"></div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row center-flex">
                <div class="col-md-10">
                    <div class="card card-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-purple shadow-lg">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="widget-user-image">
                                        <img class="img-circle elevation-2" src="https://ui-avatars.com/api/?name={{ $user->name }}&font-size=0.6&background=cfd8dc&color=eb6747" alt="User Avatar">
                                    </div>
                                    <!-- /.widget-user-image -->
                                    <h3 class="widget-user-username">{{ $user->name }}</h3>
                                    <h5 class="widget-user-desc">{{ $user->poste }}</h5>
                                </div>
                                
                                <div class="col-sm-5 text-right pt-3">
                                    <a class="btn btn-outline-light" href="{{ route('admin.users.index') }}">
                                         <i class="fa fa-list"></i>&nbsp; Voir la liste
                                    </a>
                                    <a class="btn btn-outline-light" href="{{ route('admin.users.edit', $user->id) }}">
                                        <i class="fa fa-edit"></i>&nbsp; Modifier
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer p-0">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th> id </th>
                                        <td> {{ $user->id }} </td>
                                    </tr>
                                    <tr>
                                        <th> Nom d'utilisateur </th>
                                        <td> {{ $user->username }} </td>
                                    </tr>
                                    <tr>
                                        <th> Nom </th>
                                        <td> {{ $user->name }} </td>
                                    </tr>
                                    <tr>
                                        <th> e-mail </th>
                                        <td> {{ $user->email }} </td>
                                    </tr>

                                    <tr>
                                        <th> Roles </th>
                                        <td> {{ $user->user_type }} </td>
                                    </tr>

                                    <tr>
                                        <th> Téléphone </th>
                                        <td> {{ $user->phone }} </td>
                                    </tr>

                                    <tr>
                                        <th> Genre </th>
                                        <td> {{ $user->sexe }} </td>
                                    </tr>

                                    <tr>
                                        <th> Poste </th>
                                        <td> {{ $user->poste }} </td>
                                    </tr>

                                    <tr>
                                        <th> Facebook </th>
                                        <td> {{ $user->facebook }} </td>
                                    </tr>

                                    <tr>
                                        <th> Instagram </th>
                                        <td> {{ $user->instagram }} </td>
                                    </tr>

                                    <tr>
                                        <th> Twitter </th>
                                        <td> {{ $user->twitter }} </td>
                                    </tr>

                                    <tr>
                                        <th> LinkedIn </th>
                                        <td> {{ $user->linkedin }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection