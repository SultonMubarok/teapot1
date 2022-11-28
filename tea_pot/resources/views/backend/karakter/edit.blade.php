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
                            <h4 class="card-title">Edit Karakter</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" method="POST" action="{{ route('karakter.update',$karakter->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column"><C1-Rarity>Rarity</C1-Rarity></label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                    name="rarity" placeholder="Input Code" value="{{ isset($karakter) ? $karakter->rarity : '' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Role</label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                    name="role" placeholder="Input Code" value="{{ isset($karakter) ? $karakter->role : '' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Nama karakter</label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                    name="name" placeholder="Input Code" value="{{ isset($karakter) ? $karakter->name : '' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Weapon</label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                    name="weapon" placeholder="Input Code" value="{{ isset($karakter) ? $karakter->weapon : '' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Element</label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                    name="element" placeholder="Input Code" value="{{ isset($karakter) ? $karakter->element : '' }}">
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
<script src="{{asset('assets/js/extensions/simple-datatables.js')}}"></script>
@endsection