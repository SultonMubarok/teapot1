@extends('frontend.template')
@section('konten')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
<div class="page-heading">
    <div class="page-title">
    <div class="row">
    <h3>Halaman Rekomendasi</h3>
        <p class="text-subtitle text-muted">Untuk cara menggunakan fitur rekomendasi, anda dapat melihat tutorial pada link</p>
    </div>
</div>

<!--
<section class="section">
    <div class="card">
        <div class="card-header">
            @foreach($kriteria as $k)
            <form method="POST" action="{{ route('spk.update',$k->id) }}" class="form form-vertical" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <h4 for="disabledInput">Kode Kriteria</h4>
                                <input type="text" id="first-name-vertical" class="form-control"
                                    name="kode_kriteria" placeholder="Input Code" value="{{ isset($kriteria) ? $k->kode_kriteria : '' }}" readonly="readonly">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="disabledInput">Nama Kriteria</label>
                                <input type="text" id="first-name-vertical1" class="form-control"
                                    name="nama_kriteria" placeholder="Input Kriteria" value="{{ isset($kriteria) ? $k->nama_kriteria : '' }}" readonly="readonly">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="first-name-vertical">Pertanyaan</label>
                                <input type="text" id="first-name-vertical" class="form-control"
                                    name="ask" placeholder="" value="{{ isset($kriteria) ? $k->ask : '' }}" readonly="readonly">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="first-name-vertical">Bobot</label>
                                <input type="text" id="first-name-vertical" class="form-control"
                                    name="bobot" placeholder="Input Bobot" value="{{ isset($kriteria) ? $k->bobot : '' }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                            </div>
                        </div>
                @endforeach
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            <button type="reset"
                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
-->
<!--Spk-->
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="table0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pertanyaan</th>
                        <th>Bobot</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kriteria as $k)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $k->ask }}</td>
                        <td>{{ $k->bobot }}</td>
                        <td>
                            <a href="{{ route('spk.edit',$k->id) }}" class="btn icon btn-warning"><i class="bi bi-pencil"></i></a>
                        </td>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<!--
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4>Step 1 Menemukan nilai W</h4>
        </div>
        <div class="card-body">
            <h6>⨊W = {{$sumbot}} </h6>
            <table class="table table-striped" id="table2">
                <thead>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <tr>
                        <th>Kode Kriteria</th>
                        <th>Kriteria</th>
                        <th>Bobot(W)</th>
                        <th>Wj = W / ⨊W</th>
                        <th>Wn = Wj*1 or Wj*-1</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kriteria as $k)
                    <tr>
                        <td>{{ $k->kode_kriteria }}</td>
                        <td>{{ $k->nama_kriteria }}</td>
                        <td>{{ $k->bobot }}</td>
                        <td>{{ $k->bobot/$sumbot }}</td>
                        <td>{{ (($k->bobot/$sumbot)*1) }}</td>
                    @endforeach

                    
                </tr>
                </tbody>
            </table>
        </div>
    </div>
Step3-->
    <div class="card">
        <div class="card-header">
            <h4>Step 2 Mencari Nilai S</h4>
        </div>
        <div class="card-body">
            <h6>Si = PRODUCT(C1:C4)</h6>
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Karakter</th>
                        <th>Rarity</th>
                        <th>Role</th>
                        <th>Weapon</th>
                        <th>Element</th>
                        <th>
                            <button class="btn btn-outline-info"> Urutkan </button>
                        </th>
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
                        <td>{{ ($a->w1**($k->bobot/$sumbot))*($a->w2**($k->bobot/$sumbot))*($a->w3**($k->bobot/$sumbot))*($a->w4**($k->bobot/$sumbot))}}</td>
                        <td><a href="{{ route('char.edit',$a->id) }}" class="btn btn-outline-primary">lihat Detail<i class=""></i></a></td>
                        @endforeach 
                    <h6 id="hasil"></h6>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        var table = document.getElementById("table0"), sumHsl = 0;
        for(var t = 1; t < table.rows.length; t++)
        {
            sumHsl = sumHsl + parseInt(table.rows[t].cells[6].innerHTML);
        }
        document.getElementById("hasil").innerHTML = "⨊ Si = "+ sumHsl;
    </script>


<!--End-->

</div>
<script src="{{asset('assets/js/extensions/simple-datatables.js')}}"></script>
@endsection