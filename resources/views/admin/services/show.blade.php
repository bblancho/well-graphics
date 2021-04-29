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
						<div class="row">
							<div class="row no-gutters rounded overflow-hidden flex-md-row mb-4 h-md-250 position-relative">
								<div class="col p-4 d-flex flex-column position-static">
									<h3 class="mb-0"> <strong> Titre: {{ $service->title }}</strong> </h3>

									<h4> Slug: </h4>
									<p class="mb-auto"> {{ $service->service_slug }} </p>

									<h4> Tag: </h4>
									<p class="mb-auto"> {{ $service->tag }} </p>

									<h4> Tag Font Awesome: </h4>
									<p class="mb-auto">  <span><i class=" {{ $service->url_fontawesome }} "></i></span> </p>

									<h4> Courte description: </h4>
									<p> {!! $service->subtitle !!} </p> 

									<h4> Description: </h4>
									<p class="mb-4"> {{ $service->body }} </p>

									<p class=" mb-4">
										Prix Hors Taxe :@price($service->prixht *100)  <br>
										Prix TTc : @price($service->prixttc *100)
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