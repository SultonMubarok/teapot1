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
                <h3>Data Kriteria</h3>
                <p class="text-subtitle text-muted">Yo Kriteria</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Kriteria</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <th><a href="/admin/kriteria/create" class="btn btn-primary"><i class="bi bi-plus-square-fill"></i></i> Tambah</a></th>
                        <tr>
                            <th>Kode Kriteria</th>
                            <th>Kriteria</th>
                            <th>Pertanyaan</th>
                            <th>Bobot</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kriteria as $k)
                        <tr>
                            <td>{{ $k->kode_kriteria }}</td>
                            <td>{{ $k->nama_kriteria }}</td>
                            <td>{{ $k->ask }}</td>
                            <td>{{ $k->bobot }}</td>
                            <td>
                                <a href="{{ route('kriteria.edit',$k->id) }}" class="btn icon btn-warning"><i class="bi bi-pencil"></i></a>
                                <form action="{{ route('kriteria.destroy',$k->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn icon btn-danger"><i class="bi bi-trash-fill" onclick="return confirm('Yakin akan menghapus data?')"></i>
                                </form>
                            </td>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>