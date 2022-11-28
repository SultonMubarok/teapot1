<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kriteria;
use App\Models\Alternatif;
use App\Models\Perhitungan;
use Illuminate\Support\Facades\DB;

class FSpkController extends Controller
{
    //
    public function index()
    {
        $kriteria = Kriteria::all();
        $alternatif = Alternatif::all();
        $bobot1= Kriteria::all('bobot');
        $sumbot = Kriteria::sum('bobot');
        $no = 1;
        return view('frontend.spk.index',compact('no','kriteria','alternatif','sumbot'));
    }
    public function edit($id)
    {
        $kriteria = Kriteria::find($id);
        return view('frontend.spk.tes',compact('kriteria'));
    }
    public function store(Request $request)
    {
        $kriteria = new Kriteria;
        $kriteria->kode_kriteria = $request->kode_kriteria;
        $kriteria->nama_kriteria = $request->nama_kriteria;
        $kriteria->ask = $request->ask;
		$kriteria->bobot = $request->bobot;
        $kriteria->save();

        return redirect()->route('spk.index')->with('success','Data Telah Berhasil Ditambah.');
    }
	public function update($id, Request $request)
    {
		$kriteria = Kriteria::find($id);
        $kriteria->kode_kriteria = $request->kode_kriteria;
        $kriteria->nama_kriteria = $request->nama_kriteria;
        $kriteria->ask = $request->ask;
		$kriteria->bobot = $request->bobot;
        $kriteria->save();

        return redirect()->route('spk.index')->with('success','Data Telah Berhasil Diperbarui.');
    }
}
