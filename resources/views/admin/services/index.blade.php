@extends('admin.layouts.app')

@section('title') Admin @endsection

@section('style')
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/toastr/toastr.min.css') }}">
@endsection

@section('content')
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Liste des services Well-Graphics</h1>
				</div><!-- /.col -->
				<div class="dropdown-divider"></div>
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<div class="container-fluid">

		<div class="card">
			<div class="card-header">
				<h3 class="card-title">
					<a class="btn btn-success btn-rounded text-light" href="{{ route('admin.services.create') }}">
						<i class="fa fa-user-plus" aria-hidden="true"></i> Ajouter un service
					</a>
				</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<table id="tableService" class="table table-bordered table-striped text-center">
					<thead>
						<tr class="text-center text-uppercase">
							<th width="10"> id </th>
							<th> Titre </th>
							<th> Prix HT</th>
							<th> Prix TTC</th>
							<th> Type </th>
							<th> Actions </th>
						</tr>
					</thead>
					<tbody>
						@foreach($services as $key => $service)
						<tr data-entry-id="{{ $service->id }}">
							<td class="text-center"> {{ $service->id ?? '' }} </td>
							<td> {{ $service->title ?? '' }} </td>
							<td> {{ $service->prixht ?? '' }} </td>
							<td> {{ $service->prixttc ?? '' }} </td>
							<td class="text-uppercase text-center"> {{ $service->tag }} </td>
							<td class="text-center">
								<div class="btn-grou">
									<a href="{{ route('admin.services.show', $service->id) }}" class="btn-floating btn-primary"> <i
											class="fa fa-eye" aria-hidden="true"></i></a>
									<a href="{{ route('admin.services.edit', $service->id) }}"
										class="btn btn-info btn-rounded btn-sm"> <i class="fa fa-edit"
											aria-hidden="true"></i>Modifier</a>
		
									<a href="{{ route('admin.services.destroy', $service->id) }}" class="btn-floating btn-danger">
										<i class="fa fa-times" aria-hidden="true"></i></a>
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

@section('script')
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
	$(function () {
        $("#tableService").DataTable();
      });
</script>
@endsection