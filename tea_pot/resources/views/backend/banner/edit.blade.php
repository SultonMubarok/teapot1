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
                            <h4 class="card-title">Edit banner</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form method="POST" action="{{ route('banner.update',$banner->id) }}" class="form form-vertical" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Image Banner</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="image_banner" placeholder="Input Code" value="{{ isset($banner) ? $banner->image_banner : '' }}">
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <a href="/admin/banner" class="btn btn-light-secondary me-1 mb-1">Kembali</a>
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