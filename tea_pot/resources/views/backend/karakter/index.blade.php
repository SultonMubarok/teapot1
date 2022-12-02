@extends('backend.template')
@section('konten')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data karakter</h3>
                <p class="text-subtitle text-muted"></p>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Simple Datatable
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
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
    

<script src="{{asset('assets/js/extensions/simple-datatables.js')}}"></script>
@endsection