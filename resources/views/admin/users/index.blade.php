@extends('admin.layouts.app')

@section('title') Carte de visite @endsection

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Liste des utilisateurs Well-Graphics</h1>
                </div><!-- /.col -->
                <div class="dropdown-divider"></div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                <a class="btn btn-success btn-rounded text-light" href="{{ route('admin.users.create') }}">
                        <i class="fa fa-user-plus" aria-hidden="true"></i> Ajouter un utilisateur 
                    </a>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center text-uppercase">
                            <th width="10"> id </th>
                            <th> Nom utilisateur </th>
                            <th> nom </th>
                            <th> e-mail </th>
                            <th> poste </th>
                            <th> roles </th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usersall as $key => $user)
                        <tr data-entry-id="{{ $user->id }}">
                            <td class="text-center"> {{ $user->id ?? '' }} </td>
                            <td> {{ '#'.$user->username ?? '' }} </td>
                            <td> {{ $user->name ?? '' }} </td>
                            <td> {{ $user->email ?? '' }} </td>
                            <td class="text-uppercase text-center"> {{ $user->poste ?? '' }} </td>
                            <td class="text-uppercase text-center"> {{ $user->user_type ?? '' }} </td>
                            <td class="text-center">
                                <div class="btn-grou">
                                    <a href="{{ route('admin.users.show', $user->id) }}"
                                        class="btn-floating btn-primary"> <i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{ route('admin.users.edit', $user->id) }}"
                                        class="btn btn-info btn-rounded btn-sm"> <i class="fa fa-edit" aria-hidden="true"></i>Modifier</a>

                                    <a href="{{ route('admin.users.destroy', $user->id) }}" class="btn-floating btn-danger" onclick="event.preventDefault();
                                        document.getElementById('delete_user').submit();">
                                        <i class="fa fa-times" aria-hidden="true"></i></a>

                                        <form id="delete_user" action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                </div>
        
        
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>

@endsection