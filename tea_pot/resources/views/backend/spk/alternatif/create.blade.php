@extends('backend.template')
@section('konten')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
        <!--fix-->
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Multiple Column</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" method="POST" action="{{ route('alternatif.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Kode Alternatif</label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                    name="kode_alternatif" placeholder="Input Code" >
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column"><C1-Rarity>C1-Rarity</C1-Rarity></label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                    name="rarity" placeholder="Input Code">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Nama Alternatif</label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                    name="nama_alternatif" placeholder="Input Code">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">C2-Role</label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                    name="role" placeholder="Input Code">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">C3-weapon</label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                    name="weapon" placeholder="Input Code">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">C4-element</label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                    name="element" placeholder="Input Code">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">W1</label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                    name="w1" placeholder="Input">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">W2</label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                    name="w2" placeholder="Input">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">W3</label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                    name="w3" placeholder="Input">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">W4</label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                    name="w4" placeholder="Input">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Image</label>
                                                <input type="file" id="first-name-column" class="form-control"
                                                    name="image_char">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Image1</label>
                                                <input type="file" id="first-name-column" class="form-control"
                                                    name="image_char1">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Detail</label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                    name="detail">
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--fix-->
</div>

@endsection