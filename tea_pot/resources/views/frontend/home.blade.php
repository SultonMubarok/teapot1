@extends('frontend.template')
@section('konten')

<!--Isi-->          
<div id="main">
  <header class="mb-3">
      <a href="#" class="burger-btn d-block d-xl-none">
          <i class="bi bi-justify fs-3"></i>
      </a>
  </header>
  <div class="page-title">
      <div class="row">
        <h3>Selamat Datang di Teapot.id</h3>
        <p class="text-subtitle text-muted">Teapot.id merupakan web yang membantu anda dalam merekomendasikan memilih kartakter keinginan anda!</p>
      </div>
  </div>
  <section class="section">
    <div class="card">
      <div class="card-header">
        <h4>Current Banner</h4>
        <p>Banner yang sedang di up</p>
      </div>
      <div class="card-body">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            @foreach ($banner as $b)
            <div class="carousel-item {{$b->id == 1 ? 'active' : '' }}">
              <img src="{{ asset('assets/images/'.$b->image_banner) }}" class="d-block w-100" alt="...">
            </div>
            @endforeach
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div>
      </div>
    </div>

  </section>
  

<script src="{{asset('assets/js/extensions/simple-datatables.js')}}"></script>
<!--done-->


@endsection  


