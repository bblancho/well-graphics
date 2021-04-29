@extends('admin.layouts.app')

@section('title') Admin @endsection

@section('content')
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-12">
					<h1 class="m-0 text-dark text-center">Enregistrer un service</h1>
				</div><!-- /.col -->
				<div class="dropdown-divider"></div>
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>

	<div class="container px-4">
		<div class="card card-purple">
			<div class="card-header">
				<h3 class="card-title">Remplissez les champs</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{ route('admin.services.store') }}">
				@csrf
				<div class="card-body">
					<div class="row">
						<div class="col-sm-6">
							<!-- text input -->
							<div class="form-group">
								<label for="title">Titre du service</label>
								<input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
									id="title" placeholder="Titre complet" value="{{ old('title') }}">
								@error('title')
								<p class="text-danger text-sm"> {{ $message }} </p>
								@enderror
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group {{ $errors->has('tag') ? 'has-error' : '' }}">
								<label for="tag">Tags</label>
								<select name="tag" id="tag" class="custom-select">
									@foreach($tags as $tag)
										<option value="{{$tag->id}}"> {{ $tag->name }} </option>
									@endforeach
								</select>
							</div>
						</div>
					</div><!-- /row -->

					<div class="row">
						<div class="col-sm-4">
							<!-- text input -->
							<div class="form-group">
								<label for="prixht">Prix HT</label>
								<input type="number" class="form-control @error('prixht') is-invalid @enderror" name="prixht" id="prixht"
									placeholder="Prix HT" value="{{ old('prixht') }}">
								@error('prixht')
								<p class="text-danger text-sm"> {{ $message }} </p>
								@enderror
							</div>
						</div>

						<div class="col-sm-4">
							<div class="form-group">
								<label for="prixttc">Prix TTC</label>
								<input type="number" class="form-control @error('prixttc') is-invalid @enderror" name="prixttc" id="prixttc"
									placeholder="prix TTC" value="{{ old('prixttc') }}">
								@error('prixttc')
								<p class="text-danger text-sm"> {{ $message }} </p>
								@enderror
							</div>
						</div>

						<!-- text input -->
						<div class="col-sm-4">
							<label for="title">Url du Font Awesome</label>
							<input type="text" class="form-control @error('url_fontawesome') is-invalid @enderror" name="url_fontawesome"
								id="url_fontawesome" placeholder="Titre complet" value="{{ old('url_fontawesome') }}">
							@error('url_fontawesome')
							<p class="text-danger text-sm"> {{ $message }} </p>
							@enderror
						</div>
					</div><!-- /row -->

					<div class="form-group">
						<label for="subtitle">Présentation courte du service</label>
						<textarea name="subtitle" class="form-control @error('subtitle') is-invalid @enderror" id="body" rows="3">{{ old('subtitle') }}</textarea>
						@error('subtitle')
						<p class="text-danger text-sm"> {{ $message }} </p>
						@enderror
					</div>

					<div class="form-group">
						<label for="body">Description du service</label>
						<textarea name="body" class="form-control @error('body') is-invalid @enderror" id="body" rows="3">{{ old('body') }}</textarea>
						@error('body')
						<p class="text-danger text-sm"> {{ $message }} </p>
						@enderror
					</div>

					<div class="form-group">
						<label for="body"> Publier l'article ? </label>
						<input type="checkbox" name="statut" class="form-control @error('statut') is-invalid @enderror" value="1" >
						@error('statut')
						<p class="text-danger text-sm"> {{ $message }} </p>
						@enderror
					</div>
				</div>
				<!-- /.card-body -->
	
				<div class="card-footer text-center">
					<button type="submit" class="btn btn-success w-50 btn-rounded text-uppercase">
						<span class="text-light">Enregistrer</span>
					</button>
				</div>
			</form>
		</div>
	</div>

</div>
@endsection