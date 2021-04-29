@extends('admin.layouts.app')

@section('title') Carte de visite @endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Membres de Well-Graphics</h1>
                    </div><!-- /.col -->
                    <div class="dropdown-divider"></div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="container-fluid">
            <div class="row">
                @foreach($userall as $key => $userwg)
                    @if ($userwg->poste === 'publication')
                        <div class="col-md-4 mt-2">
                            <div class="card card-widget widget-user">
                                <div class="widget-user-header text-white"
                                    style="background: url('{{ asset('assets/img/1.jpg') }}') center center;">
                                    <h3 class="widget-user-username text-right">{{ $userwg->name }}</h3>
                                    <h5 class="widget-user-desc text-right">Directeur de publication</h5>
                                </div>
                                <div class="widget-user-image">
                                    <img class="img-circle bg-info" src="https://ui-avatars.com/api/?name={{ $userwg->name }}&size=250&background=5860a5&color=ffffff" alt="User Avatar">
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="description-block mx-2">
                                                <p class="text-left">
                                                    <b> Téléphone : </b> {{ $userwg->phone }}<br>
                                                    <b> Mail : </b> {{ $userwg->email }}<br>
                                                    <b> Facebook : </b> {{ $userwg->facebook }}<br>
                                                    <b> Instagram : </b> {{ $userwg->instagram }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($userwg->poste === 'finance')
                    <div class="col-md-4 mt-2">
                        <div class="card card-widget widget-user">
                            <div class="widget-user-header text-white" style="background: url('{{ asset('assets/img/3.jpg') }}') center center;">
                                <h3 class="widget-user-username text-right">{{ $userwg->name }}</h3>
                                <h5 class="widget-user-desc text-right">Responsable financier</h5>
                            </div>
                            <div class="widget-user-image">
                                <img class="img-circle bg-info" src="https://ui-avatars.com/api/?name={{ $userwg->name }}&size=250&background=5860a5&color=ffffff"
                                    alt="User Avatar">
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="description-block mx-2">
                                            <p class="text-left">
                                                <b> Téléphone : </b> {{ $userwg->phone }}<br>
                                                <b> Mail : </b> {{ $userwg->email }}<br>
                                                <b> Facebook : </b> {{ $userwg->facebook }}<br>
                                                <b> Instagram : </b> {{ $userwg->instagram }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if ($userwg->poste === 'graphiste')
                    <div class="col-md-4 mt-2">
                        <div class="card card-widget widget-user">
                            <div class="widget-user-header text-white" style="background: url('{{ asset('assets/img/6.jpg') }}') center center;background-size:cover">
                                <h3 class="widget-user-username text-right">{{ $userwg->name }}</h3>
                                <h5 class="widget-user-desc text-right">Graphiste</h5>
                            </div>
                            <div class="widget-user-image">
                                <img class="img-circle bg-info" src="https://ui-avatars.com/api/?name={{ $userwg->name }}&size=250&background=5860a5&color=ffffff"
                                    alt="User Avatar">
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="description-block mx-2">
                                            <p class="text-left">
                                                <b> Téléphone : </b> {{ $userwg->phone }}<br>
                                                <b> Mail : </b> {{ $userwg->email }}<br>
                                                <b> Facebook : </b> {{ $userwg->facebook }}<br>
                                                <b> Instagram : </b> {{ $userwg->instagram }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if ($userwg->poste === 'webmaster')
                    <div class="col-md-4 mt-2">
                        <div class="card card-widget widget-user">
                            <div class="widget-user-header text-white"
                                style="background: url('{{ asset('assets/img/5.jpg') }}') center center;background-size:cover">
                                <h3 class="widget-user-username text-right">{{ $userwg->name }}</h3>
                                <h5 class="widget-user-desc text-right">Développeur Web</h5>
                            </div>
                            <div class="widget-user-image">
                                <img class="img-circle bg-info" src="https://ui-avatars.com/api/?name={{ $userwg->name }}&size=250&background=5860a5&color=ffffff"
                                    alt="User Avatar">
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="description-block mx-2">
                                            <p class="text-left">
                                                <b> Téléphone : </b> {{ $userwg->phone }}<br>
                                                <b> Mail : </b> {{ $userwg->email }}<br>
                                                <b> Facebook : </b> {{ $userwg->facebook }}<br>
                                                <b> Instagram : </b> {{ $userwg->instagram }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection