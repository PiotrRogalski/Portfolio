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
			<h1>O mnie</h1>
			<div class="mt-4">
				<p>Moja przygoda z programowaniem zaczęła się na początku września 2018 r. Od tego czasu, niemalże cały wolny czas poświęcam na naukę. Średnio jest to osiem godzin ale bywały dni, że dochodziło do czternastu godzin. Moim mentorem jest brat - programista, który napisał swój pierwszy kod 10 lat temu.</p>

				<p>Moim wyzwaniem jest zostać jednym z najlepszych programistów, dlatego stawiam na swój nieustanny rozwój. Obecnie rozwijam się w szerokopojętym programowaniu webowym, nie tylko ucząc się języków programowania ale także poznając frameworki, biblioteki i inne narzędzia, które ułatwiają pracę z kodem.
				Skończyłem technikum elektroniczne, a swój wolny czas poświęcam na doskonalenie umiejętności związanych z programowaniem.</p>

				<p>Oglądam wideokursy wysokiej jakości, czytam najlepsze książki i oczywiście praktykuję. Dzięki temu mam już podstawowe pojęcie o wzorcach projektowych, refaktoringu, programowaniu obiektowym. Uważam, że dzięki takiemu podejściu można uzyskać lepsze efekty niż na studiach poświęcając na dużo mniej czasu.</p>

				<p>Moim ulubionym środowiskiem jest PHPStorm, którym coraz sprawniej się posługuję, dzięki poznawanemu wachlarzowi skrótów klawiszowych ale naukę rozpocząłem od podstawowych IDE, takich jak Sublime Text 3 oraz Notatnik.</p>

				<p>Poniżej znajdują się wykresy przedstawiające poziom moich umiejętności na dzień {{ 
				 $lastUpdate }} r.</p>
			</div>
		</div>
		<img class="col-12 col-md-3 h-50 pt-2 pb-2" src="{{ url('images/me.jpg') }}" alt="">
	</div>

	<!-- statistics -->
	<div class="row mt-2 pt-2 pb-2 badge-dark">
		<div class="col-12 col-md-4 text-center mb-2">
			<div class="col-12">Godzin tutoriali</div>
			<div class="col-12 text-center btn btn-light btn-sm p-0 text-big">27</div>
		</div>
		<div class="col-12 col-md-4 text-center mb-2">
			<div class="col-12">Przeczytanych stron</div>
			<div class="col-12 text-center btn btn-light btn-sm p-0 text-big">365</div>
		</div>
		<div class="col-12 col-md-4 text-center mb-2">
			<div class="col-12">Internetowych kursów</div>
			<div class="col-12 text-center btn btn-light btn-sm p-0 text-big">45</div>
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
						'bg-danger'
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
