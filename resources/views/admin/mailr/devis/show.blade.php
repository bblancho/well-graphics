@extends('admin.layouts.app')

@section('title') Mailbox @endsection


@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark text-center">Mise en relation - Clients</h1>
                </div><!-- /.col -->
                <div class="dropdown-divider"></div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="row">
            <div class="col-md-3">
                @include('admin.mailr.parts.menu')
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Prise de rendez-vous de la part de {{ $devis->name }}</h3>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="container p-4">
                            Le {{  date('d/m/Y à H:i', strtotime($devis->created_at)) }}<br>
                            <b>{{ $devis->name }}</b> nous a contacté via la page de contact pour une prise de rendez-vous avec un <b>{{ $devis->type }}</b> prévu pour .<br>
                            <u class="text-uppercase bold">Voici le contenu du message :</u><br>

                            <p> {{ $devis->notes }} </p><br>

                            {{ $devis->name }},<br>
                            {{ $devis->email }}
                        </div>
                            <!-- /.table -->
                    </div>
                    <!-- /.mail-box-messages -->
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
</div>
<!-- /.row -->
</section>

</div>
@endsection