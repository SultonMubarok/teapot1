<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kriteria;
use Illuminate\Support\Facades\DB;

class BKriteriaController extends Controller
{
    //
    public function index(){
		$kriteria = Kriteria::all();
		return view('backend.spk.kriteria.index',compact('kriteria'));
	}
    public function create()
    {
        $kriteria = Kriteria::all();
        return view('backend.spk.kriteria.create',compact('kriteria'));
    }
    public function edit($id)
    {
        $kriteria = Kriteria::find($id);
        return view('backend.spk.kriteria.edit',compact('kriteria'));
    }
	public function store(Request $request)
    {
        $kriteria = new Kriteria;
        $kriteria->kode_kriteria = $request->kode_kriteria;
        $kriteria->nama_kriteria = $request->nama_kriteria;
        $kriteria->ask = $request->ask;
		$kriteria->bobot = $request->bobot;
        $kriteria->save();

        return redirect()->route('kriteria.index')->with('success','Data Telah Berhasil Ditambah.');
    }
	public function update($id, Request $request)
    {
		$kriteria = Kriteria::find($id);
        $kriteria->kode_kriteria = $request->kode_kriteria;
        $kriteria->nama_kriteria = $request->nama_kriteria;
        $kriteria->ask = $request->ask;
		$kriteria->bobot = $request->bobot;
        $kriteria->save();

        return redirect()->route('kriteria.index')->with('success','Data Telah Berhasil Diperbarui.');
    }
    public function destroy($id)
    {
        $kriteria = Kriteria::find($id);
        $kriteria->delete();
        return redirect()->route('kriteria.index')->with('success','Data Berhasil Dihapus');
    }
    public function clear(){
        Karakter::truncate();
        return redirect()->route('karakter.index')->with('success','Data Telah Berhasil Dihapus.');
      }

}
