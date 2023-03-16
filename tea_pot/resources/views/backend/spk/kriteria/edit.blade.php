@extends('backend.template')
@section('konten')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
        <section id="basic-vertical-layouts">
            <div class="row match-height">
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Kriteria</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form method="POST" action="{{ route('kriteria.update',$kriteria->id) }}" class="form form-vertical" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Kode Kriteria</label>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="kode_kriteria" placeholder="Input Code" value="{{ isset($kriteria) ? $kriteria->kode_kriteria : '' }}">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Nama</label>
                                                    <input type="text" id="first-name-vertical1" class="form-control"
                                                        name="nama_kriteria" placeholder="Input Kriteria" value="{{ isset($kriteria) ? $kriteria->nama_kriteria : '' }}">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Bobot</label>
                                                    <input type="number" id="first-name-vertical" class="form-control"
                                                        name="bobot" placeholder="Input Bobot" value="{{ isset($kriteria) ? $kriteria->bobot : '' }}">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Pertanyaan</label>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                    name="ask" placeholder="Input Pertanyaan" value="{{ isset($kriteria) ? $kriteria->ask : '' }}">
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <a href="/admin/kriteria" class="btn btn-light-secondary me-1 mb-1">Kembali</a>
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                
                                                <!--
                                                <button type="reset"
                                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                -->
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
<script src="{{asset('assets/js/extensions/simple-datatables.js')}}"></script>
<script src="{{asset('assets/js/extensions/tinymce.js')}}"></script>
@endsection