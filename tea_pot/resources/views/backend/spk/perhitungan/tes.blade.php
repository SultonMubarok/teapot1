@extends('template')
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
        <p class="text-subtitle text-muted">A sortable, searchable, paginated table without dependencies thanks to simple-datatables</p>
    </div>
    <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">DataTable</li>
            </ol>
        </nav>
    </div>
    </div>
</div>
<!--NilaiBobot-->
<section class="section">
    <div class="card">
    <div class="card-header">
        Nilai Bobot
    </div>
    <div class="card-body">
        <table class="table table-striped" id="table1">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Rarity(C1)</th>
                    <th>Role(C2)</th>
                    <th>Weapon(C3)</th>
                    <th>Element(C4)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Albedo</td>
                    <td>8</td>
                    <td>9</td>
                    <td>7</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>Klee</td>
                    <td>9</td>
                    <td>9</td>
                    <td>9</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td>Diluc</td>
                    <td>8</td>
                    <td>8</td>
                    <td>8</td>
                    <td>6</td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
</section>
<!--End-->

<!--Kriteria-->
<section class="section">
    <div class="card">
        <div class="card-header">
            Kriteria
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Kode Kriteria</th>
                        <th>Nama Kriteria</th>
                        <th>Jenis</th>
                        <th>Bobot</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>C1</td>
                        <td>Rarity</td>
                        <td>Benefit</td>
                        <td id="c1">7</td>
                    </tr>
                    <tr>
                        <td>C2</td>
                        <td>Role</td>
                        <td>Benefit</td>
                        <td id="c2">9</td>
                    </tr>
                    <tr>
                        <td>C3</td>
                        <td>Weapon</td>
                        <td>Benefit</td>
                        <td id="c3">5</td>
                    </tr>
                    <tr>
                        <td>C4</td>
                        <td>Element</td>
                        <td>Benefit</td>
                        <td id="c4">8</td>
                    </tr>
                </tbody>
                ⨊ Wj=()
            </table>
        </div>
    </div>
    </div>
</section>
<!--End-->

<!--Step1-->
<section class="section">
    <div class="card">
        <div class="card-header">
            Step 1= Menemukan nilai Wj
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Rarity</th>
                        <th>Role</th>
                        <th>Weapon</th>
                        <th>Element</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Graiden</td>
                        <td>vehicula.aliquet@semconsequat.co.uk</td>
                        <td>076 4820 8838</td>
                        <td>Offenburg</td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Dale</td>
                        <td>fringilla.euismod.enim@quam.ca</td>
                        <td>0500 527693</td>
                        <td>New Quay</td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</section>
<!--End-->

<!--Step2-->
<section class="section">
    <div class="card">
        <div class="card-header">
            Simple Datatable
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Rarity</th>
                        <th>Role</th>
                        <th>Weapon</th>
                        <th>Element</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Graiden</td>
                        <td>vehicula.aliquet@semconsequat.co.uk</td>
                        <td>076 4820 8838</td>
                        <td>Offenburg</td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Dale</td>
                        <td>fringilla.euismod.enim@quam.ca</td>
                        <td>0500 527693</td>
                        <td>New Quay</td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</section>
<!--End-->

<!--Step3-->
<section class="section">
    <div class="card">
        <div class="card-header">
            Simple Datatable
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Rarity</th>
                        <th>Role</th>
                        <th>Weapon</th>
                        <th>Element</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Graiden</td>
                        <td>vehicula.aliquet@semconsequat.co.uk</td>
                        <td>076 4820 8838</td>
                        <td>Offenburg</td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Dale</td>
                        <td>fringilla.euismod.enim@quam.ca</td>
                        <td>0500 527693</td>
                        <td>New Quay</td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</section>
<!--End-->

<!--Output-->
<section class="section">
    <div class="card">
        <div class="card-header">
            Simple Datatable
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Rarity</th>
                        <th>Role</th>
                        <th>Weapon</th>
                        <th>Element</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Graiden</td>
                        <td>vehicula.aliquet@semconsequat.co.uk</td>
                        <td>076 4820 8838</td>
                        <td>Offenburg</td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Dale</td>
                        <td>fringilla.euismod.enim@quam.ca</td>
                        <td>0500 527693</td>
                        <td>New Quay</td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</section>
<!--End-->

</div>
@endsection