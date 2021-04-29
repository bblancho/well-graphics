@extends('admin.layouts.app')

@section('title') Mailbox @endsection

@section('style')
    <style>
        .brd-0{border-radius:0!important;}
    </style>
@endsection


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
                        <h3 class="card-title">Demande de devis</h3>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive mailbox-messages">
                            <table id="contactTable" class="table table-hover table-striped">
                                @forelse ($allDevis as $oneDevis)
                                    <tr>
                                        <td class="py-1" width="50"> <i class="fa fa-briefcase"></i> </td>
                                        <td class="py-1"> <b>{{ $oneDevis->name }}</b> &bull; <em>{{ $oneDevis->email }}</em> <br> <span class="bold">Devis pour un sevice {{ $oneDevis->type }}</span>
                                            <div class="text-truncate" style="max-width: 350px;">{{ $oneDevis->notes }}</div>
                                        </td>
                                        <td class="py-1">
                                            <b> {{ date('d/m/Y à H:i', strtotime($oneDevis->created_at)) }} </b> 
                                        </td>
                                        <td class="py-1">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('admin.mail.devisShow', $oneDevis->id) }}" class="btn btn-sm btn-success mr-2">Voir</a>
                                                <a href="{{ route('admin.mail.devisDelete', $oneDevis->id) }}" class="btn btn-sm btn-danger">Effacer</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td class="text-center bold">Aucun entrer pour le moment</td>
                                    </tr>
                                @endforelse
                            </table>
                            <!-- /.table -->
                        </div>
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