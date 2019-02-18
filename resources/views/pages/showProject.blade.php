@extends('layouts.app')

@section('content')

<div class="showProject-container mt-4">
	
	<!-- photo carousel -->
	<div class="card">
	  <div class="card-header">
		<div class="row">
			<div class="col-md-6" >
				<a href="{{ $project->previousPageWithPosition() }}">
					<div class="btn btn-dark pl-5 pr-5">◄ POWRÓT</div>
				</a>
			</div>
			<div class="col-md-6 pt-2 text-lg-right"><b>Data utworzenia projektu: 
				{{ $project->created_at->format('Y-m-d') }} ({{ $project->created_at->diffForHumans() }})</b>
			</div>
		</div>
	  </div>
		@include('inc/carousel')
	  <div class="card-body">
		<div class="row">
			@foreach($project->technologies as $technology)
				<h5><div class="badge badge-dark ml-1">{{$technology->name}}</div></h5>
			@endforeach
		</div>
	  </div>
	</div>

	<!-- title and body -->
	<div class="card mt-4">
	  <div class="card-header">
	  	<div class="row">
	  		<div class="col-9"><h4>{{ $project->title }}</h4></div>
	  		@include('inc/buttonsTitleShowProject')
	  	</div>
	  </div>
	  <div class="card-body">
		<div class="col-12">
			<h5 class="m-2" style="font-size: 18px; font-weight: 400;">
				<p class="text-lg" >{!! $project->description !!}</p>
			</h5>
		</div>
	  </div>
	</div>
</div>
@endsection
