@extends('backend.template')
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
    <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Penilaian</h3>
        <p class="text-subtitle text-muted">Hasil Input Perhitungan</p>
    </div>
    </div>
</div>

<!--Step1-->
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
<!--Step2-->
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
                        <th>Alternatif</th>
                        <th>Rarity</th>
                        <th>Role</th>
                        <th>Weapon</th>
                        <th>Element</th>
                        <th>Si</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alternatif as $a)
                    <tr>
                        <td>{{ $a->kode_alternatif }}</td>
                        <td>{{ $a->nama_alternatif }}</td>
                        <td>{{ $a->w1**($k->bobot/$sumbot) }}</td>
                        <td>{{ $a->w2**($k->bobot/$sumbot) }}</td>
                        <td>{{ $a->w3**($k->bobot/$sumbot) }}</td>
                        <td>{{ $a->w4**($k->bobot/$sumbot) }}</td>
                        <td>{{ ($a->w1**($k->bobot/$sumbot))*($a->w2**($k->bobot/$sumbot))*($a->w3**($k->bobot/$sumbot))*($a->w4**($k->bobot/$sumbot))}}</td>
                        @endforeach 
                    <h6 id="hasil"></h6>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--sum-->
    <script>
        var table = document.getElementById("table1"), sumHsl = 0;
        for(var t = 1; t < table.rows.length; t++)
        {
            sumHsl = sumHsl + parseInt(table.rows[t].cells[6].innerHTML);
        }
        document.getElementById("hasil").innerHTML = "⨊ Si = "+ sumHsl;
    </script>
<!--Step3-->
<div class="card">
    <div class="card">
        <div class="card-header">
            <h4>Step 3 Mencari Nilai V</h4>
        </div>
        <div class="card-body">
            <h6>Si = PRODUCT(C1:C4)</h6>
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Alternatif</th>
                        <th>Vi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alternatif as $a)
                    <tr>
                        <td>{{ $a->kode_alternatif }}</td>
                        <td>{{ $a->nama_alternatif }}</td>
                        <td>{{ (($a->w1**($k->bobot/$sumbot))*($a->w2**($k->bobot/$sumbot))*($a->w3**($k->bobot/$sumbot))*($a->w4**($k->bobot/$sumbot))/335)}}</td>
                        @endforeach 
                    <h6 id="hasil"></h6>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</section>


</div>
<script src="{{asset('assets/js/extensions/simple-datatables.js')}}"></script>
@endsection