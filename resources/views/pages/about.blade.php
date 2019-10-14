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
	<div class="row">
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
		<img id="myAvatar" class="col-12 col-md-3 h-50 pt-2 pb-2" src="{{ url('images/profile_img.jpg') }}" alt="">
	</div>

	<div class="text-center pt-4 pb-1">
		<a href="{{ asset('documents/CV_Piotr_Rogalski.pdf') }}" download style="font-size: 48px;">
				<b>Curriculum Vitae</b>
		</a>
	</div>

	<div class="A4-page-container shadow">
		<img src="{{ asset('images/CV_Piotr_Rogalski-1.jpg') }}" alt="Brak podglądu CV"  style="width: 100%">
	</div>

	<div style="height: 50px"></div>

	<div class="A4-page-container shadow">
		<img src="{{ asset('images/CV_Piotr_Rogalski-2.jpg') }}" alt="Brak podglądu CV"  style="width: 100%">
	</div>
</div>
@endsection
