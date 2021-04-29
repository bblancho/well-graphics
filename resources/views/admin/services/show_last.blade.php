@extends('admin.layouts.app')

@section('title') Admin @endsection

@section('content')
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-12">
					<h1 class="m-0 text-dark text-center">Service {{ $service->tag }} Well-Graphics</h1>
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
										<img class="img-circle elevation-2"
											src="{{ asset('assets/img/old/2.png')}}" alt="User Avatar">
									</div>
									<!-- /.widget-user-image -->
									<h3 class="widget-user-username">{{ $service->title }}</h3>
									<h5 class="widget-user-desc">{{ $service->prixht.'€' }} - {{ $service->prixttc.'€' }}</h5>
								</div>
	
								<div class="col-sm-5 text-right pt-3">
									<a class="btn btn-outline-light" href="{{ route('admin.services.index') }}">
										<i class="fa fa-list"></i>&nbsp; Voir la liste
									</a>
									<a class="btn btn-outline-light" href="{{ route('admin.services.edit', $service->id) }}">
										<i class="fa fa-edit"></i>&nbsp; Modifier
									</a>
								</div>
							</div>
						</div>
						<div class="card-footer p-0">
							<p class="container p-4">
								{{ $service->body }}
							</p>
						</div>

						<div class="row">
							<div class="row no-gutters rounded overflow-hidden flex-md-row mb-4 h-md-250 position-relative">
								<div class="col p-4 d-flex flex-column position-static">
									<h3 class="mb-0"> <strong> Titre: {{ $service->title }}</strong> </h3>
									<div class="mb-1 text-muted"> Slug : {{ $service->service_slug }}</div>

									<h4> Courte description: </h4>
									<p class="mb-auto"> {{ $service->subtitle }} </p>

									<h4> Description: </h4>
									<p class="mb-4"> {{ $service->body }} </p>

									<p class=" mb-4">
										Prix Hors Taxe : {{ $service->prixht.'€' }}  <br>
										Prix TTc : {{ $service->prixttc.'€' }}
									</p>

									<div>
										<a class="btn btn-outline-light bg-purple" href="{{ route('admin.services.index') }}">
											<i class="fa fa-list"></i>&nbsp; Voir la liste
										</a>
										<a class="btn btn-outline-light bg-purple" href="{{ route('admin.services.edit', $service->id) }}">
											<i class="fa fa-edit"></i>&nbsp; Modifier
										</a>
									</div>
								</div>

								<div class="col-auto d-none d-lg-block">
									<div class="service-icon">
										<span><i class="{{ $service->url_fontawesome }}"></i></span>
									</div>
								</div>
							</div>
						</div>
					</div><!-- /card card-widget widget-user-2 -->

				</div><!-- /col-md-10 -->
			</div><!-- /row center-flex -->
		</div><!-- /container -->
	</div><!-- /container-fluid -->

</div><!-- /content-wrapper -->
@endsection