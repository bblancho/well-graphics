@extends('admin.layouts.app')

@section('title') Admin @endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Tableau de bord</h1>
                    </div><!-- /.col -->
                    <div class="dropdown-divider"></div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $users->user_type }}</h3>
    
                                <p> {{ $users->name }} </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">Voir mon Profil <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>00</h3>
    
                                <p>Commande réalisée</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">Plus de détails <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    
                    <!-- ./col -->
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>&nbsp;</h3>
                                <p>Support</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person"></i>
                            </div>
                            <a href="#" class="small-box-footer">Messagerie <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- End Small boxes (Stat box) -->
                <div class="row">
                    <div class="container-fluid">
                        <div class="col-md-12">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner mb-4">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="card card-warning">
                                                    <div class="card-header bg-warning">
                                                        <h3 class="card-title text-center">Agence de réalisations graphiques et de développement web</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        En choisissant Well-Graphics, vous choisissez la qualité et la rigueur pour votre campagne publicitaire, votre apparence
                                                        sur le web ou encore vos affichages personnels
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="card card-success">
                                                    <div class="card-header bg-success">
                                                        <h3 class="card-title">Services graphiques et webs</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        Well-Graphics.com vous propose une large gamme de services graphiques et webs.<br><br>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="card card-info">
                                                    <div class="card-header bg-info">
                                                        <h3 class="card-title text-center">Nos réalisations
                                                        graphiques et webs</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in tenetur doloremque, maiores doloribus
                                                        officia iste. Dolores.<br><br>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                            </div>
                                        
                                            <div class="col-sm-6">
                                                <div class="card card-primary">
                                                    <div class="card-header bg-primary">
                                                        <h3 class="card-title">Contactez-nous!</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        Un problème technique ? Une question ? N’hésitez pas à contacter notre support technique et commercial afin de pouvoir
                                                        obtenir des réponses à vos questions. Nous restons disponibles 24H/24H, 7J/7
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="" aria-hidden="true">&nbsp;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="" aria-hidden="true">&nbsp;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        
        <!-- /.content -->
    </div>
@endsection

@section('script')
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
@endsection
