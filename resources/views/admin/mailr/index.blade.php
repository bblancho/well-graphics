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
                        <h3 class="card-title">Formulaire de contact</h3>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <span class="table-responsive mailbox-messages">
                            <table id="contactTable" class="table table-hover table-striped">
                                @forelse($allContact as $oneContact)
                                    <tr>
                                        <td class="py-1" width="50"> <i class="fa fa-comments"></i> </td>
                                        <td class="py-1"> <b>{{ $oneContact->name }}</b> &bull; <em>{{ $oneContact->email }}</em>
                                            <div class="text-truncate" style="max-width: 350px;">{{ $oneContact->message }}</div>
                                        </td>
                                        <td class="py-1">
                                            <b> {{ date('d/m/Y à H:i', strtotime($oneContact->created_at)) }} </b> 
                                        </td>
                                        <td class="py-1">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('admin.mail.contactShow', $oneContact->id) }}" class="btn btn-success mr-2">Voir</a>
                                                <a href="{{ route('admin.mail.contactDelete', $oneContact->id) }}" class="btn btn-danger">Effacer</a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center bold">Aucun message</td>
                                    </tr>
                                @endforelse
                                
                            </table>
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
