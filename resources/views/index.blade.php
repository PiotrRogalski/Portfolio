@extends('layouts.app')

@section('content')

@php
  $btn_classes = 'col-12 mx-auto btn btn-lg btn-outline-secondary text-white text-shadow-sm';
@endphp
<!-- header-->
<header id="head" class="masthead text-white text-left">
  <div class="overlay"></div>
    <div class="w-100">
     <div class="offset-sm-1">
      <div class="col-12 col-sm-11 col-md-8 col-lg-7 col-xl-6 p-2 mx-left shadow">
        <h1 class="lora text-center text-shadow-md">Piotr Rogalski</h1>
        <div class="m-0 row pt-2 p-0">
          <div class="col-12 col-sm p-1">
            <a class="{{ $btn_classes }} use-path-animation" href="#project-title-id">Projekty</a>
          </div>
          <div class="col-12 col-sm p-1">
            <a class="{{ $btn_classes }} use-path-animation" href="#contact_section">Kontakt</a>
          </div>
          <div class="col-12 col-sm p-1">
            <a class="{{ $btn_classes }}" href="{{url('/about')}}">O mnie</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="dark-line bg-dark col-12"></div>
<div class="gradient-dark-down col-12"></div>

<!-- Icons Grid -->
<section class="bg-light text-center mt-3">
  <div class="w-100 mx-auto">
    <div class="lora fullStackDev-text">Full Stack Dev</div>
  </div>
  <div class="container p-1">
    <div class="row mt-5 mb-5 ml-0 mr-0">
      <div class="col-12 col-sm-6 col-md-4">
        <div class="mx-auto mb-5 mb-lg-3">
          <h3>Frontend</h3>
            <h5><span class="badge badge-dark mt-1">Bootstrap 4</span></h5>
            <h5><span class="badge badge-dark mt-1">Vue.js</span></h5>
            <h5><span class="badge badge-dark mt-1">CSS3</span></h5>
            <h5><span class="badge badge-dark mt-1">JavaScript</span></h5>
            <h5><span class="badge badge-dark mt-1">HTML5</span></h5>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <div class="mx-auto mb-5 mb-lg-3">
          <h3>Backend</h3>
            <h5><span class="badge badge-secondary mt-1">PHP</span></h5>
            <h5><span class="badge badge-secondary mt-1">MySql</span></h5>
            <h5><span class="badge badge-secondary mt-1">Eloquent</span></h5>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 mx-auto">
        <div class="mx-auto mb-0 mb-lg-3">
          <h3>Other</h3>
            <h5><span class="badge badge-dark mt-1">Laravel</span></h5>
            <h5><span class="badge badge-dark mt-1">PHP Storm</span></h5>
            <h5><span class="badge badge-dark mt-1">Sublime Text</span></h5>
        </div>
      </div>
    </div>
  </div>
  <div id="project-title-id" class="row col-12 ml-0">
    <div class="col-12 col-lg-6 mx-auto p-2">
      <div class="lora text-project text-muted">Projekty</div>
    </div>
  </div>  
</section>

<div class="gradient-dark-up col-12 "></div>

<!-- Image Showcases -->
<section class="showcase" id="projects_section">
  <div class="container-fluid p-0">
    @foreach($projects as $id => $project)
      <div id="{{ $project->title }}" class="row no-gutters">
          <div class="col-12 col-lg-6  {{ ($id%2)?'order-lg-2':''}} text-white showcase-img shadow"
               style="background-image: url({{ $project->getFirstImage() }}); background-position: center;">
          </div>
          <div class="col-12 col-lg-6  {{ ($id%2)?'order-lg-1':''}} my-auto showcase-text">
            <h2 id="title-id{{ $id }}">{!! $project->title !!}</h2>
            <p class="lead mb-0">{!! $project->getFirstParagraph() !!}</p>
            <div class="row">
              <a href="projects/{{$project->id}}" class="mt-5 col-10 mx-auto">
                <div class="btn btn-outline-success btn-lg col-12">Czytaj dalej...</div>
              </a>
            </div>
          </div>
      </div>
    @endforeach
  </div>
  @include('inc/pagination')
</section>

<!-- Testimonials -->
<section class="testimonials text-center bg-light" id="contact_section">
  <div class="row col-12 mb-5 ml-0">
      <div class="col-12 col-md-6 mx-auto p-2">
        <div class="lora kontakt-text">Kontakt</div>
      </div> 
    </div>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-4"> 
        <a href="https://www.facebook.com/piotr.rogalskii" target="_blank">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0 veil unveil">
            <i class="icon-facebook"></i>
            <h5 class="text-white">Facebook</h5> 
          </div>
        </a>
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <a href="mailto: piotr5rogalski@gmail.com" target="_blank">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0 veil unveil">
            <i class="icon-gmail pr-3"></i> 
            <h5 class="text-white">Gmail</h5> 
          </div>
        </a>
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <a href="tel:506-901-791">
          <div class="testimonial-item mx-auto mb-5 mb- lg-0 veil unveil">
            <i class="icon-phone"></i> 
            <h5 class="text-white">506 901 791</h5>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
setHeadPhoto();
var interval = window.setInterval(setHeadPhoto, 500);

function setHeadPhoto() {
   var screensize = document.documentElement.clientWidth;
    if (screensize  < 900) {
      document.getElementById('head').style.background = 
      "url(\'{{ url('images') }}/bg2-quarter.jpg\') no-repeat center center";
    } else {
      document.getElementById('head').style.background = 
      "url(\'{{ url('images') }}/bg2.jpeg\') no-repeat center center";
    }
  }
</script>
@endsection