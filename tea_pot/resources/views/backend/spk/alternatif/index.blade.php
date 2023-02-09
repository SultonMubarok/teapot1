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
                <h3>Data alternatif</h3>
                <p class="text-subtitle text-muted">Yo alternatif</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data alternatif</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    		{{-- notifikasi form validasi --}}
		@if ($errors->has('file'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('file') }}</strong>
		</span>
		@endif
 
		{{-- notifikasi sukses --}}
		@if ($sukses = Session::get('sukses'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button> 
			<strong>{{ $sukses }}</strong>
		</div>
		@endif

    <section class="section">
        <div class="card">
            <div class="card-header">
                Simple Data table
                <form method="POST" action="{{route('alternatif.clear')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <button type="button" class="btn btn-primary mr-5" data-bs-toggle="modal" data-bs-target="#basicModal">
                        Import Excel
                    </button>
                    <button type="submit" class="btn btn-danger">Clear</button>
                </form>
                <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form method="POST" action="{{ route('alternatif.import_excel') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                </div>
                                <div class="modal-body">
                                    <label>Pilih file excel</label>
                                    <div class="form-group">
                                        <input type="file" name="file" required="required">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Import</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th><a href="/admin/alternatif/create" class="btn btn-primary"><i class="bi bi-plus-square-fill"></i></i> Tambah</a></th>
                        <tr>
                            <th>Kode</th>
                            <th>Alternatif</th>
                            <th>Rarity</th>
                            <th>Role</th>
                            <th>Weapon</th>
                            <th>Element</th>
                            <th>Detail</th>
                            <th>Image</th>
                            <th>Image1</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alternatif as $k)
                        <tr>
                            <td>{{ $k->kode_alternatif }}</td>
                            <td>{{ $k->nama_alternatif }}</td>
                            <td>{{ $k->rarity }}({{ $k->w1 }})</td>
                            <td>{{ $k->role }}({{ $k->w2 }})</td>
                            <td>{{ $k->weapon }}({{ $k->w3 }})</td>
                            <td>{{ $k->element }}({{ $k->w4 }})</td>
                            <td>{!! Str::limit($k->detail,20) !!}</td>
                            <td><img src="{{ asset('assets/images/samples/images/characters/'.$k->image_char) }}" width="70px" height="50px" alt="Image"></td>
                            <td><img src="{{ asset('assets/images/samples/images/characters/full/'.$k->image_char1) }}" width="70px" height="50px" alt="Image1"></td>
                            <td>
                                <a href="{{ route('alternatif.edit',$k->id) }}" class="btn icon btn-warning"><i class="bi bi-pencil"></i></a>
                                <form action="{{ route('alternatif.destroy',$k->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn icon btn-danger"><i class="bi bi-trash-fill"></i>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        <td>
                        </td>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    

<script src="{{asset('assets/js/extensions/simple-datatables.js')}}"></script>
@endsection