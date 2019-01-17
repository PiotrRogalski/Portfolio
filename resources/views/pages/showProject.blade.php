@extends('layouts.app')

@section('content')

<div class="showProject-container mt-4">

	<div class="row mt-1 mb-2">
		<div class="col-12 col-md-6" >
			<a href="{{ $project->previousPageWithPosition() }}">
				<div class="btn btn-dark pl-5 pr-5">◄ POWRÓT</div>
			</a>
		</div>
		<div class="col-12 col-md-6 pt-2 text-lg-right"><b>Data utworzenia projektu: 
			{{ $project->created_at->format('Y-m-d') }} ({{ $project->created_at->diffForHumans() }})</b>
		</div>
	</div>

	<!-- photo carousel -->
	@if(!is_null($project->images_url))
		<div id="carousel_id" class="carousel slide shadow p-1 bg-dark rounded" data-ride="carousel" data-interval="0">
		<div class="carousel-inner">
			@foreach($project->getProjectPhotos() as $photo_id => $photo)
				<div class="carousel-item   {{ ($photo_id == 0)?'active':'' }}">
		      		<img class="d-block w-100 h-auto" src="{{ $project->getPhotoUrl($photo_id) }}" alt="{{ $photo_id }} slide">
		      		<h5 class="carousel-caption d-none d-md-block">
		      			<div class="badge badge-secondary text-shadow-sm">
		      				{!! $project->getPhotoDescription($photo_id) !!}
		      			</div>
					</h5>
		    	</div>
			@endforeach
		 </div>
		@if(count($project->getProjectPhotos()) > 1)
		  <ol class="carousel-indicators">
		  	@foreach($project->getProjectPhotos() as $photo_id => $photo)
		  		<li data-target="#carousel_id" data-slide-to="{{ $photo_id }}" class="{{ ($photo_id==0)?'active':'' }} border border-dark" ></li>
		  	@endforeach
		  </ol>
		  <a class="carousel-control-prev" href="#carousel_id" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carousel_id" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		@endif
		</div>
	@endif

	<!-- technologies -->
	<div class="row p-2">
		@foreach($project->technologies as $technology)
			<h5><div class="badge badge-dark ml-1">{{$technology->name}}</div></h5>
		@endforeach
	</div>

	<!-- title -->
	<div class="badge-dark pt-3 pb-3">
		<div class="col-12 mx-auto text-center mb-2">
			<h2>{{ $project->title }}</h2>
		</div>
		<div class="row col-12 mx-auto">
			<div class="mx-auto">
				@if(!is_null($project->github_url))
				<a href="{{ url('projects_preview').'/project'.$project->id.'/' }}" target="_blank">
					<div class="btn btn-sm btn-secondary">
						Podgląd
						<i class="icon-eye"></i>
					</div>
				</a>
				<a href="{{ $project->github_url }}" target="_blank">
					<div class="btn btn-sm btn-secondary ml-4">
						GitHub
						<i class="icon-github-circled-alt2"></i>
					</div>
				</a>
				@endif
			</div>
		</div>
	</div>

	<!-- description -->
	<div class="col-12 m-0 border-bottom border-top">
		<div class="m-2" style="font-size: 18px;">
			<p class="text-lg" >{!! $project->description !!}</p>
		</div>
	</div>
</div>

@endsection
