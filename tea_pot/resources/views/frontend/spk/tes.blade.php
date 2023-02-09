@extends('frontend.template')
@section('konten')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>

        <section id="basic-vertical-layouts">
            <div class="row match-height">
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Kriteria</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form method="POST" action="{{ route('spk.update',$kriteria->id) }}" class="form form-vertical" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="disabledInput">Kode Kriteria</label>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="kode_kriteria" placeholder="Input Code" value="{{ isset($kriteria) ? $kriteria->kode_kriteria : '' }}" readonly="readonly">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="disabledInput">Nama</label>
                                                    <input type="text" id="first-name-vertical1" class="form-control"
                                                        name="nama_kriteria" placeholder="Input Kriteria" value="{{ isset($kriteria) ? $kriteria->nama_kriteria : '' }}"readonly="readonly">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Pertanyaan</label>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="ask" placeholder="" value="{{ isset($kriteria) ? $kriteria->ask : '' }}" readonly="readonly">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="first-name-vertical"><b> Pilih Bobot Jawaban Anda </b></label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="bobot" id="flexRadioDefault1" value="{{ isset($kriteria) ? 3 : '' }}">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Tidak terlalu Penting = 3
                                                    </label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="bobot" id="flexRadioDefault2" value="{{ isset($kriteria) ? 5 : '' }}">
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Cukup Penting = 5
                                                    </label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="bobot" id="flexRadioDefault3" value="{{ isset($kriteria) ? 7 : '' }}">
                                                    <label class="form-check-label" for="flexRadioDefault3">
                                                        Lumayan Penting = 7
                                                    </label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="bobot" id="flexRadioDefault4" value="{{ isset($kriteria) ? 9 : '' }}">
                                                    <label class="form-check-label" for="flexRadioDefault4">
                                                        Sangat Penting = 9
                                                    </label>
                                            </div>
                                            <!--Tes
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Bobot</label>
                                                    <input type="number" id="first-name-vertical" class="form-control"
                                                        name="bobot" placeholder="Input Bobot" value="{{ isset($kriteria) ? $kriteria->bobot : '' }}">
                                                </div>
                                            </div>
                                            -->
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="back" class="btn btn-secondary me-1 mb-1">Kembali</button>
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
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