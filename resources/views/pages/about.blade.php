	@extends('layouts.app')

@section('content')

<div class="container mt-5 ">
 
	<!-- button -->
	<div class="row mt-1 mb-2">
		<a href="{{ url()->previous() }}">
			<div class="btn btn-dark pl-5 pr-5">◄ POWRÓT</div>
		</a>
	</div>
		
	<!-- about and photo -->
	<div class="row ">
		<div class="col-12 col-md-9 p-5">
			<h2>O mnie</h2>
			<div class="mt-4">
				@php
					$now = \Carbon\Carbon::now();
					$birthDate = \Carbon\Carbon::parse(env('BIRTH_DATE'));
					$firstWebDate = \Carbon\Carbon::parse(env('FIRST_WEB_DATE'));
					$firstProjectAge = $now->diffInMonths($firstWebDate);
					$age = $birthDate->diffInYears($now);
				  $ageSuffix = ($age >= 25 && $age <= 31) ? 'lat' : 'lata';
				  $monthSuffix = ($age >= 25 && $age <= 31) ? 'miesiące' : 'miesięcy';
				  $textDatetime = \Carbon\Carbon::parse('2019-09-25 20:45');
					$textAge = $now->diffInHours($textDatetime);
				@endphp
				<p>
					Jestem Piotr, mam <b>{{ $age .' '. $ageSuffix }}</b>. Swoją przygodę z programowaniem rozpocząłem
					<b>{{ $firstProjectAge .' '. $monthSuffix }}</b> temu. Ten tekst ma już <b>{{ $textAge }} godzin</b>,
					wiec jak widać czas ucieka a ja mam więcej pomysłów na projekty niż czasu na ich relizację.
				</p>
				<p>
					Lubię pracować w zgranym zespole, mam doświadczenie z kontrolą wersji, więc branche, mergowanie czy cherry
					picking nie są mi obce. <b>Szybko się uczę </b> - nauka od zera do programisy zajęła mi pół roku.
					Obecnie mam <b>{{ $firstProjectAge - 6 }} miesięcy</b> doświadczenia komercyjnego.
				</p>
				<p>
					W przyszłości chciałbym pogłębiać swoją wiedzę już nabytą i poszerzać ją o nowe dziedziny.
					<a href="{{ asset('documents/CV_Piotr_Rogalski.pdf') }}" download>Moje umiejętności są wymienione w CV</a>.
				</p>
			</div>
		</div>
		<img id="myAvatar" class="col-12 col-md-3 h-50 pt-2 pb-2" src="{{ url('images/avatar.jpg') }}" alt="">
	</div>

	<!-- statistics -->
	<div class="row mt-2 pt-2 pb-2 badge-dark">
		<div class="col-12 col-md-4 text-center mb-2">
			<div class="col-12">Godzin tutoriali</div>
			<div class="col-12 text-center btn btn-light btn-sm p-0 text-big">31</div>
		</div>
		<div class="col-12 col-md-4 text-center mb-2">
			<div class="col-12">Przeczytanych stron</div>
			<div class="col-12 text-center btn btn-light btn-sm p-0 text-big">672</div>
		</div>
		<div class="col-12 col-md-4 text-center mb-2">
			<div class="col-12">Internetowych kursów</div>
			<div class="col-12 text-center btn btn-light btn-sm p-0 text-big">53</div>
		</div>			
	</div>

	<!-- technology table progress-bars -->
	<div class="row text-center pt-2 pb-3 text-shadow-sm text-white bg-dark border-top">
		@for($i=0; $i <= 3; $i++)
			<div class="col-12 col-md-6 col-lg-3 mt-2 mb-2 pl-4 pr-4">

			@foreach($technology_categories as $category)
				@if ($category->id == $i+1)
					<b>{{ $category->name }}</b>
				@endif
			@endforeach

			@foreach($technologies as $technology)
			
				@php 
					$skillLevel = $technology->skill_level * 100;
					$progressbar_bg_color = [
						'bg-primary',
						'bg-success',
						'bg-warning',
						'bg-danger',
					];
				@endphp

				@if($technology->category_id == $i+1)
					<div class="progress mt-2">
				  		<div class="progress-bar text-left pl-3 
				  			{{ $progressbar_bg_color[$i] ?? '' }}"
				  			 role="progressbar" aria-valuemin="0" 
				  			 style="width: {{ $skillLevel }}%;" 
				  			 aria-valuenow="{{ $skillLevel }}" 
				  			 aria-valuemax="100">{{ $skillLevel }}% {{ $technology->name }}
				  		</div>
					</div>
				@endif
			@endforeach

			</div>
		@endfor
	</div>
</div>
@endsection
