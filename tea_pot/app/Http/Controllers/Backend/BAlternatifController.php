<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alternatif;
use Illuminate\Support\Facades\DB;
use App\Imports\AlternatifImport;
use Maatwebsite\Excel\Facades\Excel;

class BAlternatifController extends Controller
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
		$file->move('file_alternatif',$nama_file);
 
		// import data
		Excel::import(new AlternatifImport, public_path('/file_alternatif/'.$nama_file));
 
		// notifikasi dengan session
		//Session::flash('sukses','Data Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('/admin/alternatif');
	}
    //
    public function index(){
		$alternatif = Alternatif::all();
		return view('backend.spk.alternatif.index',compact('alternatif'));
	}
    public function create()
    {
        $alternatif = Alternatif::all();
        return view('backend.spk.alternatif.create',compact('alternatif'));
    }
	public function edit($id)
    {
        $alternatif = Alternatif::find($id);
        return view('backend.spk.alternatif.edit',compact('alternatif'));
    }
	public function store(Request $request)
    {
        $alternatif = new Alternatif;
        $alternatif->kode_alternatif = $request->kode_alternatif;
        $alternatif->nama_alternatif = $request->nama_alternatif;
		$alternatif->rarity = $request->rarity;
        $alternatif->role = $request->role;
        $alternatif->weapon = $request->weapon;
        $alternatif->element = $request->element;
        $alternatif->detail = $request->detail;
        //$alternatif->image_char = $request->image_char;
        $alternatif->w1 = $request->w1;
        $alternatif->w2 = $request->w2;
        $alternatif->w3 = $request->w3;
        $alternatif->w4 = $request->w4;
        if($request->hasfile('image_char'))
        {
            $file = $request->file('image_char');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('file_karakter', $filename);
            $alternatif->image_char = $filename;
        }
        $alternatif->save();

        return redirect()->route('alternatif.index')->with('success','Data Telah Berhasil Ditambah.');
    }
	public function update($id, Request $request)
    {
        $alternatif = Alternatif::find($id);
        $alternatif->kode_alternatif = $request->kode_alternatif;
        $alternatif->nama_alternatif = $request->nama_alternatif;
		$alternatif->rarity = $request->rarity;
        $alternatif->role = $request->role;
        $alternatif->weapon = $request->weapon;
        $alternatif->element = $request->element;
        $alternatif->detail = $request->detail;
        //$alternatif->image_char = $request->image_char;
        $alternatif->w1 = $request->w1;
        $alternatif->w2 = $request->w2;
        $alternatif->w3 = $request->w3;
        $alternatif->w4 = $request->w4;
        if($request->hasfile('image_char'))
        {
            $file = $request->file('image_char');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('assets/images/', $filename);
            $alternatif->image_char = $filename;
        }
        $alternatif->save();

        return redirect()->route('alternatif.index')->with('success','Data Telah Berhasil Ditambah.');
    }
    public function destroy($id)
    {
        $alternatif = Alternatif::find($id);
        $alternatif->delete();
        return redirect()->route('alternatif.index')->with('success','Data Berhasil Dihapus');
    }
    public function clear(){
        Alternatif::truncate();
        return redirect()->route('alternatif.index')->with('success','Data Telah Berhasil Dihapus.');
    }

}
