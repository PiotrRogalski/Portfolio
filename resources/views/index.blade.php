@extends('layouts.app')

@section('content')

@php
  $btn_classes = 'col-10 col-sm-3 mx-auto mb-2 btn btn-lg btn-outline-secondary text-white text-shadow-sm';
@endphp

<!-- header-->
<header id="head" class="masthead text-white text-left" style="background: url({{  url('/images/bg2.jpeg') }} )no-repeat center center fixed;)">
  <div class="overlay"></div>
    <div class="row">
      <div class="offset-sm-1"></div>
      <div class="ml-1 col-12 col-sm-8 col-md-6 mx-left shadow">
        <p class="lora text-center piotr-roglaski-text">Piotr Rogalski</p>
        <div class="row pt-2">
          <a class="{{ $btn_classes }}" href="#projects_section">Projekty</a>
          <a class="{{ $btn_classes }}" href="#contact_section">Kontakt</a>
          <a class="{{ $btn_classes }}" href="{{url('/about')}}">O mnie</a>
        </div>
      </div>
    </div>
</header>

<!-- dark line -->
<div class="bg-dark col-12" style="height: 2vh;"></div>

<!-- Icons Grid -->
<section class="pt-5 pb-5 bg-light text-center">
  <div class="container">
     <h1 class="lora mb-5 full-stack-text">Full Stack Dev</h1>        
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-4">
        <div class="mx-auto mb-5 mb-lg-3">
          <h3>Frontend</h3>
            <h5><span class="badge badge-dark mt-1">Bootstrap 4</span></h5>
            <h5><span class="badge badge-dark mt-1">Vue.js</span></h5>
            <h5><span class="badge badge-dark mt-1">CSS3</span></h5>
            <h5><span class="badge badge-dark mt-1">JavaScript</span></h5>
            <h5><span class="badge badge-dark mt-1">HTML5</span></h5>
        </div>
      </div>
      <div class="col-12 col-sm-4">
        <div class="mx-auto mb-5 mb-lg-3">
          <h3>Backend</h3>
            <h5><span class="badge badge-secondary mt-1">PHP</span></h5>
            <h5><span class="badge badge-secondary mt-1">MySql</span></h5>
            <h5><span class="badge badge-secondary mt-1">Eloquent</span></h5>
        </div>
      </div>
      <div class="col-12 col-sm-4">
        <div class="mx-auto mb-0 mb-lg-3">
          <h3>Other</h3>
            <h5><span class="badge badge-dark mt-1">Laravel</span></h5>
            <h5><span class="badge badge-dark mt-1">PHP Storm</span></h5>
            <h5><span class="badge badge-dark mt-1">Sublime Text</span></h5>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Image Showcases -->
<div class="row">
    <div class="mb-4 mx-auto pagination-lg">{{ $projects->links() }}</div>
  </div>
<section class="showcase" id="projects_section">
  <div class="container-fluid p-0">
    @foreach($projects as $id => $project)
      <div class="row no-gutters">
          <div class="col-lg-6 {{ ($id%2)?'order-lg-2':''}} text-white showcase-img" 
               style="background-image: url({{ $project->getFirstImage() }}); background-position: center;">
          </div>
          <div class="col-lg-6 {{ ($id%2)?'order-lg-1':''}} my-auto showcase-text">
            <h2>{!! $project->title !!}</h2>
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
  <div class="row">
    <div class="mt-4 mx-auto pagination-lg">{{ $projects->links() }}</div>
  </div>
</section>

<!-- Testimonials -->
<section class="testimonials text-center bg-light" id="contact_section">
  <div class="container">
    <h2 class="mb-5">Kontakt</h2>
    <div class="row">
      <div class="col-lg-4"> 
        <a href="https://www.facebook.com/piotr.rogalskii" target="_blank">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0 veil unveil">
            <i class="icon-facebook"></i>
            <h5 class="text-white mt-2">Facebook</h5> 
          </div>
        </a>
      </div>
      <div class="col-lg-4">
        <a href="mailto: piotr5rogalski@gmail.com" target="_blank">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0 veil unveil">
            <i class="icon-gmail pr-3"></i> 
            <h5 class="text-white mt-2">Gmail</h5> 
          </div>
        </a>
      </div>
      <div class="col-lg-4">
        <div class="testimonial-item mx-auto mb-5 mb-lg-0 veil unveil">
          <i class="icon-phone"></i> 
          <h5 class="text-white mt-2">506 901 791</h5>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection