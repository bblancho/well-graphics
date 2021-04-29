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
                        <h3 class="card-title">Prise de rendez-vous de la part de {{ $rdv->name }}</h3>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="container p-4">
                            Le {{  date("d M Y" , strtotime($rdv->created_at)) }}
                            à {{ date("h:m" , strtotime($rdv->created_at)) }}<br>
                            Mr/Mme <b>{{ $rdv->name }}</b> nous a contacter via la page de contact pour une prise de rendez-vous avec un <b>{{ $rdv->membre }}</b> prévu pour <b>{{ $rdv->daterdv }}</b>.<br>
                            <u class="text-uppercase bold">Voici le contenu du message :</u><br>
                            
                            {{ $rdv->notes }}<br><br>

                            {{ $rdv->name }},<br>
                            {{ $rdv->email }}
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