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
            <div class="card card-outline mb-3">
                    @if( $contact->lu == true)
                        <div class="bg-success"> Vous avez répondu au mail le  {{  date('d/m/Y à H:i', strtotime($contact->updated_at)) }} . </div>
                    @else
                        <div class="bg-warning"> Vous n'avez pas encore répondu au mail. </div>
                    @endif
                </div>

                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Message de la part de {{ $contact->name }}</h3>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="container p-4">
                            <p> Envoyé le  {{  date('d/m/Y à H:i', strtotime($contact->created_at)) }} </p> 
                            <b>{{ $contact->name }}</b> nous a contacté via la formulaire de contact.<br>
                            <u class="text-uppercase bold">Voici le contenu du message :</u><br>
                            
                            {{ $contact->message }}<br><br>

                            {{ $contact->name }},<br>
                            {{ $contact->email }}
                        </div>
                            <!-- /.table -->
                    </div>
                    <!-- /.mail-box-messages -->
                </div>

                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Répondre à {{ $contact->name }}</h3>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="container p-4">
                            <form method="POST" action="{{ route('admin.reponsemail.contact') }}">
                                @csrf
                                <div class="form-horizontal shadow-box">
                                    <div class="form-group">
                                        <input type="hidden" name="emailDestinataire" value="{{ $contact->email }}">
                                        <input type="hidden" name="id_contact_mail" value="{{ $contact->id }}">

                                        <textarea class="form-control h-50 @error('message') is-invalid  @enderror" name="message" rows="8" cols="45" placeholder="Votre message" id="Textarea1">
                                            {{ old('message')}}
                                        </textarea>
                                        @error('message')
                                            <div class="invalid-feedback">
                                                {{ $errors->first('message') }}
                                            </div>
                                        @enderror
                                    </div>

                                    <button class="btn btn-primary pull-right" type="submit">Envoyer</button>
                                </div>
                            </form>
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