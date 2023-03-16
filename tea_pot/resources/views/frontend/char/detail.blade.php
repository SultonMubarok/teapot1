@extends('frontend.template')
@section('konten')

<div id="main">
    <div class="page-heading">
        <h2>Detail Karakter</h2>
    </div>
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-8">
                <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <h3>{{ isset($alternatif) ? $alternatif->nama_alternatif : '' }}</h3>
                                <img src="{{ asset('assets/images/samples/images/characters/full/'.$alternatif->image_char1) }}" >
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-content pb-4">
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="{{asset('assets/images/samples/images/star.png')}}">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1">Rarity</h5>
                                <h6 class="text-muted mb-0">{{ isset($alternatif) ? $alternatif->rarity : '' }}</h6>
                            </div>
                        </div>
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="{{asset('assets/images/samples/images/rank.png')}}">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1">Role</h5>
                                <h6 class="text-muted mb-0">{{ isset($alternatif) ? $alternatif->role : '' }}</h6>
                            </div>
                        </div>
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="{{asset('assets/images/samples/images/role.png')}}">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1">Weapon</h5>
                                <h6 class="text-muted mb-0">{{ isset($alternatif) ? $alternatif->weapon : '' }}</h6>
                            </div>
                        </div>
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="{{asset('assets/images/samples/images/puzzle-game.png')}}">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1">Element</h5>
                                <h6 class="text-muted mb-0">{{ isset($alternatif) ? $alternatif->element : '' }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

        <!--fix-->
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Detail How to Use {{ isset($alternatif) ? $alternatif->nama_alternatif : '' }}</h4>
                        </div>
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <p align="justify" style="text-indent: 45px;">{{ isset($alternatif) ? $alternatif->detail : '' }}</p>
                                        </div>
                                    </div>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <!--fix-->
</div>
<script src="{{asset('assets/js/extensions/simple-datatables.js')}}"></script>
@endsection