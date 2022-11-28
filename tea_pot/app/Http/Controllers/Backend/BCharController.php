<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\karakter;
use Illuminate\Support\Facades\DB;
use App\Imports\KarakterImport;
use Maatwebsite\Excel\Facades\Excel;


class BCharController extends Controller
{
    //
    public function import_excel(Request $request) 
    {
      // validasi
      $this->validate($request, [
        'file' => 'required|mimes:csv,xls,xlsx'
      ]);
   
      // menangkap file excel
      $file = $request->file('file');
   
      // membuat nama file unik
      $nama_file = rand().$file->getClientOriginalName();
   
      // upload ke folder file_siswa di dalam folder public
      $file->move('file_karakter',$nama_file);
   
      // import data
      Excel::import(new KarakterImport, public_path('/file_karakter/'.$nama_file));
   
      // notifikasi dengan session
      //Session::flash('sukses','Data Berhasil Diimport!');
   
      // alihkan halaman kembali
      return redirect('/admin/karakter');
    }
  public function index()
  {
    $karakter = karakter::all();
    return view('backend.karakter.index', ['karakter' => $karakter]);
  }
  public function create()
  {
    $karakter = Karakter::all();
    return view('backend.karakter.create',compact('karakter'));
  }
	public function edit($id)
  {
      $karakter = Karakter::find($id);
      return view('backend.karakter.edit',compact('karakter'));
  }
	public function store(Request $request)
    {
        $karakter = new Karakter;
        $karakter->name = $request->name;
		    $karakter->rarity = $request->rarity;
        $karakter->role = $request->role;
        $karakter->weapon = $request->weapon;
        $karakter->element = $request->element;
        $karakter->save();

        return redirect()->route('karakter.index')->with('success','Data Telah Berhasil Ditambah.');
    }
	public function update($id, Request $request)
    {
		    $karakter = karakter::find($id);
        $karakter->name = $request->name;
		    $karakter->rarity = $request->rarity;
        $karakter->role = $request->role;
        $karakter->weapon = $request->weapon;
        $karakter->element = $request->element;
        $karakter->save();

        return redirect()->route('karakter.index')->with('success','Data Telah Berhasil Diperbarui.');
    }
    public function destroy($id)
    {
        $karakter = karakter::find($id);
        $karakter->delete();
        return redirect()->route('karakter.index')->with('success','Data Berhasil Dihapus');
    }
  public function clear(){
    Karakter::truncate();
    return redirect()->route('karakter.index')->with('success','Data Telah Berhasil Dihapus.');
  }

 
}
