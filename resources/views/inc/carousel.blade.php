@if(!is_null($project->images_url))
	<div id="carousel_id" class="carousel slide shadow p-1" data-ride="carousel" data-interval="0">
	<div class="carousel-inner">
		@foreach($project->getImages() as $index => $photo_name)
			<div class="carousel-item   {{ ($index == 0)?'active':'' }}">
	      		<img class="d-block w-100 h-auto" src="{{ $project->getImageUrl($index) }}" alt="{{ $index }} slide">
	      		<h5 class="carousel-caption d-none d-md-block">
	      			<div class="badge badge-secondary text-shadow-sm">
	      				{!! $project->getImageDescription($index) !!}
	      			</div>
				</h5>
	    	</div>
		@endforeach
	 </div>
	@if(count($project->getImages()) > 1)
	  <ol class="carousel-indicators">
	  	@foreach($project->getImages() as $index => $photo_name)
	  		<li data-target="#carousel_id" data-slide-to="{{ $index }}" class="{{ ($index==0)?'active':'' }} border border-dark" ></li>
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