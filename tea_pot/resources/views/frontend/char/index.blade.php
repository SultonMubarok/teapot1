@extends('frontend.template')
@section('konten')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-title">
        <div class="row">
            <h3>Data Karakter 
                <img src="{{asset('assets\images\samples\images\elements\anemo.png')}}" alt="" width="45px" height="45px">
                <img src="{{asset('assets\images\samples\images\elements\cryo.png')}}" alt="" width="45px" height="45px">
                <img src="{{asset('assets\images\samples\images\elements\hydro.png')}}" alt="" width="45px" height="45px">
                <img src="{{asset('assets\images\samples\images\elements\dendro.png')}}" alt="" width="45px" height="45px">
                <img src="{{asset('assets\images\samples\images\elements\pyro.png')}}" alt="" width="45px" height="45px">
                <img src="{{asset('assets\images\samples\images\elements\electro.png')}}" alt="" width="45px" height="45px">
                <img src="{{asset('assets\images\samples\images\elements\geo.png')}}" alt="" width="45px" height="45px">
            </h3>
            <div class="col-12 col-md-6 order-md-1 order-last">
                <p class="text-subtitle text-muted"></p>
            </div>
        </div>
    </div>
    
<section>
    <div class="row">
        @foreach($alternatif as $a)
        <div class="col-md-2 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <img class="card-img-top img-fluid" src="{{ asset('assets/images/samples/images/characters/'.$a->image_char) }}" alt="Card image cap"
                        />
                    <div class="card-body">
                        <h3 class="card-title">{{ $a->nama_alternatif }}</h3>
                        <a href="{{ route('char.edit',$a->id) }}" class="btn btn-outline-primary">Detail<i class=""></i></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach 
    </div>
</section>

<!--tes
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table mb-0 table-lg" id="table1">
                    <thead>
                        <tr>
                            <th>Kode Alternatif</th>
                            <th>Karakter</th>
                            <th>Rarity</th>
                            <th>Role</th>
                            <th>Weapon</th>
                            <th>Element</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alternatif as $a)
                        <tr>
                            <td>{{ $a->kode_alternatif }}</td>
                            <td>{{ $a->nama_alternatif }}</td>
                            <td>{{ $a->rarity }}</td>
                            <td>{{ $a->role }}</td>
                            <td>{{ $a->weapon }}</td>
                            <td>{{ $a->element }}</td>
                            <td><a href="{{ route('char.edit',$a->id) }}" class="btn btn-outline-primary">lihat Detail<i class=""></i></a></td>
                            @endforeach 
                        <h6 id="hasil"></h6>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
-->    
    <script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/js/extensions/simple-datatables.js')}}"></script>
@endsection