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
        <h3>Selamat Datang di Teapot.id <img src="{{asset('assets\images\logo\teapot.jpg')}}" alt="" height="100px" width="100px"></h3>
        <p class="text-subtitle text-muted">Teapot.id merupakan web yang membantu anda dalam merekomendasikan memilih kartakter keinginan anda!</p>
      </div>
  </div>
  <section class="section">
    <div class="card">
      <div class="card-header">
        <h4>Event Banner Up Saat Ini <img src="{{asset('assets\images\samples\images\primogem.png')}}" alt=""></h4>
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

    <section class="section">
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <h5 class="card-title">Farm Talent & Weapon Guide Daily <img src="{{asset('assets\images\samples\images\crown_of_insight.png')}}" width="50px" height="50px"> </h5>
                  </div>
                  <div class="card-body">
                      <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                          <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                              <a href="#">
                                  <img  class="w-100" src="{{asset('assets\images\samples\images\daily\monday.png')}}" data-bs-target="#Gallerycarousel" data-bs-slide-to="0">
                              </a>
                          </div>
                          <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                              <a href="#">
                                  <img class="w-100" src="{{asset('assets\images\samples\images\daily\tuesday.png')}}" data-bs-target="#Gallerycarousel" data-bs-slide-to="1">
                              </a>
                          </div>
                          <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                              <a href="#">
                                  <img class="w-100" src="{{asset('assets\images\samples\images\daily\wednesday.png')}}" data-bs-target="#Gallerycarousel" data-bs-slide-to="2">
                              </a>
                          </div>
                          <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                            <a href="#">
                                <img class="w-100" src="{{asset('assets\images\samples\images\daily\thursday.png')}}" data-bs-target="#Gallerycarousel" data-bs-slide-to="3">
                            </a>
                          </div>
                      </div>

                      <div class="row mt-2 mt-md-4 gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                          <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                              <a href="#">
                                  <img class="w-100 active" src="{{asset('assets\images\samples\images\daily\friday.png')}}" data-bs-target="#Gallerycarousel" data-bs-slide-to="4">
                              </a>
                          </div>
                          <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                              <a href="#">
                                  <img class="w-100" src="{{asset('assets\images\samples\images\daily\saturday.png')}}" data-bs-target="#Gallerycarousel" data-bs-slide-to="5">
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog"
aria-labelledby="galleryModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered"
role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">

                <div id="Gallerycarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="5" aria-label="Slide 5"></button>  
                      </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                          <h6 align="center">Monday</h6> 
                          <img class="d-block w-100" src="{{asset('assets\images\samples\images\daily\monday.png')}}">
                        </div>
                        <div class="carousel-item ">
                          <h6 align="center">Tuesday</h6> 
                          <img class="d-block w-100" src="{{asset('assets\images\samples\images\daily\tuesday.png')}}">
                        </div>
                        <div class="carousel-item ">
                          <h6 align="center">Wednesday</h6> 
                          <img class="d-block w-100" src="{{asset('assets\images\samples\images\daily\wednesday.png')}}">
                        </div>
                        <div class="carousel-item ">
                          <h6 align="center">Thursday</h6> 
                          <img class="d-block w-100" src="{{asset('assets\images\samples\images\daily\thursday.png')}}">
                        </div>
                        <div class="carousel-item ">
                          <h6 align="center">Friday</h6> 
                          <img class="d-block w-100" src="{{asset('assets\images\samples\images\daily\friday.png')}}">
                        </div>
                        <div class="carousel-item ">
                          <h6 align="center">Saturday</h6> 
                          <img class="d-block w-100" src="{{asset('assets\images\samples\images\daily\saturday.png')}}">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#Gallerycarousel" role="button" type="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#Gallerycarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
  </section>

  </section>



<script src="{{asset('assets/js/extensions/simple-datatables.js')}}"></script>
<!--done-->
@endsection  


